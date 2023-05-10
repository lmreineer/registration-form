/* eslint-disable no-undef */

const validator = new JustValidate('#log-in-form');

validator
    .addField('#log-in-email', [
        {
            rule: 'required',
            errorMessage: 'Email is required',
        },
        {
            rule: 'email',
        },
    ])

    .addField('#log-in-password', [
        {
            rule: 'required',
            errorMessage: 'Password is required',
        },
    ])

    .onSuccess(() => {
        document.getElementById('log-in-form').submit();
    });
