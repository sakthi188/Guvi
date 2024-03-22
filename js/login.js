$(document).ready(function() {
    $('#login_form').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '../php/login1.php',
            data: formData,
            success: function(response) {
                $('#message').html(response);
            }
        });
    });
});