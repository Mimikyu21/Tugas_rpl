document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('container');
    const registerBtn = document.getElementById('register');
    const loginBtn = document.getElementById('login');

    registerBtn.addEventListener('click', () => {
        container.classList.add("active");
        document.body.classList.add("register-active");
    });

    loginBtn.addEventListener('click', () => {
        container.classList.remove("active");
        document.body.classList.remove("register-active");
    });
});
