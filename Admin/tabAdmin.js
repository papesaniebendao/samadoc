// tabAdmin.js
const darkModeBtn = document.querySelector('.dark-mode-btn');
const adminPage = document.querySelector('.admin-page');

darkModeBtn.addEventListener('click', () => {
    adminPage.classList.toggle('dark-mode');
});
