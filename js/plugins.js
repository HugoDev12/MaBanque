// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function () {};
  var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());


// Place any jQuery/helper plugins in here.

// navbar d flex toggle
$("#navToggle").click(function() {
  $("#navbarScroll").toggleClass("d-flex justify-content-center");
});

// login form password icon toggle hide/show input value.
$("#pwdIcon").click(function(){
  
  $eye = "bi bi-eye-fill";
  $slashEye = "bi bi-eye-slash-fill";

  $(this).find(">:first-child").attr('class', (_, attr) => attr == $slashEye ? $eye : $slashEye);
  $("#Password").attr('type', (_, attr) => attr == 'password' ? 'text' : 'password');
  

});

