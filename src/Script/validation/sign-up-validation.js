/* eslint-disable no-undef */

const signUpForm = document.getElementById('sign-up-form');

if (signUpForm) {
    const validator = new JustValidate(signUpForm);

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
            signUpForm.submit();
        });
}
