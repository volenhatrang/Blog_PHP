const navItems = document.querySelector('.nav_items');
const openBtn = document.querySelector('a.open_nav_btn i');
const closeBtn = document.querySelector('a.close_nav_btn i');

const openNav = () => {
    navItems.style.display = 'flex';
    openBtn.style.display = 'none';
    closeBtn.style.display = 'inline-block';

}

const closeNav = () => {
    navItems.style.display = 'none';
    openBtn.style.display = 'inline-block';
    closeBtn.style.display = 'none';

}

openBtn.addEventListener('click', openNav);
closeBtn.addEventListener('click', closeNav)