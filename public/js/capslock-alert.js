document.addEventListener('DOMContentLoaded', () => {
    const capsFlag = document.getElementById("capslockAlert");
    const passwordInput = document.querySelector("#passwordInput input");
    console.log(passwordInput);
    

    passwordInput.addEventListener('click', () => {
        document.addEventListener('keyup', (event) => {
            const isCapsLockOn = event.getModifierState && event.getModifierState('CapsLock');
            capsFlag.classList.toggle("tooltip", isCapsLockOn);
            capsFlag.classList.toggle("tooltip-open", isCapsLockOn);
            capsFlag.classList.toggle("tooltip-right", isCapsLockOn);
        });
    });
});