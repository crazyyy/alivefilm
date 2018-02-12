// Avoid `console` errors in browsers that lack a console.
(function() {
  var method
  var noop = function() {}
  var methods = [
    "assert",
    "clear",
    "count",
    "debug",
    "dir",
    "dirxml",
    "error",
    "exception",
    "group",
    "groupCollapsed",
    "groupEnd",
    "info",
    "log",
    "markTimeline",
    "profile",
    "profileEnd",
    "table",
    "time",
    "timeEnd",
    "timeline",
    "timelineEnd",
    "timeStamp",
    "trace",
    "warn"
  ]
  var length = methods.length
  var console = (window.console = window.console || {})

  while (length--) {
    method = methods[length]

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop
    }
  }
})()
if (typeof jQuery === "undefined") {
  console.warn("jQuery hasn't loaded")
} else {
  console.log("jQuery " + jQuery.fn.jquery + " has loaded")
}
// Place any jQuery/helper plugins in here.
jQuery(document).ready(function($) {
  $('body').fadeIn(3000).removeClass('hidden');

  $('article iframe').each(function(index, el) {
    $(el).wrap('<div class="embed-container"></div>')
  });
  $('.header--nav').on('click', function(e) {
    e.preventDefault();
    $('.modalnav').toggleClass('modalnav--opened');
    $('body').toggleClass('modaled')
  })
  $('.modalnav').on('click', function(e) {
    e.stopPropagation();
    $('.modalnav').toggleClass('modalnav--opened');
    $('body').toggleClass('modaled')
  })
  $("a").click(function(event) {
    event.preventDefault();
    linkLocation = this.href;
    $("body").fadeOut(3000, redirectPage(linkLocation));
  });


  $('.looper').each(function(index, el) {
    var height = $(el).children('.feature-img').children('img').height();
    $(el).children('.inner-title').height(height);
  });


  if ($('body').hasClass('page-template-front-page')) {
    changeVideoBackground();
    window.addEventListener('resize', changeVideoBackground);
  }


});

function redirectPage(link) {
  document.location.href = link;
}

function changeVideoBackground() {
  const videoMaxWidth = 800;
  const videoAspectRatio = 9 / 16;
  const videoBackground = document.querySelector('.video-background');
  if (window.innerWidth > videoMaxWidth) {
    videoBackground.style.height = `${ videoMaxWidth * videoAspectRatio }px`;
  } else {
    videoBackground.style.height = `${ window.innerWidth * videoAspectRatio }px`;
  }
}
