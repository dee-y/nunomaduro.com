$(function () {
	"use strict";
	
    var diff = new Date () - new Date (epoch);
    var age = Math.floor (diff/31536000000);
    $('#age').text (age);
});