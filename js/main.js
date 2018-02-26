$(document).ready(function() {
  // mobile toggle icon
  $('#main_navigation').on('show.bs.collapse', function () {
    $('.icon').addClass('icon--active');
  });
  $('#main_navigation').on('hide.bs.collapse', function () {
    $('.icon').removeClass('icon--active');
  });
});

var width = $(window).width();
var resizeTimer;
$(window).resize(function() {
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(function() {
    // Run code here, resizing has "stopped"
    tuning();

    if ($(window).width()==width) return;
    width = $(window).width();
    horizontal_tuning(); // launched only if there is an horizontal resize

  }, 0);
});

$(window).scroll(function() { });

$(window).load(function() { tuning(); });

function tuning() {
  // responsiveness
  if( isBreakpoint('xs') ) {

  } else {

  }

  $('.site-main').css( 'min-height', $(window).height()-( $('.site-footer').outerHeight(true)+$('.top-banner').outerHeight(true)));

  // for developers
  $('#window_width').html('['+$(window).width()+'px]');
}

function horizontal_tuning() { // launched only if there is an horizontal resize

}

function isBreakpoint( alias ) {
  return $('.device-' + alias).is(':visible');
}
