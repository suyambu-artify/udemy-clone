
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.plyr = require('plyr');

require('plyr/src/scss/plyr.scss')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});


$(document).ready(function() {
	$('.js-popover').popover({
		trigger: 'hover',
		placement: 'center',
		html: true,
		content: function() {
			var id = '#' + $(this).data('id');
			return $(id).html();
		}
	});

	$('.read-more').click(function(e) {
		e.preventDefault();
		var target = '#' + $(this).data('target');
		$(target).toggleClass('hide-content');
		$(target).hasClass('hide-content') ? $(this).html('View More') : $(this).html('View Less');
	})

	
})