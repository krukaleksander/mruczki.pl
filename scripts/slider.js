let imgNr = 1;
const img = document.getElementById('about-img');
const imgArr = ['https://mruczki.pl/wp-content/themes/motywMruczki/img/slider/1.jpg', 'https://mruczki.pl/wp-content/themes/motywMruczki/img/slider/2.jpg', 'https://mruczki.pl/wp-content/themes/motywMruczki/img/slider/3.jpg', 'https://mruczki.pl/wp-content/themes/motywMruczki/img/slider/4.jpg', 'https://mruczki.pl/wp-content/themes/motywMruczki/img/slider/5.jpg'];

const sliderFn = () => {
    if (imgNr < imgArr.length) {
        img.src = imgArr[imgNr];
        imgNr++;
    } else {
        imgNr = 0;
        img.src = imgArr[imgNr];

    }

}
window.setInterval(sliderFn, 3000);