// Fonction pour basculer le mode sombre
const darkModeButton = document.getElementById('darkModeButton');
const body = document.body;

// Vérifier si le mode sombre est activé dans le localStorage
if (localStorage.getItem('darkMode') === 'enabled') {
    body.classList.add('dark-theme');
}

// Ajouter un événement pour basculer entre les modes
darkModeButton.addEventListener('click', () => {
    if (body.classList.contains('dark-theme')) {
        body.classList.remove('dark-theme');
        localStorage.setItem('darkMode', 'disabled');
    } else {
        body.classList.add('dark-theme');
        localStorage.setItem('darkMode', 'enabled');
    }
});

// Animation de l'apparition des éléments (fade in)
const elements = document.querySelectorAll('.project-card, .about, .skills, .logos, .contact');
window.addEventListener('scroll', () => {
    elements.forEach(element => {
        const rect = element.getBoundingClientRect();
        if (rect.top >= 0 && rect.top <= window.innerHeight) {
            element.classList.add('visible');
        }
    });
});

// Ajouter des classes CSS pour animer les éléments
document.querySelectorAll('.project-card').forEach(card => {
    card.classList.add('invisible');
});

document.querySelectorAll('.about, .skills, .logos, .contact').forEach(section => {
    section.classList.add('invisible');
});

// Ajouter une animation lors de l'apparition
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.invisible').forEach(element => {
        element.classList.add('fade-in');
    });
});

// Fonction pour détecter l'apparition des compétences au scroll
const skills = document.querySelectorAll('.skill-bar');
const skillNames = document.querySelectorAll('.skill-info h3');

window.addEventListener('scroll', () => {
    skills.forEach((skill, index) => {
        const rect = skill.getBoundingClientRect();
        if (rect.top <= window.innerHeight && rect.bottom >= 0) {
            skill.style.width = skill.getAttribute('data-skill');
            skillNames[index].classList.add('visible');
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    });

    document.querySelectorAll('.project-card, .contact-container').forEach((el) => {
        observer.observe(el);
    });
});