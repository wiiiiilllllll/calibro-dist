var blocks = {
	
	init: function() {
		$('.js-block').on('click', function(e){
			e.preventDefault();
			blocks.open($(this));
		})
	},

	open: function(block) {
		var stuff = block.find('.block__back').html();
		dialog.populate(stuff);
		setTimeout(function(){
			overlay.open();
		}, 100);
		setTimeout(function(){
			dialog.open();
		}, 200);
	},

	close: function() {
		$('.block--open').removeClass('block--open');
		dialog.close();
		overlay.close();
	}
}
// Debounce: a multi-purpose utility that will prevent a function
// from being triggered rapidly; eg. within 250ms
// Courtesy: http://davidwalsh.name/javascript-debounce-function
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
}

// Dialog

var dialog = {

	open: function(){
		$('.dialog').addClass('dialog--open');
		$('body').addClass('body--frozen');
	},

	close: function(){
		$('.dialog').removeClass('dialog--open');
		$('body').removeClass('body--frozen');
		setTimeout(function(){
			$('.dialog__body').html('')
		}, 300);
	},

	populate: function(stuff) {
		$('.dialog__body').html(stuff);
	}
}
// Drop
// For drop-down navigation menus

var drop = {

	init: function(){

		$('body').on('click', function(e){
			drop.closeAll();
		});

		$('body').on('click', '.drop__link', function(el){
			el.preventDefault();
			el.stopPropagation();
			// drop.closeAll();
				drop.toggle( $(el.target).parent() );

			if ($(this).parents('.drop--open')) {
				// drop.toggle( $(el.target).parent() );
			}
		});
	},

	open: function(el){
		el.addClass('drop--open');
	},

	close: function(el){
		$(el).removeClass('drop--open');
	},

	closeAll: function(){
		$('.drop--open').removeClass('drop--open');
	},

	toggle: function(el){
		$(el).toggleClass('drop--open');
	},
}

$(function(){
	drop.init();
})
// Menu
// For opening/closing the mobile menu

var menu = {
	isOpen: false,

	init: function(){
		$(document).on('click','.menu',function(){
			menu.toggle();
		});

		$(document).on('click', '.overlay', function(){
			if (menu.isOpen) {
				menu.close();
			}
		});
		
		$(window).resize(function() {
		    menu.watch();
		});
	},

	open: function(){
		$('.nav').addClass('nav--open');
		var h = $('.nav').height();
		$('.nav').css('bottom', '-'+h+'px');
		overlay.open();
		menu.isOpen = true;
		$('.header-container').addClass('isAboveOverlay')
	},

	close: function(){
		$('.nav')
			.removeClass('nav--open')
			.removeAttr('style');
			// .addClass('nav--closing');

		// setTimeout(function(){
		// 	$('.nav').removeClass('nav--closing');
		// }, 300);
		overlay.close();
		menu.isOpen = false;
		setTimeout(function(){
			$('.header-container').removeClass('isAboveOverlay')
		}, 300);
	},

	toggle: function(){
		if (menu.isOpen) {
			menu.close();
		} else {
			menu.open();
		}
	},

	watch: debounce(function() {
		if ( ($(window).width() > 600) && menu.isOpen ) {
			menu.close()
		}
	}, 250)
}

$(function() {
	menu.init();
})
// Overlay

var overlay = {

	init: function(){
		$(document).on('click', '.overlay', function(){
			dialog.close();
			overlay.close();
		})
	},

	open: function(){
		$('.overlay').addClass('overlay--open')
	},

	close: function(){
		$('.overlay').removeClass('overlay--open')
	},

	toggle: function(){
		$('.overlay').toggleClass('overlay--open')
	}
}

$(function(){
	overlay.init();
})