/* ===========================
   MENU DE PERFIL
=========================== */

const profileButton = document.querySelector('.profile-button');
const profileMenu = document.querySelector('.profile-menu');

if (profileButton && profileMenu) {
    profileButton.addEventListener('click', (e) => {
        e.stopPropagation();
        profileMenu.classList.toggle('active');
    });

    // fecha ao clicar fora
    document.addEventListener('click', () => {
        profileMenu.classList.remove('active');
    });
}

/* ===========================
   CARROSSEIS DE CARDS
=========================== */

document.querySelectorAll('.carousel-wrapper').forEach(wrapper => {
    const carousel = wrapper.querySelector('.cards-midias ul');
    const nextBtn = wrapper.querySelector('.carousel-btn.next');
    const prevBtn = wrapper.querySelector('.carousel-btn.prev');

    const cardWidth = 196; // largura do card + gap

    nextBtn.addEventListener('click', () => {
        carousel.scrollLeft += cardWidth * 2;
    });

    prevBtn.addEventListener('click', () => {
        carousel.scrollLeft -= cardWidth * 2;
    });
});
