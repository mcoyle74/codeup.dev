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

var saveName = function() {
	var nameEntry = document.getElementById('name');
	if (nameEntry == null || nameEntry == '') {
		alert('You must enter a name to continue');
		return false;
	} else {
		addGradeButton.removeAttribute('disabled');
		calculateAverageButton.removeAttribute('disabled');
	}
	document.getElementById('student-name').innerText = nameEntry.value;
	student.name = nameEntry;
}
saveButton.addEventListener('click', saveName, false);

var saveSubjectAndGrades = function() {
	var subjectInput = document.getElementById('subject');
	var gradeInput = document.getElementById('grade');
	student.addSubject(subjectInput.value, parseInt(gradeInput.value));
	var addTableRow = document.getElementById('grades');
	addTableRow.innerHTML = '<tr><td>' + subjectInput.value + '</td><td>' + gradeInput.value + '</td></tr>' + addTableRow.innerHTML;
	subjectInput.value = '';
	gradeInput.value = '';
}
addGradeButton.addEventListener('click', saveSubjectAndGrades, false);

var calculateAverageButton = document.getElementById('calculate-average');
var addAverageToTable = function() {
	var studentAverage = student.calculateAverage();
	document.getElementById('student-average').innerText = studentAverage;
	if (student.isAwesome()) {
		document.getElementById('student-awesome').removeAttribute('class');
	} else {
		document.getElementById('student-practice').removeAttribute('class');
	}
}
calculateAverageButton.addEventListener('click', addAverageToTable, false);
