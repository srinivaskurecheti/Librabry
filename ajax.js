$(document).ready(function() {
    $('#registration-form').submit(function(event) {
        event.preventDefault();
        var name = $('#fullname').val();
        var email = $('#email').val();
        var password = $('#password').val();
        $.ajax({
            url: 'regis.php',
            type: 'POST',
            data: {fullname: name, email: email, password: password},
            success: function(data) {
                $('#message').html("<div class='alert alert-success'>Registration successful!</div>");
                 setTimeout(function() {
                 $('.alert-success').fadeOut('fast');
               }, 3000);
	       
              $('#registration-form')[0].reset();

            }
        
        });
    });
});

