
$( document ).ready(function() {
    $('input[name="name"]').blur(function () {
        var text = $(this).val();
        if(text == 0 ) {
            $('#error-name').html('Hãy nhập tên');
            $('#btn-request').prop('disabled' , true);
        }
        else
        {
            $('#error-name').html('');
            $('#btn-request').prop('disabled' , false);
        }
    });
    $('input[name="password"]').blur(function () {
        var text = $(this).val();
        if(text == 0 ) {
            $('#error-password').html('Hãy nhập passwrord');
            $('#btn-request').prop('disabled' , true);
        }
        else
        {
            $('#error-password').html('');
            $('#btn-request').prop('disabled' , false);
        }
    });
    $('input[name="email_personal"]').blur(function () {
        var text = $(this).val();
        if(text == 0 ) {
            $('#error-email_personal').html('Hãy nhập email_personal');
            $('#btn-request').prop('disabled' , true);
        }
        else
        {
            $('#error-email_personal').html('');
            $('#btn-request').prop('disabled' , false);
        }
    });
    $('input[name="date_of_birth"]').blur(function () {
        var text = $(this).val();
        if(text == 0 ) {
            $('#error-date').html('Hãy nhập ngày tháng năm sinh');
            $('#btn-request').prop('disabled' , true);
        }
        else
        {
            $('#error-date').html('');
            $('#btn-request').prop('disabled' , false);
        }
    });
    $('input[name="phone_number"]').blur(function () {
        var text = $(this).val();
        if(text == 0 ) {
            $('#error-phone').html('Hãy nhập số điện thoại của bạn');
            $('#btn-request').prop('disabled' , true);
        }
        else
        {
            $('#error-phone').html('');
            $('#btn-request').prop('disabled' , false);
        }
    });
    $('input[name="current_address"]').blur(function () {
        var text = $(this).val();
        if(text == 0 ) {
            $('#error-current').html('Hãy nhập trường bạn đã học');
            $('#btn-request').prop('disabled' , true);
        }
        else
        {
            $('#error-current').html('');
            $('#btn-request').prop('disabled' , false);
        }
    });
    $('input[name="leave_days"]').blur(function () {
        var text = $(this).val();
        if(text == 0 ) {
            $('#error-leave').html('Số ngày nghỉ còn lại');
            $('#btn-request').prop('disabled' , true);
        }
        else
        {
            $('#error-leave').html('');
            $('#btn-request').prop('disabled' , false);
        }
    });
    $('input[name="team_id"]').blur(function () {
        var text = $(this).val();
        if(text == 0 ) {
            $('#error-team').html('Bạn trong team nào');
            $('#btn-request').prop('disabled' , true);
        }
        else
        {
            $('#error-team').html('');
            $('#btn-request').prop('disabled' , false);
        }
    });
    $('input[name="language_skills"]').blur(function () {
        var text = $(this).val();
        if(text == 0 ) {
            $('#error-language').html('Trình độ ngoại ngữ');
            $('#btn-request').prop('disabled' , true);
        }
        else
        {
            $('#error-language').html('');
            $('#btn-request').prop('disabled' , false);
        }
    });
    $('input[name="hobby"]').blur(function () {
        var text = $(this).val();
        if(text == 0 ) {
            $('#error-hobby').html('Sở thích');
            $('#btn-request').prop('disabled' , true);
        }
        else
        {
            $('#error-hobby').html('');
            $('#btn-request').prop('disabled' , false);
        }
    });
    $('input[name="salary"]').blur(function () {
        var text = $(this).val();
        if(text == 0 ) {
            $('#error-salary').html('Sở thích');
            $('#btn-request').prop('disabled' , true);
        }
        else
        {
            $('#error-s').html('');
            $('#btn-request').prop('disabled' , false);
        }
    });


    $('input[name="status"]').click(function () {
        $('#error-status').hide();
    });
    $('input[name="gender"]').click(function () {
        $('#error-gender').hide();
    });

    $('input[name="email"]').blur(function () {

        var text = $(this).val();
        if(text == 0 ) {
            $('#error-email').html('Chưa nhập email');
            $('#btn-request').prop('disabled' , true);
        }


        else {
            var url = '../libs/ajax.php?text=';
            $.get(url + text, function (data) {
                if (data == 0) {
                    $('#error-email').html('');
                    $('#btn-request').prop('disabled', false);
                } else {
                    $('#error-email').html('Email đã tồn tại');
                    $('#btn-request').prop('disabled', true);
                }

            });
        }
    });
});

