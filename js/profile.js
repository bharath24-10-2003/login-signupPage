$(document).ready(function profile() {
        var dob = $('#dob').val();
        var phone = $('#phone').val();
        var gender = $('#gender').val();
        var age = $('#age').val();

        $.ajax({
            url: 'php/profile.php',
            method: 'POST',
            data: {
                dob:dob,
                phone:phone,
                gender:gender,
                age:age
            },
            success: function(response) {
                $('#updateMessage').html(response);
            },
            error: function(xhr, status, error) {
            console.error('Error:', error);
            }
        });
    
});
