
const mainMenu = document.querySelector('.mainMenu');
const closeMenu = document.querySelector('.closeMenu');
const openMenu = document.querySelector('.openMenu');




openMenu.addEventListener('click',show);
closeMenu.addEventListener('click',close);

function show(){
    mainMenu.style.display = 'flex';
    mainMenu.style.top = '0';
}
function close(){
    mainMenu.style.top = '-100%';
}

// Smooth scrolling for internal links
const links = document.querySelectorAll('.nav__link');

links.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent default anchor click behavior

        const targetId = this.getAttribute('href'); // Get the href attribute
        const targetSection = document.querySelector(targetId); // Select the target section

        if (targetSection) {
            targetSection.scrollIntoView({
                behavior: 'smooth', // Enable smooth scroll
                block: 'start' // Align to the start of the section
            });
        }
    });
});

