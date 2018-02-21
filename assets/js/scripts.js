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


  }

  $('.language-chooser-item a').each(function(index, el) {
    if (index == 0) {
      $(this).html('RU');
    } else {
      $(this).html('EN');
    }
  });

  $('.load_more:not(.loading)').live('click', function(e) {
    e.preventDefault();
    console.log('fire');
    var $load_more_btn = $(this);
    var post_type = 'post'; // this is optional and can be set from anywhere, stored in mockup etc...
    var offset = $('#posts_list .looper').length;
    var nonce = $load_more_btn.attr('data-nonce');
    $.ajax({
      type: "post",
      context: this,
      dataType: "json",
      url: headJS.ajaxurl,
      data: {
        action: "load_more",
        offset: offset,
        nonce: nonce,
        post_type: post_type,
        posts_per_page: headJS.posts_per_page
      },
      beforeSend: function(data) {
        // here u can do some loading animation...
        $load_more_btn.addClass('loading'); // good for styling and also to prevent ajax calls before content is loaded by adding loading class
      },
      success: function(response) {
        console.log(response)
        if (response['have_posts'] == 1) { //if have posts:
          $load_more_btn.removeClass('loading');
          var $newElems = $(response['html'].replace(/(\r\n|\n|\r)/gm, '')); // here removing extra breaklines and spaces
          $('#posts_list').append($newElems);
        } else {
          //end of posts (no posts found)
          $load_more_btn.removeClass('loading').addClass('end_of_posts'); // change buttom styles if no more posts
        }
      }
    });
  });

});

function redirectPage(link) {
  document.location.href = link;
}
