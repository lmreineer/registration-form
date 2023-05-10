/* eslint-disable no-undef */

const validator = new JustValidate('#sign-up-form');

validator
    .addField('#sign-up-name', [
        {
            rule: 'required',
            errorMessage: 'Name is required',
        },
    ])

    .addField('#sign-up-email', [
        {
            rule: 'required',
            errorMessage: 'Email is required',
        },
        {
            rule: 'email',
        },
    ])

    .addField('#sign-up-password', [
        {
            rule: 'required',
            errorMessage: 'Password is required',
        },
        {
            rule: 'password',
        },
    ])

    .addField('#sign-up-repeat-password', [
        {
            validator: (value, fields) => value === fields['#sign-up-password'].elem.value,
            errorMessage: 'Passwords should match',
        },
    ])

    .onSuccess(() => {
        document.getElementById('sign-up-form').submit();
    });
