$(function () {
	"use strict";
	
    var diff = new Date () - new Date ("1990/05/09");
    var age = Math.floor (diff/31536000000);
    $('#age').text (age);
});