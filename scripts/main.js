
var ww = document.body.clientWidth;
var breakPoint = 569;
var nav = $('.neo-menu');
var navOffset = nav.offset().top;
var lastScroll = 0;
var navElementState = 'unstuck';

$(document).ready(function() {
  adjustMenu();
});




function confirmDelete() {
  var promptMsg = 'Delete ' + document.getElementById('js-pname').value + ' ?'
  document.querySelector('.dbDeleteModal').classList.add('show-me');
  document.getElementById('js-overlay').classList.add('dim');
  document.querySelector('.dbDeleteProduct').innerHTML = promptMsg;
  toggleForm('Disable');
}

function deleteProduct() {
  try
  {
    xhr = new XMLHttpRequest();
  }
  catch (e)
  {
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
  }
  if (xhr == null) {
    return;
  }

  var url = 'include/deleteproduct.php?tsku=' + document.getElementById('js-skuSelect').value;

  xhr.onreadystatechange = delHandler;
  xhr.open('GET', url, true);
  xhr.send(null);
}

function delHandler() {

  if (xhr.readyState == 4) {

    if (xhr.status == 200) {
      var result = xhr.responseText;

      if (!result == 'Success') {
        alert('saveHander Save failed ' + result);
      }

      document.getElementById('js-changed').value = 'notChanged';
      document.querySelector('.dbDeleteModal').classList.remove('show-me');
      document.getElementById('js-overlay').classList.remove('dim');
      toggleForm('Enable');
      emptyProduct();
      buildSelect();
    } else {
      alert('saveHander Ajax call failure - ' + xhr.responseText);
    }
  }


}


function setChangeFlag() {
  document.getElementById('js-changed').value='Changed';
}



function buildProductObj() {

      var pData = {
      sku         : document.getElementById('js-sku').value,
      pname       : document.getElementById('js-pname').value,
      wholesale   : document.getElementById('js-wholesale').value,
      retail      : document.getElementById('js-retail').value,
      distprice   : document.getElementById('js-distprice').value,
      distrate    : document.getElementById('js-distrate').value,
      bname       : document.getElementById('js-bname').value,
      size        : document.getElementById('js-size').value,
      family      : document.getElementById('js-family').value,
      description : document.getElementById('js-description').value,
      properties  : document.getElementById('js-properties').value,
      ingredients : document.getElementById('js-ingredients').value,
      imgfile     : document.getElementById('js-imgfile').value,
      origin      : document.getElementById('js-origin').value,
      emethod     : document.getElementById('js-emethod').value,
      eoil        : document.getElementById('js-eoil').checked,
      boil        : document.getElementById('js-boil').checked,
      other       : document.getElementById('js-other').checked,
      changed     : document.getElementById('js-changed').value
    };

    return pData;
}

function emptyProduct() {
      console.log('emptyProduct()');
      document.getElementById('js-sku').value         = '';
      document.getElementById('js-pname').value       = '';
      document.getElementById('js-wholesale').value   = '';
      document.getElementById('js-retail').value      = '';
      document.getElementById('js-distprice').value   = '';
      document.getElementById('js-distrate').value    = '';
      document.getElementById('js-bname').value       = '';
      document.getElementById('js-size').value        = '';
      document.getElementById('js-family').value      = '';
      document.getElementById('js-description').value = '';
      document.getElementById('js-properties').value  = '';
      document.getElementById('js-ingredients').value = '';
      document.getElementById('js-imgfile').value     = '';
      document.getElementById('js-origin').value      = '';
      document.getElementById('js-emethod').value     = '';
      document.getElementById('js-eoil').checked      = '';
      document.getElementById('js-boil').checked      = '';
      document.getElementById('js-other').checked     = '';
}




function setAddEnv(state) {
  if (state === 'Add') {

    var productChanged = document.getElementById('js-changed').value;

    if (productChanged=='Changed') {
      lastSaveChance();
      return;
    }

    saveButton = document.querySelector('input[name=dbsave]');
    addButton = document.querySelector('input[name=dbadd]');
    deleteButton = document.querySelector('input[name=dbdelete]');
    cancelButton = document.querySelector('input[name=dbcancel]');

    saveButton.setAttribute('onclick', 'insertProduct()');
    saveButton.setAttribute('value', 'Insert');
    addButton.classList.add('hide-me');
    deleteButton.classList.add('hide-me');
    cancelButton.setAttribute('onclick', 'setAddEnv("Remove")');
    cancelButton.setAttribute('value', 'Exit');

    document.querySelector('.db-title').innerHTML = 'Add Product';

    buildSelect('Add');
    emptyProduct();
  } else {
    saveButton = document.querySelector('input[name=dbsave]');
    addButton = document.querySelector('input[name=dbadd]');
    deleteButton = document.querySelector('input[name=dbdelete]');
    cancelButton = document.querySelector('input[name=dbcancel]');

    saveButton.setAttribute('onclick', 'saveProduct()');
    saveButton.setAttribute('value', 'Save');
    addButton.classList.remove('hide-me');
    deleteButton.classList.remove('hide-me');
    cancelButton.setAttribute('onclick', 'fetchProduct()');
    cancelButton.setAttribute('value', 'Cancel');

    document.getElementById('js-changed').value = 'notChanged';
    document.querySelector('.db-title').innerHTML = 'Product Maintenance';

    buildSelect();
    emptyProduct();
  }
}


function toggleInsertModal(modalState) {
  if (modalState === 'On') {
    document.getElementById('js-dbInsertModal').classList.add('show-me');
    document.getElementById('js-overlay').classList.add('dim');
    toggleForm('Disable');
  } else {
    document.getElementById('js-dbInsertModal').classList.remove('show-me');
    document.getElementById('js-overlay').classList.remove('dim');
    toggleForm('Enable');
  }
}


function insertProduct() {

  if (document.getElementById('js-sku').value === "" || document.getElementById('js-pname').value === "") {
    toggleInsertModal('On');
    return;
  }

  try
  {
    xhr = new XMLHttpRequest();
  }
  catch (e)
  {
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
  }
  if (xhr == null) {
    return;
  }

  var url      = 'include/insertproduct.php';
  var formData = buildProductObj();
  var fData    = JSON.stringify(formData);

  url = url + '?sData=' + fData;

  xhr.onreadystatechange = insertHandler;
  xhr.open('GET', url, true);
  xhr.send(null);
}

function insertHandler() {
  if (xhr.readyState == 4) {
    if (xhr.status == 200) {
      var result = xhr.responseText;
console.log('insertHandler(sku) = ' + document.getElementById('js-sku').value);
      buildSelect('Add');
      emptyProduct();

      if (!result == 'Success') {
        alert('insertHandler Save failed ' + result);
      }

    } else {
      alert('insertHandler Ajax call failure - ' + xhr.responseText);
    }
  }
}



function saveProduct(origin) {

  if (origin == 'SaveModal') {
    document.getElementById('js-overlay').classList.remove('dim');
    toggleForm('Enable');
  }

  try
  {
    xhr = new XMLHttpRequest();
  }
  catch (e)
  {
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
  }
  if (xhr == null) {
    return;
  }

  var url      = 'include/saveproduct.php?tsku=' + document.getElementById('js-skuSelect').value;
  var formData = buildProductObj();
  var fData    = JSON.stringify(formData);

  url = url + '&sData=' + fData;

  xhr.onreadystatechange = saveHandler;
  xhr.open('GET', url, true);
  xhr.send(null);
}

function saveHandler () {

  if (xhr.readyState == 4) {

    if (xhr.status == 200) {
      var result = xhr.responseText;

      if (document.getElementById('js-changed').value == 'Changed') {
        document.getElementById('js-changed').value = 'notChanged';
      }

      buildSelect('Save');

      if (document.getElementById('js-dbSaveModal').classList.contains('show-me')) {
        document.getElementById('js-dbSaveModal').classList.remove('show-me');
        fetchProduct('Fetch');
      }

      if (!result == 'Success') {
        alert('saveHander Save failed ' + result);
      }

    } else {
      alert('saveHander Ajax call failure - ' + xhr.responseText);
    }
  }

}



function toggleForm(enableState) {
  var form = document.querySelector('.dbinput-wrapper');
  var elements = form.elements;

  for (var i = 0, len = elements.length; i < len; ++i) {
    elements[i].disabled = (enableState == 'Enable' ? false : true);
  }
}



function lastSaveChance() {
    document.querySelector('.dbSaveModal').classList.add('show-me');
    document.getElementById('js-overlay').classList.add('dim');
    toggleForm('Disable');
}



function fetchProduct(fetchState) {
  var productChanged = document.getElementById('js-changed').value;
  var delBtn = document.getElementById('js-delButton');

  delBtn.disabled = false;

  if (productChanged=='Changed' && fetchState == 'Fetch') {
    lastSaveChance();
    return;
  }

  if (fetchState == 'cancelDelete') {
    document.querySelector('.dbDeleteModal').classList.remove('show-me');
    document.getElementById('js-overlay').classList.remove('dim');
    toggleForm('Enable');
    console.log('fetchState == cancelDelete js-sku = ' + document.getElementById('js-sku').value);
  }

  if (fetchState == 'Cancel') {
    delBtn.disabled = true;

    if (productChanged=='Changed') {
      document.getElementById('js-changed').value = 'notChanged';
      document.querySelector('.dbSaveModal').classList.remove('show-me');
      document.getElementById('js-overlay').classList.remove('dim');
      toggleForm('Enable');
      console.log('fetchState Cancel/Changed js-sku = ' + document.getElementById('js-sku').value);
    } else {
      console.log('fetchState = Cancel / not Changed');
      buildSelect();
      emptyProduct();
      return;
    }
  }

  if (fetchState == 'Fetch') {
    document.querySelector('.db-title').innerHTML = 'Edit Product';
  }

  try
  {
    xhr = new XMLHttpRequest();
  }
  catch (e)
  {
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
  }
  if (xhr == null) {
    return;
  }

  console.log('Fetch js-skuSelect = ' + document.getElementById('js-skuSelect').value);
  var url = 'include/getproduct.php?tsku=' + document.getElementById('js-skuSelect').value;

  xhr.onreadystatechange = fetchHandler;
  xhr.open('GET', url, true);
  xhr.send(null);
}

function fetchHandler() {
  if (xhr.readyState == 4) {

    if (xhr.status == 200) {
      var selected = eval( '(' + xhr.responseText + ')');

      document.getElementById('js-sku').value         = selected.sku;
      document.getElementById('js-pname').value       = selected.pname;
      document.getElementById('js-wholesale').value   = selected.wholesale;
      document.getElementById('js-retail').value      = selected.retail;
      document.getElementById('js-distprice').value   = selected.distprice;
      document.getElementById('js-distrate').value    = selected.distrate;
      document.getElementById('js-bname').value       = selected.bname;
      document.getElementById('js-size').value        = selected.size;
      document.getElementById('js-family').value      = selected.family;
      document.getElementById('js-description').value = selected.description;
      document.getElementById('js-properties').value  = selected.properties;
      document.getElementById('js-ingredients').value = selected.ingredients;
      document.getElementById('js-imgfile').value     = selected.imgfile;
      document.getElementById('js-origin').value      = selected.origin;
      document.getElementById('js-emethod').value     = selected.emethod;
      document.getElementById('js-eoil').checked      = (selected.eoil) ? 'checked' : '';
      document.getElementById('js-boil').checked      = (selected.boil) ? 'checked' : '';
      document.getElementById('js-other').checked     = (selected.other) ? 'checked' : '';

      document.querySelector('.dbSaveModal').classList.remove('show-me');
      //alert('from fetchHandler : ' + xhr.responseText);
    } else {
      alert('Fetch Product Ajax call failure ' + xhr.responseText);
    }
  }
}








function buildSelect(buildState) {

  if (buildState == 'Add') {
      var pickList = document.getElementById('js-skuSelect');
      var optionText = 'Adding a new product...';
      var optionNode = document.createElement('option');
      var optionContent = document.createTextNode(optionText);

      while (pickList.firstChild) {
        pickList.removeChild(pickList.firstChild);
      }

      optionNode.setAttribute('disabled', 'disabled');
      optionNode.setAttribute('selected', 'selected');
      optionNode.appendChild(optionContent);
      pickList.appendChild(optionNode);
  }

  try
  {
    xhr = new XMLHttpRequest();
  }
  catch (e)
  {
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
  }
  if (xhr == null) {
    return;
  }

  var url = 'include/updateselect.php';

  xhr.onreadystatechange = buildSelectHandler;
  xhr.open('GET', url, true);
  xhr.send(null);
  console.log('bs sku = ' + document.getElementById('js-sku').value);
}

function buildSelectHandler() {

  if (xhr.readyState == 4) {

    if (xhr.status == 200) {
      var mode = document.querySelector('input[name=dbsave]').value;
      var selected = eval( '(' + xhr.responseText + ')');
      var pickList = document.getElementById('js-skuSelect');
      var optionText = (mode=='Insert' ? 'Adding a new product ...' : 'Select a product ...');
      var optionNode = document.createElement('option');
      var optionContent = document.createTextNode(optionText);
      var currentSku = document.getElementById('js-sku').value;
      //console.log('currentSku = ' + currentSku);

      while (pickList.firstChild) {
        pickList.removeChild(pickList.firstChild);
      }

      optionNode.setAttribute('disabled', 'disabled');
      optionNode.setAttribute('selected', 'selected');
      optionNode.appendChild(optionContent);
      pickList.appendChild(optionNode);

      console.log('buildSelectHandler(current sku) = ' + currentSku);

      for (index in selected) {
        optionText    = selected[index]['sku'] + ' : ' + selected[index]['pname'];
        optionNode    = document.createElement('option');
        optionContent = document.createTextNode(optionText);

        if (currentSku == selected[index]['sku']) {
          optionNode.setAttribute('selected', 'selected');
        }
        if (mode === 'Insert') {
          optionNode.disabled=true;
        }

        optionNode.setAttribute('value', selected[index]['sku']);
        optionNode.appendChild(optionContent);
        pickList.appendChild(optionNode);
      }

    } else {
      alert('buildSelect Ajax call failure ' + xhr.responseText);
    }
  }

}










var stickMenu = function() {
  $(window).scroll(function() {
    var winScroll = $(window).scrollTop();
    var diff = winScroll - lastScroll;
    var direction = diff >= 0 ? 'down' : 'up';

    lastScroll = winScroll;

    if (winScroll > navOffset && navElementState === 'unstuck') {
      nav.addClass('stuck');
      navElementState = 'stuck';
      movePageNav('down');
    }

    if (winScroll <= navOffset && navElementState === 'stuck') {
      nav.removeClass('stuck');
      navElementState = 'unstuck';
      movePageNav('up');
    }

  });
};


$(window).bind('popstate', function (event) {
// Safari does not fire document.ready when retrieving page from FBCache
// Side effect of menu fail when clicking on a "#" link
  adjustMenu();
});



// rmenu-script.js


$(".toggleMenu").click(function(e) {
  e.preventDefault();
  $(this).toggleClass("active");
  $(".neo-menu__ul").toggle();

  var toggleState = document.getElementsByClassName('neo-menu__ul');

  if (toggleState[0].style.display == 'none') {
    $(".toggleMenu").css("color", "#153350");
    $(".toggleMenu").css("border", "solid #153350 1px");
    $(".neo-menu__ul li").removeClass("hover");
    $(".search-container").css("display", "block");
    $(".horizontal-menu-outer").css("display", "block");
    $("body").css("overflow", "visible");
  } else {
    setMenuHeight();
    $(".toggleMenu").css("color", "#3783d0");
    $(".toggleMenu").css("border", "solid #3783d0 2px");
    $(".search-container").css("display", "none");
    $(".horizontal-menu-outer").css("display", "none");
    $("body").css("overflow", "hidden");
    toggleState[0].scrollTop = 0;
  }
});


$("ul.neo-menu__ul li").click(function(n) {
  if (ww <= breakPoint) {

    event.stopPropagation();

    var nElement = n.target.className;

    if (nElement.search("parent") === -1) {
      $("body").css("overflow", "visible");
      $(".neo-menu__ul li").removeClass("hover");
      $(".neo-menu__ul").toggle();
      $(".toggleMenu").css("background-color", "white");
      $(".toggleMenu").css("color", "#153350");
    } else {
      setMenuHeight();
    }
  } // if ww <= breakPoint
});


$(window).bind('resize orientationchange', function() {
  var bannerDiv = document.getElementsByClassName("banner");
  navOffset = bannerDiv[0].offsetHeight;

  adjustMenu();
});


var setMenuHeight = function() {
  var viewportHeight = $(window).innerHeight();
  var nMenuOffset = $(".neo-menu__ul")[0].getBoundingClientRect().top;
  var menuHeight = $(".neo-menu__ul").outerHeight();

  viewportHeight -= nMenuOffset;

  if ( $(".neo-menu__ul").innerHeight() > viewportHeight) {
    $(".neo-menu__ul").css("height", viewportHeight);
  } else {
    $(".neo-menu__ul").css("height", menuHeight);
  }
}


var adjustMenu = function() {
  ww = document.body.clientWidth;


  if (ww < breakPoint) {
    $(".toggleMenu").css("display", "inline-block");
    if (!$(".toggleMenu").hasClass("active")) {
      $(".neo-menu__ul").hide();
    } else {
      $(".neo-menu__ul").show();
    }
    $(".neo-menu__ul li").unbind('mouseenter mouseleave');
    $(".neo-menu__ul li a.parent").unbind('click').bind('click', function(e) {
      // must be attached to anchor element to prevent bubbling
      e.preventDefault();
      $(this).parent("li").toggleClass("hover");
    });
  }
  else {
    $(".toggleMenu").css("display", "none");
    $(".neo-menu__ul").show();
    $(".neo-menu__ul li").removeClass("hover");
    $(".neo-menu__ul li a").unbind('click');

    $('.neo-menu__ul li').unbind('mouseenter').bind('mouseenter', function() {
      // must be attached to li so that mouseleave is not triggered when hover over submenu
      $(this).addClass('hover');
    });

    $('.neo-menu__ul li').unbind('mouseleave').bind('mouseleave', function() {
      // must be attached to li so that mouseleave is not triggered when hover over submenu
      $(this).removeClass('hover');
    });

  }

  stickMenu();
};

// end rmenu-script.js






// neo functions

function hideSearchPanel() {
  $(".search-fail").css({"display":"none"});
  $(".search-container").slideToggle('fast');
  return false;
}



function findElement(searchTerm) {
  if (searchTerm != "") {
    var inDiv = document.getElementsByClassName("container-product");
    var inPTags = document.getElementsByTagName("p");
    var counter = 0;
    var sub = 0;
    var sstr = "";
    var searchTermRegex = new RegExp(searchTerm , 'gi');
    var pStr = "";
    var oneMatch = false;

    resetElements(false);

    for (counter = 0; counter < inDiv.length; ++counter) {

      sstr = inDiv[counter].innerHTML;

      if (sstr.toLowerCase().search(searchTerm.toLowerCase()) === -1) {
        inDiv[counter].classList.add("hide-me");
      } else {
        oneMatch = true;
      }
    }

    for (sub = 0; sub < inPTags.length; sub++) {
      pStr = inPTags[sub].innerHTML;

      if (pStr.toLowerCase().search(searchTerm.toLowerCase()) != -1) {
        inPTags[sub].innerHTML = pStr.replace(searchTermRegex, '<span class="hilight">$&</span>');
      }
    }

    if (oneMatch) {
      $(".search-success").removeClass("hide-me");
      $(".search-success").addClass("show-me");
      $(".search-fail").removeClass("show-me");
      $(".search-fail").addClass("hide-me");
      $(".button--inactive").css({"color":"black"});
      $(".ptext-hmenu").css({"color":"grey"})
    } else {
      $(".search-success").removeClass("show-me");
      $(".search-fail").removeClass("hide-me");
      $(".search-success").addClass("hide-me");
      $(".search-fail").addClass("show-me");
      $(".button--inactive").css({"color":"black"});
    }
  }
}



function resetElements(wipeNSText) {
    var inDiv = document.getElementsByClassName("container-product");
    var inP = document.getElementsByTagName("p");
    var spanStart = new RegExp('<span class="hilight">', 'gi');
    var spanEnd = new RegExp('</span>', 'gi');
    var pStr = "";
    var counter = 0;

    for (counter=0; counter < inDiv.length; ++counter) {
      inDiv[counter].classList.remove("hide-me");
    }

    for (counter = 0; counter < inP.length; counter++) {
      pStr = inP[counter].innerHTML;

      if (pStr.search(spanStart) != -1) {
        pStr = pStr.replace(spanStart, '');
        pStr = pStr.replace(spanEnd, '');
        inP[counter].innerHTML = pStr;
      }
    }

    document.getElementById("clearButton").disabled = false;
    $(".button--inactive").css({"color":"rgb(180, 180, 180)"});
    $(".search-fail").removeClass("show-me");
    $(".search-success").removeClass("show-me");
    $(".search-fail").addClass("hide-me");
    $(".search-success").addClass("hide-me");
    $(".ptext-hmenu").css({"color":""})

    if (wipeNSText) {
      document.getElementsByClassName("ptext-italic")[0].value = "";
      document.getElementById("clearButton").disabled  = true;
    }
}



function movePageNav(whichWay) {
  var mWidth = $(window).width();
  var mBreakPoint = 569;
  var mLarge = 951;
  var mMedium = 768;
  var mSmall = 569;

  //console.log(whichWay);

  if (mWidth >= mBreakPoint) {

    if (mWidth >= mLarge) {
        if (whichWay === 'down') {
          $('.context-menu').animate({top: 50}, 'fast');
          $('.context-menu--wSearch').animate({top: 135}, 'fast');
        } else {
          $('.context-menu').animate({top: 175}, 'fast');
          $('.context-menu--wSearch').animate({top: 225}, 'fast');
        }
    } else if (mWidth >= mMedium) {
        if (whichWay === 'down') {
          $('.context-menu').animate({top: 55}, 'fast');
          $('.context-menu--wSearch').animate({top: 130}, 'fast');
        } else {
          $('.context-menu').animate({top: 150}, 'fast');
          $('.context-menu--wSearch').animate({top: 215}, 'fast');
        }
    } else {
        if (whichWay === 'down') {
          $('.context-menu').animate({top: 40}, 'fast');
          $('.context-menu--wSearch').animate({top: 110}, 'fast');
        } else {
          $('.context-menu').animate({top: 120}, 'fast');
          $('.context-menu--wSearch').animate({top: 190}, 'fast');
        }
      }
    }

  return true;
}


// end neo functions



