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

var inputLeft = document.getElementById('input-1');
var inputCenter = document.getElementById('input-2');
var inputRight = document.getElementById('input-3');

var processInputs = function () {
	display.operandLeft += this.value;
	display.output();
}

var display = {
	operandLeft: '',
	operandRight: '',
	operator: '',
	output:	function() {
		document.getElementById('input-1').value = this.operandLeft;
	},
	clear: function () {
		document.getElementById('input-1').value = '0';
		document.getElementById('input-2').value = '';
		document.getElementById('input-3').value = '';
	},
	
	answer: function () {
		this.clear;
		var calculation;
		if (this.operator == '/') {
			calculation = parseFloat(this.operandLeft) / parseFloat(this.operandRight);
			
		} else if (this.operator == '*') {
			calculation = parseFloat(this.operandLeft) * parseFloat(this.operandRight);
			
		} else if (this.operator == '+') {
			calculation = parseFloat(this.operandLeft) + parseFloat(this.operandRight);
			
		} else if (this.operator == '-') {
			calculation = parseFloat(this.operandLeft) - parseFloat(this.operandRight);

		} else {
			return "Error";
		}
		return calculation;
	}
};


clearButton.addEventListener('click', display.clear, false);
plusminusButton.addEventListener('click', display.processInputs, false);
percentButton.addEventListener('click', display.processInputs, false);

var digitButtonPush = document.getElementsByClassName('digit', false);
for (var i = 0; i < digitButtonPush.length; i++) {
	digitButtonPush[i].addEventListener('click', processInputs, false);
}

var operatorButtonPush = document.getElementsByClassName('operators')
for (var i = 0; i < operatorButtonPush.length; i++) {
	operatorButtonPush[i].addEventListener('click', display.processInputs, false);
}

equalsButton.addEventListener('click', display.answer, false);