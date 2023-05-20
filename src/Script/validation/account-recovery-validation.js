/* eslint-disable no-undef */

const accountRecoveryForm = document.getElementById('account-recovery-form');
const accountRecoveryEmail = document.getElementById('account-recovery-email');
const accountRecoveryPassword = document.getElementById('account-recovery-password');

if (accountRecoveryForm) {
    const validator = new JustValidate(accountRecoveryForm);

    if (accountRecoveryEmail) {
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
                accountRecoveryForm.submit();
            });
    } else if (accountRecoveryPassword) {
        validator
            .addField('#account-recovery-password', [
                {
                    rule: 'required',
                    errorMessage: 'Password is required',
                },
                {
                    rule: 'password',
                },
            ])

            .addField('#account-recovery-repeat-password', [
                {
                    validator: (value, fields) => value === fields['#account-recovery-password'].elem.value,
                    errorMessage: 'Passwords should match',
                },
            ])

            .onSuccess(() => {
                accountRecoveryForm.submit();
            });
    }
}
