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

var saveButton = $('#save-name');
var addGradeButton = $('#add-grade');

var saveName = function() {
	var nameEntry = $('#name');
	if (nameEntry == null || nameEntry == '') {
		alert('You must enter a name to continue');
		return false;
	} else {
		addGradeButton.removeAttr('disabled');
		calculateAverageButton.removeAttr('disabled');
	}
	$('#student-name').text(nameEntry.val());
	student.name = nameEntry;
}
saveButton.on('click', saveName);

var saveSubjectAndGrades = function() {
	var subjectInput = $('#subject');
	var gradeInput = $('#grade');
	student.addSubject(subjectInput.val(), parseInt(gradeInput.val()));
	var addTableRow = $('#grades');
	addTableRow.html('<tr><td>' + subjectInput.val() + '</td><td>' + gradeInput.val() + '</td></tr>' + addTableRow.html());
	subjectInput.val('');
	gradeInput.val('');
	subjectInput.focus();
}
addGradeButton.click(saveSubjectAndGrades);

var calculateAverageButton = $('#calculate-average');
var addAverageToTable = function() {
	var studentAverage = student.calculateAverage();
	$('#student-average').innerText = studentAverage;
	if (student.isAwesome()) {
		$('#student-awesome').removeAttr('class');
	} else {
		$('#student-practice').removeAttr('class');
	}
}
calculateAverageButton.click(addAverageToTable);
