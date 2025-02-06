
//Testimonial slider
// $('.testimonialSlider').slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     autoplay: true,
//     infinite: true,
//     draggable: true,
//     swipeToSlide: true,
//     dots: true,
//     arrows:false,
//     pauseOnHover: true,
//     centerMode: false,
// });
//Testimonial slider


//Related Projects slider
$('.testimonialSlider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    focusOnSelect: true,
    autoplay: true,
    infinite: true,
    draggable: true,
    swipeToSlide: true,
    dots: false,
    arrows:false,
    // appendArrows: $('.relatedProjectsSlider-nav'),
    pauseOnHover: true,
    // centerMode: true,
    autoplaySpeed: 3000,
    // leftPadding: '200px',
    responsive: [
        {
            breakpoint: 1299.98,
            settings: {slidesToShow: 1,}
        },
        {
            breakpoint: 575.98,
            settings: {slidesToShow: 1,}
        },
    ]
});

$('.testimonialSlider02').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    focusOnSelect: true,
    autoplay: true,
    infinite: true,
    draggable: true,
    swipeToSlide: true,
    dots: false,
    arrows:false,
    // appendArrows: $('.relatedProjectsSlider-nav'),
    pauseOnHover: true,
    // centerMode: true,
    autoplaySpeed: 3500,
    // leftPadding: '200px',
    responsive: [
        {
            breakpoint: 1299.98,
            settings: {slidesToShow: 1,}
        },
        {
            breakpoint: 575.98,
            settings: {slidesToShow: 1,}
        },
    ]
});
//Related Projects slider



//sticky header
$(window).scroll(function () {
    if ($(this).scrollTop() > 2) {
        $('header').addClass('sticky')
    } else {
        $('header').removeClass('sticky')
    }
});
//sticky header



