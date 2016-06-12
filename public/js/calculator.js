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

function clearDisplay() {
	console.log('Clear button pushed')
}

var processInputOperator = function() {

}

var processInputEquals = function() {

}

var processInput = function () {
	// console.log(digitButtonPush[i]);
	console.log(this.value);
}

clearButton.addEventListener('click', clearDisplay);
plusminusButton.addEventListener('click', processInput);
percentButton.addEventListener('click', processInput);

var digitButtonPush = document.getElementsByClassName('digit');
for (var i = 0; i < digitButtonPush.length; i++) {
	digitButtonPush[i].addEventListener('click', processInput);
}

var operatorButtonPush = document.getElementsByClassName('operators')
for (var i = 0; i < operatorButtonPush.length; i++) {
	operatorButtonPush[i].addEventListener('click', processInputOperator);
}

equalsButton.addEventListener('click', processInputEquals);