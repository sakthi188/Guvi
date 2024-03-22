$(document).ready(function() {
    $('#profileFormSubmit').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '../php/profile1.php',
            data: formData,
            success: function(response) {
                alert(response);
            }
        });
    });
});
