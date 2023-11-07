"use strict";
(function() {
  var isWindows = navigator.platform.indexOf('Win') > -1 ? true : false;

  if (isWindows) {
    // if we are on windows OS we activate the perfectScrollbar function
    if (document.getElementsByClassName('main-content')[0]) {
      var mainpanel = document.querySelector('.main-content');
      var ps = new PerfectScrollbar(mainpanel);
    };

    if (document.getElementsByClassName('sidenavbar')[0]) {
      var sidebar = document.querySelector('.sidenavbar');
      var ps1 = new PerfectScrollbar(sidebar);
    };

    if (document.getElementsByClassName('sidestbar-collapse')[0]) {
      var fixedplugin = document.querySelector('.sidestbar:not(.sidestbar-expand-lg) .sidestbar-collapse');
      var ps2 = new PerfectScrollbar(fixedplugin);
    };

    if (document.getElementsByClassName('fixed-plugin')[0]) {
      var fixedplugin = document.querySelector('.fixed-plugin');
      var ps3 = new PerfectScrollbar(fixedplugin);
    };
  };
})();

// Verify sidestbar blur on scroll
if (document.getElementById('sidestbarBlur')) {
  sidestbarBlurOnScroll('sidestbarBlur');
}

// initialization of Tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})


// when input is focused add focused class for style
function focused(el) {
  if (el.parentElement.classList.contains('input-group')) {
    el.parentElement.classList.add('focused');
  }
}

// when input is focused remove focused class for style
function defocused(el) {
  if (el.parentElement.classList.contains('input-group')) {
    el.parentElement.classList.remove('focused');
  }
}

// helper for adding on all elements multiple attributes
function setAttributes(el, options) {
  Object.keys(options).forEach(function(attr) {
    el.setAttribute(attr, options[attr]);
  })
}

// adding on inputs attributes for calling the focused and defocused functions
if (document.querySelectorAll('.input-group').length != 0) {
  var allInputs = document.querySelectorAll('input.form-control');
  allInputs.forEach(el => setAttributes(el, {
    "onfocus": "focused(this)",
    "onfocusout": "defocused(this)"
  }));
}

// Fixed Plugin
if (document.querySelector('.fixed-plugin')) {
  var fixedPlugin = document.querySelector('.fixed-plugin');
  var fixedPluginButton = document.querySelector('.fixed-plugin-button');
  var fixedPluginButtonNav = document.querySelector('.fixed-plugin-button-nav');
  var fixedPluginCard = document.querySelector('.fixed-plugin .card');
  var fixedPluginCloseButton = document.querySelectorAll('.fixed-plugin-close-button');
  var sidestbar = document.getElementById('sidestbarBlur');
  var buttonsidestbarFixed = document.getElementById('sidestbarFixed');

  if (fixedPluginButton) {
    fixedPluginButton.onclick = function() {
      if (!fixedPlugin.classList.contains('show')) {
        fixedPlugin.classList.add('show');
      } else {
        fixedPlugin.classList.remove('show');
      }
    }
  }

  if (fixedPluginButtonNav) {
    fixedPluginButtonNav.onclick = function() {
      if (!fixedPlugin.classList.contains('show')) {
        fixedPlugin.classList.add('show');
      } else {
        fixedPlugin.classList.remove('show');
      }
    }
  }

  fixedPluginCloseButton.forEach(function(el) {
    el.onclick = function() {
      fixedPlugin.classList.remove('show');
    }
  })

  document.querySelector('body').onclick = function(e) {
    if (e.target != fixedPluginButton && e.target != fixedPluginButtonNav && e.target.closest('.fixed-plugin .card') != fixedPluginCard) {
      fixedPlugin.classList.remove('show');
    }
  }

  if (sidestbar) {
    if (sidestbar.getAttribute('data-scroll') == 'true' && buttonsidestbarFixed) {
      buttonsidestbarFixed.setAttribute("checked", "true");
    }
  }

}

//Set Sidebar Color
function sidebarColor(a) {
  var parent = a.parentElement.children;
  var color = a.getAttribute("data-color");

  for (var i = 0; i < parent.length; i++) {
    parent[i].classList.remove('active');
  }

  if (!a.classList.contains('active')) {
    a.classList.add('active');
  } else {
    a.classList.remove('active');
  }

  var sidebar = document.querySelector('.sidenavbar');
  sidebar.setAttribute("data-color", color);

  if (document.querySelector('#sidenavbarCard')) {
    var sidenavbarCard = document.querySelector('#sidenavbarCard+.btn+.btn');
    let sidenavbarCardClasses = ['btn', 'btn-sm', 'w-100', 'mb-0', 'bg-gradient-' + color];
    sidenavbarCard.removeAttribute('class');
    sidenavbarCard.classList.add(...sidenavbarCardClasses);
  }
}

// Set Sidebar Type
function sidebarType(a) {
  var parent = a.parentElement.children;
  var color = a.getAttribute("data-class");
  var body = document.querySelector("body");
  var bodyWhite = document.querySelector("body:not(.dark-version)");
  var bodyDark = body.classList.contains('dark-version');

  var colors = [];

  for (var i = 0; i < parent.length; i++) {
    parent[i].classList.remove('active');
    colors.push(parent[i].getAttribute('data-class'));
  }

  if (!a.classList.contains('active')) {
    a.classList.add('active');
  } else {
    a.classList.remove('active');
  }

  var sidebar = document.querySelector('.sidenavbar');

  for (var i = 0; i < colors.length; i++) {
    sidebar.classList.remove(colors[i]);
  }

  sidebar.classList.add(color);


  // Remove text-white/text-dark classes
  if (color == 'bg-white') {
    var textWhites = document.querySelectorAll('.sidenavbar .text-white');
    for (let i = 0; i < textWhites.length; i++) {
      textWhites[i].classList.remove('text-white');
      textWhites[i].classList.add('text-dark');
    }
  } else {
    var textDarks = document.querySelectorAll('.sidenavbar .text-dark');
    for (let i = 0; i < textDarks.length; i++) {
      textDarks[i].classList.add('text-white');
      textDarks[i].classList.remove('text-dark');
    }
  }

  if (color == 'bg-default' && bodyDark) {
    var textDarks = document.querySelectorAll('.sidestbar-brand .text-dark');
    for (let i = 0; i < textDarks.length; i++) {
      textDarks[i].classList.add('text-white');
      textDarks[i].classList.remove('text-dark');
    }
  }

  // Remove logo-white/logo-dark

  if ((color == 'bg-white') && bodyWhite) {
    var sidestbarBrand = document.querySelector('.sidestbar-brand-img');
    var sidestbarBrandImg = sidestbarBrand.src;

    if (sidestbarBrandImg.includes('logo-ct.png')) {
      var sidestbarBrandImgNew = sidestbarBrandImg.replace("logo-ct", "logo-ct-dark");
      sidestbarBrand.src = sidestbarBrandImgNew;
    }
  } else {
    var sidestbarBrand = document.querySelector('.sidestbar-brand-img');
    var sidestbarBrandImg = sidestbarBrand.src;
    if (sidestbarBrandImg.includes('logo-ct-dark.png')) {
      var sidestbarBrandImgNew = sidestbarBrandImg.replace("logo-ct-dark", "logo-ct");
      sidestbarBrand.src = sidestbarBrandImgNew;
    }
  }

  if (color == 'bg-white' && bodyDark) {
    var sidestbarBrand = document.querySelector('.sidestbar-brand-img');
    var sidestbarBrandImg = sidestbarBrand.src;

    if (sidestbarBrandImg.includes('logo-ct.png')) {
      var sidestbarBrandImgNew = sidestbarBrandImg.replace("logo-ct", "logo-ct-dark");
      sidestbarBrand.src = sidestbarBrandImgNew;
    }
  }
}

// Set sidestbar Fixed
function sidestbarFixed(el) {
  let classes = ['position-sticky', 'bg-white', 'left-auto', 'top-2', 'z-index-sticky'];
  const sidestbar = document.getElementById('sidestbarBlur');

  if (!el.getAttribute("checked")) {
    toggleNavLinksColor('blur');
    sidestbar.classList.add(...classes);
    sidestbar.setAttribute('data-scroll', 'true');
    sidestbarBlurOnScroll('sidestbarBlur');
    el.setAttribute("checked", "true");
  } else {
    toggleNavLinksColor('transparent');
    sidestbar.classList.remove(...classes);
    sidestbar.setAttribute('data-scroll', 'false');
    sidestbarBlurOnScroll('sidestbarBlur');
    el.removeAttribute("checked");
  }
};

// Set sidestbar Minimized
function sidestbarMinimize(el) {
  var sidenavbarShow = document.getElementsByClassName('g-sidenavbar-show')[0];

  if (!el.getAttribute("checked")) {
    sidenavbarShow.classList.remove('g-sidenavbar-pinned');
    sidenavbarShow.classList.add('g-sidenavbar-hidden');
    el.setAttribute("checked", "true");
  } else {
    sidenavbarShow.classList.remove('g-sidenavbar-hidden');
    sidenavbarShow.classList.add('g-sidenavbar-pinned');
    el.removeAttribute("checked");
  }
}

function toggleNavLinksColor(type) {
  let navLinks = document.querySelectorAll('.sidestbar-main .nav-link, .sidestbar-main .breadcrumb-item, .sidestbar-main .breadcrumb-item a, .sidestbar-main h6')
  let navLinksToggler = document.querySelectorAll('.sidestbar-main .sidenavbar-toggler-line')

  if (type === "blur") {
    navLinks.forEach(element => {
      element.classList.remove('text-white')
    });

    navLinksToggler.forEach(element => {
      element.classList.add('bg-dark')
      element.classList.remove('bg-white')
    });
  } else if (type === "transparent") {
    navLinks.forEach(element => {
      element.classList.add('text-white')
    });

    navLinksToggler.forEach(element => {
      element.classList.remove('bg-dark')
      element.classList.add('bg-white')
    });
  }
}


// sidestbar blur on scroll
function sidestbarBlurOnScroll(id) {
  const sidestbar = document.getElementById(id);
  let sidestbarScrollActive = sidestbar ? sidestbar.getAttribute("data-scroll") : false;
  let scrollDistance = 5;
  let classes = ['bg-white', 'left-auto', 'position-sticky'];
  let toggleClasses = ['shadow-none'];

  if (sidestbarScrollActive == 'true') {
    window.onscroll = debounce(function() {
      if (window.scrollY > scrollDistance) {
        blursidestbar();
      } else {
        transparentsidestbar();
      }
    }, 10);
  } else {
    window.onscroll = debounce(function() {
      transparentsidestbar();
    }, 10);
  }

  var isWindows = navigator.platform.indexOf('Win') > -1 ? true : false;

  if (isWindows) {
    var content = document.querySelector('.main-content');
    if (sidestbarScrollActive == 'true') {
      content.addEventListener('ps-scroll-y', debounce(function() {
        if (content.scrollTop > scrollDistance) {
          blursidestbar();
        } else {
          transparentsidestbar();
        }
      }, 10));
    } else {
      content.addEventListener('ps-scroll-y', debounce(function() {
        transparentsidestbar();
      }, 10));
    }
  }

  function blursidestbar() {
    sidestbar.classList.add(...classes)
    sidestbar.classList.remove(...toggleClasses)

    toggleNavLinksColor('blur');
  }

  function transparentsidestbar() {
    sidestbar.classList.remove(...classes)
    sidestbar.classList.add(...toggleClasses)

    toggleNavLinksColor('transparent');
  }
}


// Debounce Function
// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.
function debounce(func, wait, immediate) {
  var timeout;
  return function() {
    var context = this,
      args = arguments;
    var later = function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};

// Toggle sidenavbar
const iconsidestbarsidenavbar = document.getElementById('iconsidestbarsidenavbar');
const iconsidenavbar = document.getElementById('iconsidenavbar');
const sidenavbar = document.getElementById('sidenavbar-main');
let body = document.getElementsByTagName('body')[0];
let className = 'g-sidenavbar-pinned';

if (iconsidestbarsidenavbar) {
  iconsidestbarsidenavbar.addEventListener("click", togglesidenavbar);
}

if (iconsidenavbar) {
  iconsidenavbar.addEventListener("click", togglesidenavbar);
}

function togglesidenavbar() {
  if (body.classList.contains(className)) {
    body.classList.remove(className);
    setTimeout(function() {
      sidenavbar.classList.remove('bg-white');
    }, 100);
    sidenavbar.classList.remove('bg-transparent');

  } else {
    body.classList.add(className);
    sidenavbar.classList.add('bg-white');
    sidenavbar.classList.remove('bg-transparent');
    iconsidenavbar.classList.remove('d-none');
  }
}

let html = document.getElementsByTagName('html')[0];

html.addEventListener("click", function(e) {
  if (body.classList.contains('g-sidenavbar-pinned') && !e.target.classList.contains('sidenavbar-toggler-line')) {
    body.classList.remove(className);
  }
});

// Resize sidestbar color depends on configurator active type of sidenavbar

let referenceButtons = document.querySelector('[data-class]');

window.addEventListener("resize", sidestbarColorOnResize);

function sidestbarColorOnResize() {
  if (window.innerWidth > 1200) {
    if (referenceButtons.classList.contains('active') && referenceButtons.getAttribute('data-class') === 'bg-transparent') {
      sidenavbar.classList.remove('bg-white');
    } else {
      if (!body.classList.contains('dark-version')) {
        sidenavbar.classList.add('bg-white');
      }
    }
  } else {
    sidenavbar.classList.add('bg-white');
    sidenavbar.classList.remove('bg-transparent');
  }
}

// Deactivate sidenavbar type buttons on resize and small screens
window.addEventListener("resize", sidenavbarTypeOnResize);
window.addEventListener("load", sidenavbarTypeOnResize);

function sidenavbarTypeOnResize() {
  let elements = document.querySelectorAll('[onclick="sidebarType(this)"]');
  if (window.innerWidth < 1200) {
    elements.forEach(function(el) {
      el.classList.add('disabled');
    });
  } else {
    elements.forEach(function(el) {
      el.classList.remove('disabled');
    });
  }
}


// Tabs navigation

var total = document.querySelectorAll('.nav-pills');

total.forEach(function(item, i) {
  var moving_div = document.createElement('div');
  var first_li = item.querySelector('li:first-child .nav-link');
  var tab = first_li.cloneNode();
  tab.innerHTML = "-";

  moving_div.classList.add('moving-tab', 'position-absolute', 'nav-link');
  moving_div.appendChild(tab);
  item.appendChild(moving_div);

  var list_length = item.getElementsByTagName("li").length;

  moving_div.style.padding = '0px';
  moving_div.style.width = item.querySelector('li:nth-child(1)').offsetWidth + 'px';
  moving_div.style.transform = 'translate3d(0px, 0px, 0px)';
  moving_div.style.transition = '.5s ease';

  item.onmouseover = function(event) {
    let target = getEventTarget(event);
    let li = target.closest('li'); // get reference
    if (li) {
      let nodes = Array.from(li.closest('ul').children); // get array
      let index = nodes.indexOf(li) + 1;
      item.querySelector('li:nth-child(' + index + ') .nav-link').onclick = function() {
        moving_div = item.querySelector('.moving-tab');
        let sum = 0;
        if (item.classList.contains('flex-column')) {
          for (var j = 1; j <= nodes.indexOf(li); j++) {
            sum += item.querySelector('li:nth-child(' + j + ')').offsetHeight;
          }
          moving_div.style.transform = 'translate3d(0px,' + sum + 'px, 0px)';
          moving_div.style.height = item.querySelector('li:nth-child(' + j + ')').offsetHeight;
        } else {
          for (var j = 1; j <= nodes.indexOf(li); j++) {
            sum += item.querySelector('li:nth-child(' + j + ')').offsetWidth;
          }
          moving_div.style.transform = 'translate3d(' + sum + 'px, 0px, 0px)';
          moving_div.style.width = item.querySelector('li:nth-child(' + index + ')').offsetWidth + 'px';
        }
      }
    }
  }
});


// Tabs navigation resize

window.addEventListener('resize', function(event) {
  total.forEach(function(item, i) {
    item.querySelector('.moving-tab').remove();
    var moving_div = document.createElement('div');
    var tab = item.querySelector(".nav-link.active").cloneNode();
    tab.innerHTML = "-";

    moving_div.classList.add('moving-tab', 'position-absolute', 'nav-link');
    moving_div.appendChild(tab);

    item.appendChild(moving_div);

    moving_div.style.padding = '0px';
    moving_div.style.transition = '.5s ease';

    let li = item.querySelector(".nav-link.active").parentElement;

    if (li) {
      let nodes = Array.from(li.closest('ul').children); // get array
      let index = nodes.indexOf(li) + 1;

      let sum = 0;
      if (item.classList.contains('flex-column')) {
        for (var j = 1; j <= nodes.indexOf(li); j++) {
          sum += item.querySelector('li:nth-child(' + j + ')').offsetHeight;
        }
        moving_div.style.transform = 'translate3d(0px,' + sum + 'px, 0px)';
        moving_div.style.width = item.querySelector('li:nth-child(' + index + ')').offsetWidth + 'px';
        moving_div.style.height = item.querySelector('li:nth-child(' + j + ')').offsetHeight;
      } else {
        for (var j = 1; j <= nodes.indexOf(li); j++) {
          sum += item.querySelector('li:nth-child(' + j + ')').offsetWidth;
        }
        moving_div.style.transform = 'translate3d(' + sum + 'px, 0px, 0px)';
        moving_div.style.width = item.querySelector('li:nth-child(' + index + ')').offsetWidth + 'px';

      }
    }
  });

  if (window.innerWidth < 991) {
    total.forEach(function(item, i) {
      if (!item.classList.contains('flex-column')) {
        item.classList.add('flex-column', 'on-resize');
      }
    });
  } else {
    total.forEach(function(item, i) {
      if (item.classList.contains('on-resize')) {
        item.classList.remove('flex-column', 'on-resize');
      }
    })
  }
});


function getEventTarget(e) {
  e = e || window.event;
  return e.target || e.srcElement;
}

// End tabs navigation

// Light Mode / Dark Mode
function darkMode(el) {
  const body = document.getElementsByTagName('body')[0];
  const hr = document.querySelectorAll('div:not(.sidenavbar) > hr');
  const sidebar = document.querySelector('.sidenavbar');
  const sidebarWhite = document.querySelectorAll('.sidenavbar.bg-white');
  const hr_card = document.querySelectorAll('div:not(.bg-gradient-dark) hr');
  const text_btn = document.querySelectorAll('button:not(.btn) > .text-dark');
  const text_span = document.querySelectorAll('span.text-dark, .breadcrumb .text-dark');
  const text_span_white = document.querySelectorAll('span.text-white');
  const text_strong = document.querySelectorAll('strong.text-dark');
  const text_strong_white = document.querySelectorAll('strong.text-white');
  const text_nav_link = document.querySelectorAll('a.nav-link.text-dark');
  const secondary = document.querySelectorAll('.text-secondary');
  const bg_gray_100 = document.querySelectorAll('.bg-gray-100');
  const bg_gray_600 = document.querySelectorAll('.bg-gray-600');
  const btn_text_dark = document.querySelectorAll('.btn.btn-link.text-dark, .btn .ni.text-dark');
  const btn_text_white = document.querySelectorAll('.btn.btn-link.text-white, .btn .ni.text-white');
  const card_border = document.querySelectorAll('.card.border');
  const card_border_dark = document.querySelectorAll('.card.border.border-dark');
  const svg = document.querySelectorAll('g');
  const sidestbarBrand = document.querySelector('.sidestbar-brand-img');
  const sidestbarBrandImg = sidestbarBrand.src;
  const navLinks = document.querySelectorAll('.sidestbar-main .nav-link, .sidestbar-main .breadcrumb-item, .sidestbar-main .breadcrumb-item a, .sidestbar-main h6');
  const cardNavLinksIcons = document.querySelectorAll('.card .nav .nav-link i');
  const cardNavSpan = document.querySelectorAll('.card .nav .nav-link span');


  if (!el.getAttribute("checked")) {
    body.classList.add('dark-version');
    if (sidestbarBrandImg.includes('logo-ct-dark.png')) {
      var sidestbarBrandImgNew = sidestbarBrandImg.replace("logo-ct-dark", "logo-ct");
      sidestbarBrand.src = sidestbarBrandImgNew;
    }
    for (var i = 0; i < cardNavLinksIcons.length; i++) {
      if (cardNavLinksIcons[i].classList.contains('text-dark')) {
        cardNavLinksIcons[i].classList.remove('text-dark');
        cardNavLinksIcons[i].classList.add('text-white');
      }
    }
    for (var i = 0; i < cardNavSpan.length; i++) {
      if (cardNavSpan[i].classList.contains('text-sm')) {
        cardNavSpan[i].classList.add('text-white');
      }
    }
    for (var i = 0; i < hr.length; i++) {
      if (hr[i].classList.contains('dark')) {
        hr[i].classList.remove('dark');
        hr[i].classList.add('light');
      }
    }
    for (var i = 0; i < hr_card.length; i++) {
      if (hr_card[i].classList.contains('dark')) {
        hr_card[i].classList.remove('dark');
        hr_card[i].classList.add('light');
      }
    }
    for (var i = 0; i < text_btn.length; i++) {
      if (text_btn[i].classList.contains('text-dark')) {
        text_btn[i].classList.remove('text-dark');
        text_btn[i].classList.add('text-white');
      }
    }
    for (var i = 0; i < text_span.length; i++) {
      if (text_span[i].classList.contains('text-dark')) {
        text_span[i].classList.remove('text-dark');
        text_span[i].classList.add('text-white');
      }
    }
    for (var i = 0; i < text_strong.length; i++) {
      if (text_strong[i].classList.contains('text-dark')) {
        text_strong[i].classList.remove('text-dark');
        text_strong[i].classList.add('text-white');
      }
    }
    for (var i = 0; i < text_nav_link.length; i++) {
      if (text_nav_link[i].classList.contains('text-dark')) {
        text_nav_link[i].classList.remove('text-dark');
        text_nav_link[i].classList.add('text-white');
      }
    }
    for (var i = 0; i < secondary.length; i++) {
      if (secondary[i].classList.contains('text-secondary')) {
        secondary[i].classList.remove('text-secondary');
        secondary[i].classList.add('text-white');
        secondary[i].classList.add('opacity-8');
      }
    }
    for (var i = 0; i < bg_gray_100.length; i++) {
      if (bg_gray_100[i].classList.contains('bg-gray-100')) {
        bg_gray_100[i].classList.remove('bg-gray-100');
        bg_gray_100[i].classList.add('bg-gray-600');
      }
    }
    for (var i = 0; i < btn_text_dark.length; i++) {
      btn_text_dark[i].classList.remove('text-dark');
      btn_text_dark[i].classList.add('text-white');
    }
    for (var i = 0; i < sidebarWhite.length; i++) {
      sidebarWhite[i].classList.remove('bg-white');
    }
    for (var i = 0; i < svg.length; i++) {
      if (svg[i].hasAttribute('fill')) {
        svg[i].setAttribute('fill', '#fff');
      }
    }
    for (var i = 0; i < card_border.length; i++) {
      card_border[i].classList.add('border-dark');
    }
    el.setAttribute("checked", "true");
  } else {
    body.classList.remove('dark-version');
    sidebar.classList.add('bg-white');
    if (sidestbarBrandImg.includes('logo-ct.png')) {
      var sidestbarBrandImgNew = sidestbarBrandImg.replace("logo-ct", "logo-ct-dark");
      sidestbarBrand.src = sidestbarBrandImgNew;
    }
    for (var i = 0; i < navLinks.length; i++) {
      if (navLinks[i].classList.contains('text-dark')) {
        navLinks[i].classList.add('text-white');
        navLinks[i].classList.remove('text-dark');
      }
    }
    for (var i = 0; i < cardNavLinksIcons.length; i++) {
      if (cardNavLinksIcons[i].classList.contains('text-white')) {
        cardNavLinksIcons[i].classList.remove('text-white');
        cardNavLinksIcons[i].classList.add('text-dark');
      }
    }
    for (var i = 0; i < cardNavSpan.length; i++) {
      if (cardNavSpan[i].classList.contains('text-white')) {
        cardNavSpan[i].classList.remove('text-white');
      }
    }
    for (var i = 0; i < hr.length; i++) {
      if (hr[i].classList.contains('light')) {
        hr[i].classList.add('dark');
        hr[i].classList.remove('light');
      }
    }
    for (var i = 0; i < hr_card.length; i++) {
      if (hr_card[i].classList.contains('light')) {
        hr_card[i].classList.add('dark');
        hr_card[i].classList.remove('light');
      }
    }
    for (var i = 0; i < text_btn.length; i++) {
      if (text_btn[i].classList.contains('text-white')) {
        text_btn[i].classList.remove('text-white');
        text_btn[i].classList.add('text-dark');
      }
    }
    for (var i = 0; i < text_span_white.length; i++) {
      if (text_span_white[i].classList.contains('text-white') && !text_span_white[i].closest('.sidenavbar') && !text_span_white[i].closest('.card.bg-gradient-dark')) {
        text_span_white[i].classList.remove('text-white');
        text_span_white[i].classList.add('text-dark');
      }
    }
    for (var i = 0; i < text_strong_white.length; i++) {
      if (text_strong_white[i].classList.contains('text-white')) {
        text_strong_white[i].classList.remove('text-white');
        text_strong_white[i].classList.add('text-dark');
      }
    }
    for (var i = 0; i < secondary.length; i++) {
      if (secondary[i].classList.contains('text-white')) {
        secondary[i].classList.remove('text-white');
        secondary[i].classList.remove('opacity-8');
        secondary[i].classList.add('text-dark');
      }
    }
    for (var i = 0; i < bg_gray_600.length; i++) {
      if (bg_gray_600[i].classList.contains('bg-gray-600')) {
        bg_gray_600[i].classList.remove('bg-gray-600');
        bg_gray_600[i].classList.add('bg-gray-100');
      }
    }
    for (var i = 0; i < svg.length; i++) {
      if (svg[i].hasAttribute('fill')) {
        svg[i].setAttribute('fill', '#252f40');
      }
    }
    for (var i = 0; i < btn_text_white.length; i++) {
      if (!btn_text_white[i].closest('.card.bg-gradient-dark')) {
        btn_text_white[i].classList.remove('text-white');
        btn_text_white[i].classList.add('text-dark');
      }
    }
    for (var i = 0; i < card_border_dark.length; i++) {
      card_border_dark[i].classList.remove('border-dark');
    }
    el.removeAttribute("checked");
  }
};