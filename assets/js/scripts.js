// script.js - General JavaScript for the website

// Back to Top Button
const backToTopButton = document.getElementById('backToTop');
window.addEventListener('scroll', () => {
  if (window.pageYOffset > 300) {
    backToTopButton.classList.add('visible');
  } else {
    backToTopButton.classList.remove('visible');
  }
});

// Navbar scroll effect
const navbar = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
  if (window.pageYOffset > 50) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

    // Fade-in effect on scroll
    const faders = document.querySelectorAll(".fade-in");
    const appearOptions = { threshold: 0.1, rootMargin: "0px 0px -100px 0px" };

    const appearOnScroll = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add("appear");
            observer.unobserve(entry.target);
        });
    }, appearOptions);

    faders.forEach(fader => appearOnScroll.observe(fader));


/*Hospitality Page*/
        function filterRestaurants() {
            let input = document.getElementById("search").value.toLowerCase();
            let restaurantCards = document.getElementsByClassName("restaurant-card");
            
            for (let i = 0; i < restaurantCards.length; i++) {
                let restaurantName = restaurantCards[i].getElementsByTagName("h2")[0].innerText.toLowerCase();
                if (restaurantName.includes(input)) {
                    restaurantCards[i].style.display = "block";
                } else {
                    restaurantCards[i].style.display = "none";
                }
            }
        }

/*Museums Page*/
document.addEventListener("DOMContentLoaded", function () {
    // Fade-in effect on scroll
    let elements = document.querySelectorAll(".fade-in");
    let options = { threshold: 0.2 };

    let observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = "translateY(0)";
                observer.unobserve(entry.target);
            }
        });
    }, options);

    elements.forEach(element => observer.observe(element));

    // Museum Search Functionality
    document.getElementById("searchMuseum").addEventListener("keyup", function () {
        let filter = this.value.toLowerCase();
        let cards = document.querySelectorAll(".museum-card");
        cards.forEach(card => {
            let name = card.querySelector(".card-title").innerText.toLowerCase();
            card.style.display = name.includes(filter) ? "block" : "none";
        });
    });
});


/*Header section*/
document.addEventListener('DOMContentLoaded', function() {
    const languageSelect = document.getElementById('language-select');
    if (languageSelect) {
        languageSelect.addEventListener('change', function() {
            changeLanguage(this.value);
        });
    }
});

async function changeLanguage(lang) {
    try {
        const response = await fetch(`/tourism_website/assets/translations/${lang}.json`);
        const translations = await response.json();
        
        // Select all elements with data-translate attribute
        const elements = document.querySelectorAll('[data-translate]');
        
        elements.forEach(element => {
            const key = element.getAttribute('data-translate');
            if (translations[key]) {
                // Handle different element types
                if (element.tagName === 'INPUT' && element.getAttribute('type') === 'submit') {
                    element.value = translations[key];
                } else if (element.tagName === 'INPUT' || element.tagName === 'TEXTAREA') {
                    element.placeholder = translations[key];
                } else {
                    element.textContent = translations[key];
                }
            }
        });

        // Update the page direction for RTL languages
        const htmlRoot = document.getElementById('htmlRoot');
        if (lang === 'ar' || lang === 'he') {
            htmlRoot.dir = 'rtl';
        } else {
            htmlRoot.dir = 'ltr';
        }

        // Store the selected language in localStorage
        localStorage.setItem('selectedLanguage', lang);
        
        // Update font family based on language
        updateFontFamily(lang);
    } catch (error) {
        console.error('Error loading translations:', error);
    }
}

function updateFontFamily(lang) {
    const body = document.body;
    switch(lang) {
        case 'zh':
            body.style.fontFamily = "'Noto Sans SC', sans-serif";
            break;
        case 'ja':
            body.style.fontFamily = "'Noto Sans JP', sans-serif";
            break;
        case 'ko':
            body.style.fontFamily = "'Noto Sans KR', sans-serif";
            break;
        case 'ar':
            body.style.fontFamily = "'Noto Naskh Arabic', serif";
            break;
        case 'hi':
            body.style.fontFamily = "'Noto Sans Devanagari', sans-serif";
            break;
        default:
            body.style.fontFamily = "'Poppins', sans-serif";
    }
}

// Load saved language preference on page load
document.addEventListener('DOMContentLoaded', function() {
    const savedLanguage = localStorage.getItem('selectedLanguage');
    if (savedLanguage) {
        const languageSelect = document.getElementById('language-select');
        if (languageSelect) {
            languageSelect.value = savedLanguage;
            changeLanguage(savedLanguage);
        }
    }
});