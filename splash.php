<?php session_start();

$(document).ready(function () { if( $.cookie('splashscreen') == null ) { // Here you are checking if cookie is existing if not you are showing a splash screen and set a cookie $("#splashscreen").fadeIn(); $.cookie("splashscreen", 1, { expires : 10 }); // cookie is valid for 10 days } $("#splashscreen").click(function () { $("#splashscreen").fadeOut(2000); }); });

