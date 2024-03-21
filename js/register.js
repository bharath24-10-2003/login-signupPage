$(document).ready(function() {
    $('#signupButton').click(function() {
        var username = $('#username').val();
        var password = $('#password').val();

        $.ajax({
            url: 'signup.php',
            type: 'POST',
            data: {
                username: username,
                password: password
            },
            success: function(response) {
                console.log(response); // Log response from the server
                // You can handle the response here (e.g., display a success message)
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText); // Log error message if AJAX request fails
                // You can handle the error here (e.g., display an error message)
            }
        });
    });
});