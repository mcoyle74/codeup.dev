"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.

// TODO: Show an alert message that welcomes the user based on their input.

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.

do {
	var userName = prompt('What is your name?');
} while (userName == '');

alert('Welcome, ' + userName + '!')

var likesPizza = confirm('Hey, ' + userName + ', do you like pizza?');
if (likesPizza) {
	alert('Of course, pizza is the preferred food of geniuses like us.');
} else {
	alert('Whaaaat!? Who does\'t like pizza? I\'m afraid you will have to be destroyed.');
}