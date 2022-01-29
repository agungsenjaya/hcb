//MENU ONE PAGE
function ouTer(e)
{
  $('#navbarSupportedContent').collapse('hide');
  var es = e;
  $('html, body').animate({
    scrollTop: $(es).offset().top - $(".navbar").outerHeight() + "px"
  }, 1);
}
//SLIDER HOME
var slide1 = new Swiper(".slide-1", {
    // slidesPerView: 3,
    autoplay: true,
    loop: true,
    allowTouchMove: true,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
});

// AOS
AOS.init();

// GET CIRULCAINT SUP
let a = $('.supply').text();
$('.supply').text(a.replace('Balance','').replace('$HBEREUM','').replace(' ',''));
// Get Token Holders
let b = $('.holders').text();
$('.holders').text(b.replace('addresses',' Address').replace(' ',''));