var blocks = {
	init: function() {
		$('.blocks').masonry();
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
			drop.closeAll();

			if ($(this).parents('.drop--open')) {
				drop.toggle( $(el.target).parent() );
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
	init: function(){
		$(document).on('click','.menu',function(){
			menu.toggle();
		});
		
		$(window).resize(function() {
		    menu.watch();
		});
	},

	open: function(){
		$('.nav').addClass('nav--open');
		overlay.open();
	},

	close: function(){
		$('.nav').removeClass('nav--open');
		overlay.close();
	},

	toggle: function(){
		$('.nav').toggleClass('nav--open');
		overlay.toggle();
	},

	watch: debounce(function() {
		if ( $(window).width() > 600) {
			menu.close()
		}
	}, 250)
}

$(function() {
	menu.init();
})
// Overlay

var overlay = {

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