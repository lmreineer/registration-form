/* eslint-disable no-undef */

const validator = new JustValidate('#account-recovery-form');

validator
    .addField('#account-recovery-email', [
        {
            rule: 'required',
            errorMessage: 'Email is required',
        },
        {
            rule: 'email',
        },
    ])

    .onSuccess(() => {
        document.getElementById('account-recovery-form').submit();
    });
