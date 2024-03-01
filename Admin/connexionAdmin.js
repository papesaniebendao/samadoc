const loginForm = document.getElementById('login-form');

loginForm.addEventListener('submit', function (e) {
    e.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === 'samadoc' && password === '0000') {
        // Si le nom d'utilisateur et le mot de passe sont corrects, redirigez vers la page d'administration
        window.location.href = 'page-administration.html';
    } else {
        alert('Nom d\'utilisateur ou mot de passe incorrect');
    }
});