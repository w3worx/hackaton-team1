jQuery(function($) {

  // HELPER FUNCTIES
  next = function($items, el) {
    if (el.next().length > 0) {
      return el.next();
    } else {
      return $items.first();
    }
  }
  prev = function($items, el) {
    if (el.prev().length > 0) {
      return el.prev();
    } else {
      return $items.last();
    }
  }


  // HERO SLIDER
  var sliderInterval = setInterval(function(){
    var holderA = $('.hero-slider > ul li');
        activeA = $('.hero-slider > ul li.active');
    activeA.removeClass('active');
    next(holderA, activeA).addClass('active');
    var holderB = $('.slider-dots li');
        activeB = $('.slider-dots li.active');
    activeB.removeClass('active').find('i').toggleClass('fas far');
    next(holderB, activeB).addClass('active').find('i').toggleClass('fas far');
  }, 5000);

  $('.slider-dots').on('click', 'a', function(e){
    e.preventDefault();
  });
  

  // MENU TOGGLE
  $('.menu-toggle').on('click', function(e) {
    e.preventDefault();
    $(this).toggleClass('open').find('.icon').toggleClass('close');
    $(this).parent().find('.off-canvas').toggleClass('open');
    $('.layout-container').toggleClass('slide-canvas');
  });


  // SEARCH TOGGLE
  $('.nav-search').on('click', '.toggle', function(e) {
    e.preventDefault();
    if($('.off-canvas').hasClass('open')){
      $('#search-form').submit();
    } else {
      $(this).parent().toggleClass('open');
    }
  });

});
