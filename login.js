// Sélection des éléments
const loginForm = document.getElementById('login-form');
const loginContainer = document.getElementById('login-container');
const profileContainer = document.getElementById('profile-container');
const displayUsername = document.getElementById('display-username');
const editUsername = document.getElementById('edit-username');
const saveUsername = document.getElementById('save-username');
const logoutButton = document.getElementById('logout');

// Simuler un utilisateur existant
const correctPassword = "1234"; // Mot de passe simulé
const defaultUsername = "User";

// Gestion de la connexion
loginForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const password = document.getElementById('password').value;

    if (password === correctPassword) {
        // Connexion réussie
        displayUsername.textContent = defaultUsername;
        editUsername.value = defaultUsername;
        loginContainer.classList.add('hidden');
        profileContainer.classList.remove('hidden');
    } else {
        alert("Incorrect Password. Try Again.");
    }
});

// Modification du pseudo
saveUsername.addEventListener('click', () => {
    const newUsername = editUsername.value.trim();
    if (newUsername) {
        displayUsername.textContent = newUsername;
        alert("Username updated!");
    } else {
        alert("Please enter a valid username.");
    }
});

// Déconnexion
logoutButton.addEventListener('click', () => {
    profileContainer.classList.add('hidden');
    loginContainer.classList.remove('hidden');
    loginForm.reset();
});
