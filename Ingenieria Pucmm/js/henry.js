$(document).ready(function(){
    //BEGIN MODAL
   $('.navbar-btn-search').click(function(){
      $('.search-wrapper').removeClass('d-none');
   });
   $('.btn-close').click(function(){
      $('.search-wrapper').addClass('d-none');
   });

   //BEGIN SLICK
    $('.profile-item-wrapper').slick({
        dots: true,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});