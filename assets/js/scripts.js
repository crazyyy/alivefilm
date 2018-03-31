function redirectPage(e) {
  document.location.href = e
}

function MakeVideoBgSize() {
  var e = $("#video-background"),
    o = $(window).height(),
    n = o + o / 100 * 10 + "px";
  e.css("min-height", n)
}! function() {
  for (var e, o = ["assert", "clear", "count", "debug", "dir", "dirxml", "error", "exception", "group", "groupCollapsed", "groupEnd", "info", "log", "markTimeline", "profile", "profileEnd", "table", "time", "timeEnd", "timeline", "timelineEnd", "timeStamp", "trace", "warn"], n = o.length, a = window.console = window.console || {}; n--;) a[e = o[n]] || (a[e] = function() {})
}(), "undefined" == typeof jQuery ? console.warn("jQuery hasn't loaded") : console.log("jQuery " + jQuery.fn.jquery + " has loaded"), jQuery(document).ready(function(e) {
  e("body").fadeIn(3e3).removeClass("hidden"), e("article iframe").each(function(o, n) {
    e(n).wrap('<div class="embed-container"></div>')
  }), e(".header--nav").on("click", function(o) {
    o.preventDefault(), e(".modalnav").toggleClass("modalnav--opened"), e("body").toggleClass("modaled")
  }), e(".modalnav").on("click", function(o) {
    o.stopPropagation(), e(".modalnav").toggleClass("modalnav--opened"), e("body").toggleClass("modaled")
  }), e("a").click(function(o) {
    o.preventDefault(), linkLocation = this.href, e("body").fadeOut(3e3, redirectPage(linkLocation))
  }), e("body").hasClass("page-template-front-page"), e(".language-chooser-item a").each(function(o, n) {
    0 == o ? e(this).html("RU") : e(this).html("EN")
  }), e(".load_more:not(.loading)").live("click", function(o) {
    o.preventDefault(), console.log("fire");
    var n = e(this),
      a = e("#posts_list .looper").length,
      t = n.attr("data-nonce");
    e.ajax({
      type: "post",
      context: this,
      dataType: "json",
      url: headJS.ajaxurl,
      data: {
        action: "load_more",
        offset: a,
        nonce: t,
        post_type: "post",
        posts_per_page: headJS.posts_per_page
      },
      beforeSend: function(e) {
        n.addClass("loading")
      },
      success: function(o) {
        if (console.log(o), 1 == o.have_posts) {
          n.removeClass("loading");
          var a = e(o.html.replace(/(\r\n|\n|\r)/gm, ""));
          e("#posts_list").append(a)
        } else n.removeClass("loading").addClass("end_of_posts")
      }
    })
  })
}), $(document).resize(function(e) {});
