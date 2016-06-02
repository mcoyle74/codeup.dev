"use scrict";

var luckyNumber = Math.floor(Math.random()* 6);
var receipt = 60;
var discount1 = .1;
var discount2 = .25;
var discount3 = .35;
var discount4 = .5;
var discount5 = 0;

switch (luckyNumber) {
	case 0:
		console.log("You pay $" + receipt);
		break;
	case 1:
		console.log("You pay $" + (receipt - (receipt * discount1)));
		break;
	case 2:
		console.log("You pay $" + (receipt - (receipt * discount2)));
		break;
	case 3:
		console.log("You pay $" + (receipt - (receipt * discount3)));
		break;
	case 4:
		console.log("You pay $" + (receipt - (receipt * discount4)));
		break;
	case 5:
		console.log("You pay $" + (receipt - (receipt * discount5)));
		break;
}


var month = (Math.floor(Math.random()* 12)) + 1;

switch (month) {
	case 1:
		console.log("January")
		break;
	case 2:
		console.log("February")
		break;
	case 3:
		console.log("March")
		break;
	case 4:
		console.log("April")
		break;
	case 5:
		console.log("May")
		break;
	case 6:
		console.log("June")
		break;
	case 7:
		console.log("July")
		break;
	case 8:
		console.log("August")
		break;
	case 9:
		console.log("September")
		break;
	case 10:
		console.log("October")
		break;
	case 11:
		console.log("November")
		break;
	case 12:
		console.log("December")
		break;
	default:
		console.log("That is not a month")
}