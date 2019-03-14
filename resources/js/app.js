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
	$('.sidenav').sidenav();
	$('input#excerpt').characterCounter();
});
