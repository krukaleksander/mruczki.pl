let menuFlag = false;
let menuArr = document.querySelector('.fa-sort-down');
let menuCont = document.querySelector('div.menu-header-menu-container');
let faceFlag = false;
const facebookTrigger = document.getElementById('faceTrigger');
const facebookTriggerCancel = document.getElementById('faceTriggerCancel');
const triggersArr = [facebookTrigger, facebookTriggerCancel];
const facebookWindow = document.getElementById('faceWid');
const facebookTriggerLogo = document.querySelector('#faceTrigger img');
document.getElementById('menu-mobile-btn').addEventListener('click', () => {
    if (menuFlag === false) {
        menuCont.style.left = '0px';
        menuArr.classList.add('active');
        menuFlag = true;
    } else if (menuFlag === true) {
        menuCont.style.left = '-300px';
        menuArr.classList.remove('active');
        menuFlag = false;
    }
});
triggersArr.forEach(e => {
    e.addEventListener('click', () => {
        if (!faceFlag) {
            facebookWindow.style.right = '0px';
            faceFlag = true;
            facebookTrigger.style.display = 'none';
            facebookTriggerCancel.style.display = 'block';
        } else {
            facebookWindow.style.right = '-315px';
            faceFlag = false;
            facebookTriggerCancel.style.display = 'none';
            facebookTrigger.style.display = 'block';
        }
    })
})