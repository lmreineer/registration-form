/* eslint-disable no-undef */

function checkUsername() {
    jQuery.ajax({
        url: '../php/database/email-availability-checker.php',
        data: `email=${$('.email').val()}`,
        type: 'POST',
        success(data) {
            $('.just-validate-error-label').html(data);
        },
        error() { },
    });
}

$('.email').on('input', () => {
    checkUsername();
});
