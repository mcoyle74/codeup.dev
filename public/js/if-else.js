"use strict";

var grade1 = 70;
var grade2 = 80;
var grade3 = 95;

if ((grade1 + grade2 + grade3) / 3 > 80) {
	console.log("You\'re awesome")
} else {
	console.log("You need to practice more")
}

var cameron = 180;
var ryan = 250;
var george = 320;
var discountThreshold = 200;

if (cameron > discountThreshold) {
	console.log("Cameron pays $" + cameron + "before the discount and $" + (cameron * .65) + "after the discount");
} else {
	console.log("Cameron pays $" + cameron + ", no discount");
}

if (ryan > discountThreshold) {
	console.log("Ryan pays $" + ryan + " before the discount and $" + (ryan * .65) + " after the discount");
} else {
	console.log("Rameron pays $" + ryan + ", no discount");
}

if (george > discountThreshold) {
	console.log("George pays $" + george + " before the discount and $" + (george * .65) + " after the discount");
} else {
	console.log("George pays $" + george + ", no discount");
}

var flipACoin = Math.floor(Math.random()* 2);

if (flipACoin == 0) {
	console.log("Buy a car");
} else {
	console.log("Buy a house");
}