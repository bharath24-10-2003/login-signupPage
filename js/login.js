$(document).ready(function login() {
        var username = $('#username').val();
        var password = $('#password').val();
        $.ajax({
            url: 'php/login.php',
            method: 'POST',
            data: {
                username: username,
                password: password
            },
            success: function(response) {
                window.location.href = 'profile.html';
            },
            error: function(error) {
                console.error('Error:', error);
            }
        });
});
