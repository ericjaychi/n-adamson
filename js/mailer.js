$(function() {

	var form = $('#ajaxContact');

	var formMessages = $('#formMessages');

	$(form).submit(function(e) {
		e.preventDefault();

		var formData = $(form).serialize();

		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');

			$(formMessages).text(response);

			$('#name').val('');
			$('#email').val('');
			$('#message').val('');
		})
		.fail(function(data) {
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');

			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});

	});

});


function validateForm() {
	var name = document.forms["contactForm"]["name"].value;
	var email = document.forms["contactForm"]["email"].value;
	var message = document.forms["contactForm"]["message"].value;

	if (name == "") {
		alert("Please fill out the name.");
		return false;
	} else if (email == "") {
		alert("Please fill out the email.");
		return false;
	} else if (message == "") {
		alert("Please fill out the message section.");
		return false;
	}
}
