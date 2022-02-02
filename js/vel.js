const authorsEl = document.querySelectorAll('.author');
const container = document.querySelector('.testimonials-container');
const nameEl = document.querySelector('.name');
const textEl = document.querySelector('.text');

const testimonials = [{
    text: 'Véleményem szerint nem olyan nehéz a szakdolgozatot megalkotni, mint ahogy mondják,de függ a tanár és a diák hozzáállásától is. Szakdolgozat írása során sok új dolgot tanultam és tapasztaltam, ami segíthet egy jó állás keresésében vagy a kitűzött célok elérésében.',
    name: 'JENNIFER',
    color: 'rgba(179, 0, 0, 1)'
},{
    text: 'Tapasztalataim: Utolsó éven rengeteg új információ ér minden egyetemistat. Nemcsak az államvizsga miatt, hanem egyéb adminisztrációs dolgok miatt is. Mint például az aranyszessziő. Ezért az oldalt mindenkinek tudom ajánlani. Az itt leirt instrukciókat követve a harmadév és az államvizsga "gyerekjáték" volt.',
    name: 'ISTVÁN',
    color: 'rgba(23, 52, 92, 1)'
},{
    text: 'Szerintem jobb lenne ha az utolsó évet egy kicsit nyugisabbnak hagynák, hogy legyen több időnk a dolgozattal foglalkozni. Engedékenyebbek kellene legyenek a tanárok. Ja és még egy jó tanács: fogj neki időben a dolgozatnak!',
    name: 'GABRIELLA',
    color: 'rgba(179, 0, 0, 1)'
}];

addTestimonial(0);

authorsEl.forEach((author, idx) => {
    author.addEventListener('click', (e) => {
        addTestimonial(idx);
        author.classList.add('selected');
    })
});

function addTestimonial(idx) {
    const testimonial = testimonials[idx];
    
    nameEl.innerHTML = testimonial.name;
    textEl.innerHTML = testimonial.text;
    container.style.background = testimonial.color;
    container.style.boxShadow = `0 35px 10px -20px ${testimonial.color.substring(0, testimonial.color.length-4)}0.9)`;
    
    authorsEl.forEach(author => {
        author.classList.remove('selected');
    });
}

