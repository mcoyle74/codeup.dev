$(document).ready(function() {
		"use strict";

		var box = $('#animate-box')
		var mario = $('#mario')

		$('#btn-left').click(function() {
			box.animate({
				left: "-=50px"
			})
		});
		$('#btn-right').click(function() {
			box.animate({
				left: "+=50px"
			})
		});
		$('#btn-up').click(function() {
			box.animate({
				top: "-=50px"
			})
		});
		$('#btn-down').click(function() {
			box.animate({
				top: "+=50px"
			})
		});

		$('#btn-scale-up').click(function() {
			box.animate({
				height: "+=20px",
				width: "+=20px"
			})
			mario.animate({
				height: "+=20px",
				width: "+=20px"
			})
		});
		$('#btn-scale-down').click(function() {
			box.animate({
				height: "-=20px",
				width: "-=20px"
			})
			mario.animate({
				height: "-=20px",
				width: "-=20px"
			})
		});

		$('#btn-hide').click(function() {
			box.animate({
				opacity: "0"
			})
		});

		$('#btn-show').click(function() {
			box.animate({
				opacity: "1"
			})
		});
		$('#btn-morph').click(function() {
			box.animate({
				borderRadius: "50%"
			}, 500)
		});

		$('#btn-all').click(function() {
			box.animate({
				left: "500px",
				top: "100px",
				height: "300px",
				width: "500px"
			}, 2000).animate({
				opacity: "0"
			}, 2000).animate({
				left: "0",
				top: "0",
				height: "500px",
				width: "300px",
				opacity: "1"
			}, 1500)
		});

		$('#btn-mario').click(function() {
			box.css('background-color', 'transparent');
			mario.css('visibility', 'visible');
		});

		$('#btn-reset').click(function() {
			box.animate({
				left: "0",
				top: "0",
				height: "100px",
				width: "100px",
				opacity: "1",
				borderRadius: "0"
			}, 500)
			box.css('background-color', '#808080');
			mario.css({
				'visibility': 'hidden',
				'height': '90px',
				'width': '90px'
			})
		});

		var keyID = [37, 38, 39, 40];
		$(document).keydown(function(event) {
			console.log(event.keyCode);
			if (event.keyCode == keyID[0]) {
				box.animate({
					left: "-=50px"
				}, 50)
			} else if (event.keyCode == keyID[1]) {
				box.animate({
					top: "-=50px"
				}, 50)
			} else if (event.keyCode == keyID[2]) {
				box.animate({
					left: "+=50px"
				}, 50)
			} else if (event.keyCode == keyID[3]) {
				box.animate({
					top: "+=50px"
				}, 50)
			}
		});
	});