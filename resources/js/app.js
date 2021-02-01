/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});



/***
===================================================================

MY CUSTOM SCRIPTS

===================================================================
***/

function makeTimer() {
	var sessionStartTime = new Date("7 June 2021 00:00:00 GMT+03:00");
	sessionStartTime = (Date.parse(sessionStartTime) / 1000);

	var currentTime = new Date();
	currentTime = (Date.parse(currentTime) / 1000);

	var timeLeft = sessionStartTime - currentTime;

	var days = Math.floor(timeLeft / 86400);
	var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
	var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
	var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

	if(hours < "10"){
		hours = "0" + hours;
	}
	if(minutes < "10"){
		minutes = "0" + minutes;
	}
	if(seconds < "10"){
		seconds = "0" + seconds;
	}  
	
	$("#days").html(days);
	$("#hours").html(hours);
	$("#minutes").html(minutes);
	$("#seconds").html(seconds);
}

setInterval(function(){
	makeTimer();
}, 1000);


$(function() {
  // при нажатии на кнопку scrollup
  $('.scrollup-btn').click(function() {
    // переместиться в верхнюю часть страницы
    $("html, body").animate({
      scrollTop:0
    },600);
  })
})
// при прокрутке окна (window)
$(window).scroll(function() {
  // если пользователь прокрутил страницу более чем на 200px
  if ($(this).scrollTop()>200) {
    // то сделать кнопку scrollup видимой
    $('.scrollup').fadeIn();
  }
  // иначе скрыть кнопку scrollup
  else {
    $('.scrollup').fadeOut();
  }
});