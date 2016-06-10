"use strict";


var clearButton = document.getElementById('clear');
var plusminusButton = document.getElementById('equals');
var percentButton = document.getElementById('equals');

var oneButton = document.getElementById('one');
var twoButton = document.getElementById('two');
var threeButton = document.getElementById('three');
var fourButton = document.getElementById('four');
var fiveButton = document.getElementById('five');
var sixButton = document.getElementById('six');
var sevenButton = document.getElementById('seven');
var eightButton = document.getElementById('eight');
var nineButton = document.getElementById('nine');
var zeroButton = document.getElementById('zero');

var pointButton = document.getElementById('point');
var divideButton = document.getElementById('divide');
var multiplyButton = document.getElementById('multiply');
var subtractButton = document.getElementById('subtract');
var addButton = document.getElementById('add');
var equalsButton = document.getElementById('equals');

var add = function() {

}
var subtract = function() {

}
var multiply = function() {

}
var divide = function() {

}

var inputCalculateDisplay = function () {
	console.log('You pushed a button')
}

var buttonReader = function() {
	var buttonPush = document.getElementsByTagName('button');
	for (var i = 0; i < buttonPush.length; i++) {
		buttonPush[i].addEventListener('click', inputCalculateDisplay, false);
	}

}
buttonReader();