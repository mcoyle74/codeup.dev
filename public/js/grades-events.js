'use strict';

var student = {
	awesomeGrade: 80,
	name: null,
	subjects: [],
	calculateAverage: function () {
		var average = 0;
		this.subjects.forEach(function (subject) {
			average += subject.grade;
		});
		return average / this.subjects.length;
	},
	addSubject: function (name, grade) {
		var subject = {
			name: name,
			grade: grade
		};
		this.subjects.push(subject);
	},
	isAwesome: function () {
		return this.calculateAverage() > this.awesomeGrade;
	}
}

var saveName = document.getElementById('save-name');
var enableAddButtons = document.getElementsByClassName('btn');

var enableButtons = function() {
	var nameEntry = document.getElementById('name').value;
	if (nameEntry == null || nameEntry == '') {
		alert('You must enter a name to continue');
		return false;
	} else {
		for (var i = 0; i < enableAddButtons.length; i++) {
			enableAddButtons[i].disabled = false;
		}
		document.getElementById('student-name').innerHTML = nameEntry;
		student.name = nameEntry;
	}
}
saveName.addEventListener('click', enableButtons, false);


