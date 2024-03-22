$(document).ready(function() {
    $('#input_form').submit(function(event) {
        event.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: '../php/register1.php',
            data: formData,
            success: function(response) {
                $('#message').html(response);
                alert(response);
                $('#input_form')[0].reset();
            }
        });
    });
});

