
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('materialize-css/dist/js/materialize.min');
require('materialize-tags/dist/js/materialize-tags.min');



$(document).ready(function(){
	//Menu retractil
	$('.menu').click(function(){
		$('#menu').toggleClass('mostrar');
	});

	//Materialize
	$('.scrollspy').scrollSpy();
	$('.parallax').parallax();
	$('.sidenav').sidenav();
	$('input#excerpt').characterCounter();

	//Efectos
	ScrollReveal().reveal('.fadeInLeft', {easing: 'ease', delay: 800, interval: 3200, origin: 'left', distance: '400px'});
	ScrollReveal().reveal('.fadeInRight', {easing: 'ease', delay: 800, interval: 3200, origin: 'right', distance: '400px'});
	ScrollReveal().reveal('.fadeInTop', {easing: 'ease', delay: 800, interval: 1200, origin: 'top', distance: '400px'});
	ScrollReveal().reveal('.fadeInBottom', {easing: 'ease', delay: 500, interval: 2500, origin: 'bottom', distance: '400px'});
	ScrollReveal().reveal('.fadeIn', {easing: 'ease-out', delay: 1000, interval: 5000});
});


