
//authorization and validation functions 

$('#button').click(function(e) {
    e.preventDefault();

    $(`input`).removeAttr('id', 'error');

    let name = $('input[name="name"]').val(),
        password = $('input[name="password"]').val();

    $.ajax({
        url: 'signin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            name: name,
            password: password
        },
        success (data) {

            if (data.status) {
                document.location.href = 'index.php';
            }else {

                if (data.type === 1) {
                   data.fields.forEach(function(field) {
                    $(`input[name="${field}"]`).attr('id', 'error');

                   });

                }
    
                $('#msg').removeClass('none').text(data.message);
            }
            
        }

    });


})

// registration and validation functions

$('#button2').click(function(e) {
    e.preventDefault();

    $(`input`).removeAttr('id', 'error');

    let name = $('input[name="name"]').val(),
        password = $('input[name="password"]').val(),
        email = $('input[name="email"]').val(),
        password_confirm = $('input[name="password_confirm"]').val();

    $.ajax({
        url: 'signup.php',
        type: 'POST',
        dataType: 'json',
        data: {
            name: name,
            password: password,
            email: email,
            password_confirm: password_confirm
        },
        success (data) {

            if (data.status) {
                document.location.href = 'login.php';
            }else {

                if (data.type === 1) {
                   data.fields.forEach(function(field) {
                    $(`input[name="${field}"]`).attr('id', 'error');

                   });

                }
    
                $('#msg').removeClass('none').text(data.message);
            }
            
        }

    });


})