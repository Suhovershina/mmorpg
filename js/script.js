$('.test-card').each(function(){
    /* Основной слайдер */
    $(this).find('.test-main-slider__list').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 3000,
      asNavFor: $(this).find('.test-second-slider__list'),
      dots: true
    });

    /* Связанный слайдер */
    $(this).find('.test-second-slider__list').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      asNavFor: $(this).find('.test-main-slider__list'),
      dots: true
    });
  });