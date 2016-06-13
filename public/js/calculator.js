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

var	completed = false;

var processInputsLeft = function () {
	if (display.operator == '') { 
		display.operandLeft += this.value;
		display.output();
	} else {
		display.operandRight += this.value;
		display.output();
	}
}

var processInputsCenter = function() {
	if (this.value == '-1') {
		display.operandLeft.value *= -1

	} else if (this.value == '%') {
		display.operandLeft *= 0.01
	} else {
		display.operator = this.value;
		display.output();
	}
}

var display = {
	inputLeft: document.getElementById('input-1'),
	inputCenter: document.getElementById('input-2'),
	inputRight: document.getElementById('input-3'),
	operandLeft: '',
	operandRight: '',
	operator: '',
	output:	function() {
		this.inputLeft.value = this.operandLeft;
		this.inputCenter.value = this.operator;
		this.inputRight.value = this.operandRight;
	},
	clear: function() {
		display.inputLeft.value = '';
		display.inputCenter.value = '';
		display.inputRight.value = '';
		display.operandLeft = '';
		display.operandRight = '';
		display.operator = '';
	},
	answer: function () {
		var calculation;
		if ((display.operator == '/') && (display.operandRight != 0)) {
			calculation = parseFloat(display.operandLeft) / parseFloat(display.operandRight);
			display.operandLeft = calculation;
			display.output();
		} else if (display.operator == '*') {
			calculation = parseFloat(display.operandLeft) * parseFloat(display.operandRight);
			display.operandLeft = calculation;
			display.output();
		} else if (display.operator == '+') {
			calculation = parseFloat(display.operandLeft) + parseFloat(display.operandRight);
			display.operandLeft = calculation;
			display.output();
		} else if (display.operator == '-') {
			calculation = parseFloat(display.operandLeft) - parseFloat(display.operandRight);
			display.operandLeft = calculation;
			display.output();
		} else {
			display.inputLeft.value = "Error";
		}
	}
};

clearButton.addEventListener('click', display.clear, false);
plusminusButton.addEventListener('click', display.processInputsLeft, false);
percentButton.addEventListener('click', display.processInputsLeft, false);

var digitButtonPush = document.getElementsByClassName('digit', false);
for (var i = 0; i < digitButtonPush.length; i++) {
	digitButtonPush[i].addEventListener('click', processInputsLeft, false);
}

var operatorButtonPush = document.getElementsByClassName('operators')
for (var i = 0; i < operatorButtonPush.length; i++) {
	operatorButtonPush[i].addEventListener('click', processInputsCenter, false);
}

equalsButton.addEventListener('click', display.answer, false);