/* eslint-disable no-undef */

function checkEmailAvailability() {
    jQuery.ajax({
        url: '../php/database/email-availability-checker.php',
        data: `email=${$('.email').val()}`,
        type: 'POST',
        success(data) {
            $('.input-message').html(data);
        },
        error() { },
    });
}

$('.email').on('input', () => {
    checkEmailAvailability();
});
