// Avoid `console` errors in browsers that lack a console.
(function () {
  var method
  var noop = function () {}
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

$(function () {
  var slider = $('body').find('#banner_slider_507');
  if (slider.length) {
    slider.owlCarousel({
      direction: 'ltr',
      items: 1,
      singleItem: true,
      slideSpeed: 400,
      autoPlay: '3000',
      stopOnHover: true,
      pagination: true,
      paginationNumbers: true
    });
  }
});
