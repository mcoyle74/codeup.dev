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

var saveButton = document.getElementById('save-name');
var addGradeButton = document.getElementById('add-grade');
var calculateAverageButton = document.getElementById('calculate-average');

var saveName = function() {
	var nameEntry = document.getElementById('name').value;
	if (nameEntry == null || nameEntry == '') {
		alert('You must enter a name to continue');
		return false;
	} else {
		addGradeButton.removeAttribute('disabled');
		calculateAverageButton.removeAttribute('disabled');
	}
	document.getElementById('student-name').innerHTML = nameEntry;
	student.name = nameEntry;
}
saveButton.addEventListener('click', saveName, false);

var subjectInput = document.getElementById('subject').value;
var gradeInput = document.getElementById('grade').value;

var saveSubjectAndGrades = function() {
	student.subject.push(subjectInput)
}
addGradeButton.addEventListener('click', saveSubjectAndGrades, false)