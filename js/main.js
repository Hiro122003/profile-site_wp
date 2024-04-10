$(function () {
  // オーバーレイ
  $('.l-sp-menu-btn').click(function () {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $('.p-sp-menu-btn-title').text('MENU');
      $('.l-sp-menu').removeClass('active');
    } else {
      $(this).addClass('active');
      $('.p-sp-menu-btn-title').text('CLOSE');
      $('.l-sp-menu').addClass('active');
    }
  });

  // オープニングアニメーション
  setTimeout(function () {
    $('.fv_logo_loading').addClass('load');
  }, 2000);

  setTimeout(function () {
    $('.fv_loading').addClass('load');
  }, 3000);

  setTimeout(function () {
    $('.fv_loading-shadow').addClass('load');
  }, 3000);

  setTimeout(function () {
    $('.fv_logo_loading').addClass('none');
  }, 8000);

  setTimeout(function () {
    $('.fv_loading').addClass('none');
  }, 8000);

  setTimeout(function () {
    $('.fv_loading-shadow').addClass('load');
  }, 8000);

  setTimeout(function () {
    $('.l-footer').addClass('load');
  },3000);


  // スワイパー Aboutページ ファーストビュー
  let swiper_slide = new Swiper('.p-first-view__fv-slide',{
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
      
    },
    loop: true,
    loopadditionalSlides: 1,
    speed: 3000,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    pagination: {
      el: '.p-first-view__pagination',
      clickable: true,
    },
  })



  // スワイパー Aboutページ 住んだ国・地域
  let swiper = new Swiper ('.p-intro-slide',{
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    loop: true,
    speed: 30000,
    slidesPerView: 1.0,
    spaceBetween: 30,
    centeredSlides: true,
    loopadditionalSlides: 1,

    
    // ブレイクポイント
    breakpoints: {
      480: {
        slidesPerView: 1.2,
        spaceBetween: 15,
      },
      768: {
        slidesPerView: 1.5,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1400:{
        slidesPerView: 3,
        spaceBetween: 30,
      }
    }
  })
  
});


