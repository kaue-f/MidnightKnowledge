document.addEventListener('DOMContentLoaded', () => {
    const capsFlag = document.getElementById("capslockAlert");
    const passwordInput = document.getElementById("passwordInput");

    passwordInput.addEventListener('focus', () => {
        document.addEventListener('keyup', (event) => {
            const isCapsLockOn = event.getModifierState && event.getModifierState('CapsLock');
            capsFlag.classList.toggle("tooltip", isCapsLockOn);
            capsFlag.classList.toggle("tooltip-open", isCapsLockOn);
            capsFlag.classList.toggle("tooltip-right", isCapsLockOn);
        });
    });
});