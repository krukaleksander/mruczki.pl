let menuFlag = false;
let menuArr = document.querySelector('.fa-sort-down');
let menuCont = document.querySelector('div.menu-header-menu-container');
// const menus = [...document.querySelectorAll('div#menu-sign')];

// menus[0].style.display = 'none';

document.getElementById('menu-mobile-btn').addEventListener('click', () => {
    if (menuFlag === false) {
        menuCont.style.display = 'block';
        menuArr.classList.add('active');
        menuFlag = true;
    } else if (menuFlag === true) {
        menuCont.style.display = 'none';
        menuArr.classList.remove('active');
        menuFlag = false;
    }
})