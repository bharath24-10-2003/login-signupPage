$(document).ready(function signup() {
    var username = $('#username').val();
    var email = $('#email').val();
    var password = $('#password').val();
    console.log(username);
    $.ajax({
        url: 'php/register.php',
        type: 'POST',
        dataType: 'json',
        data: {
            username: username,
            email: email,
            password: password
        },
        success: function(response) {
            if (response.status === 'success') {
                window.location.href = 'login.html';
            }
        },
    });
})
