
import * as data from "./index-charts"
"use strict";
(function () {

	// ______________LOADER
	$("#global-loader").fadeOut("slow");

	// ______________Full screen
	$(document).on("click", ".fullscreen-button", function toggleFullScreen() {
		if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
			if (document.documentElement.requestFullScreen) {
				document.documentElement.requestFullScreen();
			} else if (document.documentElement.mozRequestFullScreen) {
				document.documentElement.mozRequestFullScreen();
			} else if (document.documentElement.webkitRequestFullScreen) {
				document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
			} else if (document.documentElement.msRequestFullscreen) {
				document.documentElement.msRequestFullscreen();
			}
		} else {
			$('html').removeClass('fullscreen-button');
			if (document.cancelFullScreen) {
				document.cancelFullScreen();
			} else if (document.mozCancelFullScreen) {
				document.mozCancelFullScreen();
			} else if (document.webkitCancelFullScreen) {
				document.webkitCancelFullScreen();
			} else if (document.msExitFullscreen) {
				document.msExitFullscreen();
			}
		}
	})

	// ______________Cover Image
	$(".cover-image").each(function () {
		var attr = $(this).attr('data-image-src');
		if (typeof attr !== typeof undefined && attr !== false) {
			$(this).css('background', 'url(' + attr + ') center center');
		}
	});

	// ______________Toast
	var toastElList = [].slice.call(document.querySelectorAll('.toast'))
	var toastList = toastElList.map(function (toastEl) {
		return new bootstrap.Toast(toastEl)
	})

	// ______________ BACK TO TOP BUTTON
	$(window).on("scroll", function (e) {
		if ($(this).scrollTop() > 130) {
			$('#back-to-top').removeClass('animate-reverse');
			$('#back-to-top').addClass('animate');
			$('#back-to-top').fadeIn('slow');
		} else {
			$('#back-to-top').removeClass('animate');
			$('#back-to-top').addClass('animate-reverse');
			$('#back-to-top').fadeOut('slow');
		}
	});

	// ______________ PROGRESS BAR ON SCROLL
	window.addEventListener('scroll', () => {
		var widnowScroll = document.body.scrollTop || document.documentElement.scrollTop,
			height = document.documentElement.scrollHeight - document.documentElement.clientHeight,
			scrollAmount = (widnowScroll / height) * 100;
			if(document.querySelector(".progress-top-bar")){
		document.querySelector(".progress-top-bar").style.width = scrollAmount + "%";
			}
	})
	
	/* Headerfixed */
	$(window).on("scroll", function (e) {
		if ($(window).scrollTop() >= 66) {
			$('main-header').addClass('fixed-header');
		}
		else {
			$('.main-header').removeClass('fixed-header');
		}
	});

	// ______________Search
	$('body, .main-header form[role="search"] button[type="reset"]').on('click keyup', function (event) {
		if (event.which == 27 && $('.main-header form[role="search"]').hasClass('active') ||
			$(event.currentTarget).attr('type') == 'reset') {
			closeSearch();
		}
	});
	function closeSearch() {
		var $form = $(' form[role="search"].active')
		$form.find('input').val('');
		$form.removeClass('active');
		$('body').removeClass('search-open');
	}
	// Show Search if form is not active // event.preventDefault() is important, this prevents the form from submitting
	$(document).on('click', ' form[role="search"]:not(.active) button[type="submit"]', function (event) {
		event.preventDefault();
		var $form = $(this).closest('form'),
			$input = $form.find('input');
		$form.addClass('active');
		$input.focus();
		$('body').addClass('search-open');
	});
	// if your form is ajax remember to call `closeSearch()` to close the search container
	$(document).on('click', ' form[role="search"].active button[type="submit"]', function (event) {
		event.preventDefault();
		var $form = $(this).closest('form'),
			$input = $form.find('input');
		$('#showSearchTerm').text($input.val());
		closeSearch()
		$('body').addClass('search-open');
	});

	// if your form is ajax remember to call `closeSearch()` to close the search container
	$(document).on('click', ' form[role="search"].active button[type="reset"]', function (event) {
		event.preventDefault();
		$('body').removeClass('search-open');
		var $form = $(this).closest('form'),
			$input = $form.find('input');
		$('#showSearchTerm').text($input.val());
		closeSearch()
	});

	//  item notes
	$('.thumb').click(function () {
		if (!$(this).hasClass('active')) {
			$(".thumb.active").removeClass("active");
			$(this).addClass("active");
		}
	});
	$('.thumb1').click(function () {
		if (!$(this).hasClass('active')) {
			$(".thumb1.active").removeClass("active");
			$(this).addClass("active");
		}
	});
	$('.thumb2').click(function () {
		if (!$(this).hasClass('active')) {
			$(".thumb2.active").removeClass("active");
			$(this).addClass("active");
		}
	});

	// ______________ Function for remove card in Whislist
	const DIV_CARD1 = '.Wishlist-card';

	$(document).on('click', '[data-bs-toggle="card-remove"]', function (e) {
		console.log('ok');
		let $card2 = $(this).closest(DIV_CARD1);
		$card2.remove();
		e.preventDefault();
		return false;
	});
	// ______________ Function for card
	const DIV_CARD = 'div.card';

	// ______________ Function for remove card
	$(document).on('click', '[data-bs-toggle="card-remove"]', function (e) {
		let $card = $(this).closest(DIV_CARD);
		$card.remove();
		e.preventDefault();
		return false;
	});
	// ______________ Functions for collapsed card
	$(document).on('click', '[data-bs-toggle="card-collapse"]', function (e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-collapsed');
		e.preventDefault();
		return false;
	});
	// ______________ Card full screen
	$(document).on('click', '[data-bs-toggle="card-fullscreen"]', function (e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-fullscreen').removeClass('card-collapsed');
		e.preventDefault();
		return false;
	});
	// open multiple links on click
	$('a#openAllBtn').click(function (e) {
		window.open('calendar');
		window.open('contacts');
		window.open('file-manager');
		window.open('mail-inbox');
		window.open('gallery');
		window.open('blog');
		window.open('shop');
		window.open('form-elements');
		e.preventDefault();
		return false;
	});
	/* ----------------------------------- */

	// this will hide dropdown menu from open in mobile
	$('.dropdown-menu .main-header-arrow').on('click', function (e) {
		e.preventDefault();
		$(this).closest('.dropdown').removeClass('show');
	});

	// navbar backdrop for mobile only
	$('body').append('<div class="main-navbar-backdrop"></div>');
	$('.main-navbar-backdrop').on('click touchstart', function () {
		$('body').removeClass('main-navbar-show');
	});

	// Close dropdown menu of header menu
	$(document).on('click touchstart', function (e) {
		e.stopPropagation();
		// closing of dropdown menu in header when clicking outside of it
		var dropTarg = $(e.target).closest('.main-header .dropdown').length;
		if (!dropTarg) {
			$('.main-header .dropdown').removeClass('show');
		}
		// closing nav sub menu of header when clicking outside of it
		if (window.matchMedia('(min-width: 992px)').matches) {
			// Navbar
			var navTarg = $(e.target).closest('.main-navbar .nav-item').length;
			if (!navTarg) {
				$('.main-navbar .show').removeClass('show');
			}
			// Header Menu
			var menuTarg = $(e.target).closest('.main-header-menu .nav-item').length;
			if (!menuTarg) {
				$('.main-header-menu .show').removeClass('show');
			}
			if ($(e.target).hasClass('main-menu-sub-mega')) {
				$('.main-header-menu .show').removeClass('show');
			}
		} else {
			//
			if (!$(e.target).closest('#mainMenuShow').length) {
				var hm = $(e.target).closest('.main-header-menu').length;
				if (!hm) {
					$('body').removeClass('main-header-menu-show');
				}
			}
		}
	});
	$('#mainMenuShow').on('click', function (e) {
		e.preventDefault();
		$('body').toggleClass('main-header-menu-show');
	})
	$('.main-header-menu .with-sub').on('click', function (e) {
		e.preventDefault();
		$(this).parent().toggleClass('show');
		$(this).parent().siblings().removeClass('show');
	})
	$('.main-header-menu-header .close').on('click', function (e) {
		e.preventDefault();
		$('body').removeClass('main-header-menu-show');
	})

	$(".card-header-right .card-option .fe fe-chevron-left").on("click", function () {
		var a = $(this);
		if (a.hasClass("icofont-simple-right")) {
			a.parents(".card-option").animate({
				width: "35px",
			})
		} else {
			a.parents(".card-option").animate({
				width: "180px",
			})
		}
		$(this).toggleClass("fe fe-chevron-right").fadeIn("slow")
	});

	// ___________TOOLTIP	
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl)
	})

	// __________POPOVER
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
		return new bootstrap.Popover(popoverTriggerEl)
	})

	// ______________ SWITCHER-toggle ______________//
	$('.layout-setting').on("click", function (e) {
		let html = document.querySelector('html');
		if (html.getAttribute('data-theme-color') === "dark") {
			html.setAttribute('data-theme-color', 'light');
			html.setAttribute('data-header-color', 'light');
			html.setAttribute('data-menu-color', 'light');
			$('#switchbtn-lightmenu').prop('checked', true);
			$('#switchbtn-lightheader').prop('checked', true);
			// checkOptions();
			localStorage.removeItem("zembgColor");
			localStorage.removeItem("zembgwhite");
			localStorage.removeItem("zemheaderbg");
			localStorage.removeItem("zemmenubg");
			let mainHeader = document.querySelector('.main-header');
			mainHeader.style = "";
			let appSidebar = document.querySelector('.app-sidebar');
			appSidebar.style = "";
			document.querySelector('html').style = '';
			names();

		} else {
			html.setAttribute('data-theme-color', 'dark');
			html.setAttribute('data-header-color', 'dark');
			html.setAttribute('data-menu-color', 'dark');
			$('#switchbtn-darkmenu').prop('checked', true);
			$('#switchbtn-darkheader').prop('checked', true);
			// checkOptions();
			localStorage.removeItem("zembgColor");
			localStorage.removeItem("zembgwhite");
			localStorage.removeItem("zemheaderbg");
			localStorage.removeItem("zemmenubg");
			let mainHeader = document.querySelector('.main-header');
			mainHeader.style = "";
			let appSidebar = document.querySelector('.app-sidebar');
			appSidebar.style = "";
			document.querySelector('html').style = '';
			names();
		}
	});

})();

// chart colors
let myVarVal;
function names() {
    'use strict'
    let primaryColorVal = getComputedStyle(document.documentElement).getPropertyValue('--primary-rgb').trim();

    //get variable
    myVarVal = localStorage.getItem("zemprimaryColor") ||primaryColorVal;

    // console.log(myVarVal);
    if (document.querySelector('#salesChart') !== null) {
        data.salesChart(myVarVal);
    }
    
    if (document.querySelector('#total-investment') !== null) {
        data.totalInvestment(myVarVal);
    }

    if (document.querySelector('#chartA') !== null) {
        data.chartA(myVarVal);
    }
    if (document.querySelector('#revenueReport') !== null) {
        data.revenueReport(myVarVal);
    }

    if (document.querySelector('#projectReport') !== null) {
        data.projectReport(myVarVal);
    }

    if (document.querySelector('#totalRevenue') !== null) {
        data.totalRevenue(myVarVal);
    }

    if (document.querySelector('#visitorsGrowth') !== null) {
        data.visitorsGrowth(myVarVal);
    }

    if (document.querySelector('#audienceReport') !== null) {
        data.audienceReport(myVarVal);
    }

    if (document.querySelector('#sessionsDevice') !== null) {
        data.sessionsDevice(myVarVal);
    }

    if (document.querySelector('#sessionsCountry') !== null) {
        data.sessionsCountry(myVarVal);
    }

    if (document.querySelector('#cryptoReport') !== null) {
        data.cryptoReport(myVarVal);
    }

    if (document.querySelector('#salesReport') !== null) {
        data.salesReport(myVarVal);
    }
}
names()

export function checkOptions() {

    // horizontal
    if (localStorage.getItem('zemlayout') === "horizontal") {
        $('#switchbtn-horizontal').prop('checked', true);
    }

    // horizontal-hover
    if (localStorage.getItem('zemlayout') === 'horizontalhover') {
        $('#switchbtn-horizontalHover').prop('checked', true);
    }

    //RTL 
    if (localStorage.getItem('zemrtl')) {
        $('#switchbtn-rtl').prop('checked', true);
    }
    
    // themecolors 
    if (localStorage.zemthemecolors) {
        let themeColors = localStorage.getItem("zemthemecolors");
        switch (themeColors) {
            case 'default':
                $('#switchbtn-default').prop('checked', true);
                break;
            case 'light':
                $('#switchbtn-light-theme').prop('checked', true);
                $('#switchbtn-lightheader').prop('checked', true);
                $('#switchbtn-lightmenu').prop('checked', true);
                break;
            case 'dark':
                $('#switchbtn-dark').prop('checked', true);
                $('#switchbtn-darkmenu').prop('checked', true);
                $('#switchbtn-darkheader').prop('checked', true);
                break;
            case 'glassy':
                $('#switchbtn-glassy-theme').prop('checked', true);
                break;
        }
    }

    //noshadow 
    if (localStorage.zemverticalstyles) {
        let verticalStyles = localStorage.getItem('zemverticalstyles');
        switch (verticalStyles) {
            case 'default':
                $('#switchbtn-defaultmenu').prop('checked', true);
                break;
            case 'closed':
                $('#switchbtn-closed').prop('checked', true);
                break;
            case 'icontext':
                $('#switchbtn-text').prop('checked', true);
                break;
            case 'overlay':
                $('#switchbtn-overlay').prop('checked', true);
                break;
            case 'hover':
                $('#switchbtn-hoversub').prop('checked', true);
                break;
            case 'hover1':
                $('#switchbtn-hoversub1').prop('checked', true);
                break;
            case 'doublemenu':
                $('#switchbtn-doublemenu').prop('checked', true);
                break;
            default:
                $('#switchbtn-defaultmenu').prop('checked', true);
                break;
        }
    }

    //boxed 
    if (localStorage.getItem('zemboxed')) {
        $('#switchbtn-boxed').prop('checked', true);
    }

    //scrollable 
    if (localStorage.getItem('zemscrollable')) {
        $('#switchbtn-scrollable').prop('checked', true);
    }

    //centerlogo 
    if (localStorage.getItem('zemcenterlogo')) {
        $('#switchbtn-centerlogo').prop('checked', true);
    }
}

function localStorageBackup() {
    // if there is a value stored, update color picker and background color
    // Used to retrive the data from local storage
    if (localStorage.zemprimaryColor) {
        if (document.getElementById('colorID')) {
            document.getElementById('colorID').value = localStorage.zemprimaryColor;
        }
        document.querySelector('html').style.setProperty('--primary-rgb', localStorage.zemprimaryColor);
    }
    if(localStorage.zemBackground) {
        if (document.getElementById('colorID1')) {
            document.getElementById('colorID1').value = localStorage.zemBackground;
        }
         document.querySelector('html').style.setProperty('--background-rgb', localStorage.zemBackground);
    }
    if (localStorage.zemrtl) {
        let html = document.querySelector('html');
        html.setAttribute('dir', 'rtl');
    }
    if (localStorage.zemlayout) {
        let html = document.querySelector('html');
        let layoutValue = localStorage.getItem('zemlayout');
        html.setAttribute('data-layout', 'horizontal');
        switch (layoutValue) {
            case 'horizontal':
                html.setAttribute('data-hor-style', 'hor-click');
                break;
            case 'horizontalhover':
                html.setAttribute('data-hor-style', 'hor-hover');
                break;
        }
    }
    if (localStorage.zemthemecolors) {
        let html = document.querySelector('html');
        let themeColors = localStorage.getItem("zemthemecolors");
        switch (themeColors) {
            case 'default': 
            html.setAttribute('data-theme-color', 'default');
            break;
            case 'light': 
            html.setAttribute('data-theme-color', 'light');
            break;
            case 'dark': 
            html.setAttribute('data-theme-color', 'dark');
            break;
            case 'glassy': 
            html.setAttribute('data-theme-color', 'glassy');
            break;
        }
    }
    if (localStorage.zemmenubgimg) {
        let html = document.querySelector('html');
        let menubgimg = localStorage.getItem("zemmenubgimg");
        switch (menubgimg) {
            case 'bg-img1':
                html.setAttribute('data-menuimg', 'bg-img1');
                break;
            case 'bg-img2':
                html.setAttribute('data-menuimg', 'bg-img2')
                break;
            case 'bg-img3':
                html.setAttribute('data-menuimg', 'bg-img3')
                break;
            case 'bg-img4':
                html.setAttribute('data-menuimg', 'bg-img4')
                break;
        }
    }
    if (localStorage.zemverticalstyles) {
        let html = document.querySelector('html');
        let verticalStyles = localStorage.getItem('zemverticalstyles');
        if (!(document.body.classList.contains('error-page1'))) {
            switch (verticalStyles) {
                case 'closed':
                    hoverLayoutFn();
                    html.setAttribute('data-vertical-style', 'closed');
                    break;
                case 'icontext':
                    textLayoutFn();
                    html.setAttribute('data-vertical-style', 'icontext');
                    break;
                case 'overlay':
                    hoverLayoutFn();
                    html.setAttribute('data-vertical-style', 'overlay');
                    break;
                case 'hover':
                    hoverLayoutFn();
                    html.setAttribute('data-vertical-style', 'hover');
                    break;
                case 'hover1':
                    html.setAttribute('data-vertical-style', 'hover1');
                    hoverLayoutFn();
                    break;
                case 'doublemenu':
                    html.setAttribute('data-vertical-style', 'doublemenu');
                    doubleLayoutFn();
                    break;

            }
        }
    }
    if (localStorage.zemboxed) {
        let html = document.querySelector('html');
        html.setAttribute('data-width', 'boxed');
    }
    if (localStorage.zemscrollable) {
        let html = document.querySelector('html');
        html.setAttribute('data-position', 'scrollable');
    }

    if (localStorage.zemcenterlogo) {
        let html = document.querySelector('html');
        html.setAttribute('data-logo', 'centerlogo');
    }
}
localStorageBackup();

export {names, myVarVal};

document.cookie = "SameSite"