(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["signup"],{

/***/ "./assets/js/signup.js":
/*!*****************************!*\
  !*** ./assets/js/signup.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $("#user_save").click(function (e) {
    e.preventDefault();
    console.log(validateEmail($("#user_emailAddress").val()));

    if ($("#user_emailAddress").val().toLowerCase() == $("#mail_confirm").val().toLowerCase()) {} else {
      console.log($("#same-email-alert"));
      $('#same-email-alert').css("display", 'block');
    }
  });

  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }
  /*    $(function () {
          $('[data-toggle="popover"]').popover();
      })
      $('#user_emailAddress').popover();*/

});

/***/ })

},[["./assets/js/signup.js","runtime"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvc2lnbnVwLmpzIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5IiwiY2xpY2siLCJlIiwicHJldmVudERlZmF1bHQiLCJjb25zb2xlIiwibG9nIiwidmFsaWRhdGVFbWFpbCIsInZhbCIsInRvTG93ZXJDYXNlIiwiY3NzIiwiZW1haWwiLCJyZSIsInRlc3QiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7OztBQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVU7QUFFeEJGLEdBQUMsQ0FBQyxZQUFELENBQUQsQ0FBZ0JHLEtBQWhCLENBQXNCLFVBQVNDLENBQVQsRUFBVztBQUM3QkEsS0FBQyxDQUFDQyxjQUFGO0FBQ0FDLFdBQU8sQ0FBQ0MsR0FBUixDQUFZQyxhQUFhLENBQUNSLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCUyxHQUF4QixFQUFELENBQXpCOztBQUNBLFFBQUdULENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCUyxHQUF4QixHQUE4QkMsV0FBOUIsTUFBK0NWLENBQUMsQ0FBQyxlQUFELENBQUQsQ0FBbUJTLEdBQW5CLEdBQXlCQyxXQUF6QixFQUFsRCxFQUEwRixDQUV6RixDQUZELE1BRU87QUFDSEosYUFBTyxDQUFDQyxHQUFSLENBQVlQLENBQUMsQ0FBQyxtQkFBRCxDQUFiO0FBQ0FBLE9BQUMsQ0FBQyxtQkFBRCxDQUFELENBQXVCVyxHQUF2QixDQUEyQixTQUEzQixFQUFxQyxPQUFyQztBQUNIO0FBQ0osR0FURDs7QUFVQSxXQUFTSCxhQUFULENBQXVCSSxLQUF2QixFQUE4QjtBQUMxQixRQUFNQyxFQUFFLEdBQUcsMkpBQVg7QUFDQSxXQUFPQSxFQUFFLENBQUNDLElBQUgsQ0FBUUYsS0FBUixDQUFQO0FBQ0g7QUFHTDs7Ozs7QUFJQyxDQXRCRCxFIiwiZmlsZSI6InNpZ251cC5qcyIsInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCl7XHJcblxyXG4gICAgJChcIiN1c2VyX3NhdmVcIikuY2xpY2soZnVuY3Rpb24oZSl7XHJcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAgICAgIGNvbnNvbGUubG9nKHZhbGlkYXRlRW1haWwoJChcIiN1c2VyX2VtYWlsQWRkcmVzc1wiKS52YWwoKSkpO1xyXG4gICAgICAgIGlmKCQoXCIjdXNlcl9lbWFpbEFkZHJlc3NcIikudmFsKCkudG9Mb3dlckNhc2UoKSA9PSAkKFwiI21haWxfY29uZmlybVwiKS52YWwoKS50b0xvd2VyQ2FzZSgpKSB7XHJcblxyXG4gICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKCQoXCIjc2FtZS1lbWFpbC1hbGVydFwiKSk7XHJcbiAgICAgICAgICAgICQoJyNzYW1lLWVtYWlsLWFsZXJ0JykuY3NzKFwiZGlzcGxheVwiLCdibG9jaycpO1xyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG4gICAgZnVuY3Rpb24gdmFsaWRhdGVFbWFpbChlbWFpbCkge1xyXG4gICAgICAgIGNvbnN0IHJlID0gL14oKFtePD4oKVtcXF1cXFxcLiw7Olxcc0BcXFwiXSsoXFwuW148PigpW1xcXVxcXFwuLDs6XFxzQFxcXCJdKykqKXwoXFxcIi4rXFxcIikpQCgoXFxbWzAtOV17MSwzfVxcLlswLTldezEsM31cXC5bMC05XXsxLDN9XFwuWzAtOV17MSwzfVxcXSl8KChbYS16QS1aXFwtMC05XStcXC4pK1thLXpBLVpdezIsfSkpJC87XHJcbiAgICAgICAgcmV0dXJuIHJlLnRlc3QoZW1haWwpO1xyXG4gICAgfVxyXG5cclxuXHJcbi8qICAgICQoZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICQoJ1tkYXRhLXRvZ2dsZT1cInBvcG92ZXJcIl0nKS5wb3BvdmVyKCk7XHJcbiAgICB9KVxyXG4gICAgJCgnI3VzZXJfZW1haWxBZGRyZXNzJykucG9wb3ZlcigpOyovXHJcbn0pO1xyXG5cclxuXHJcblxyXG5cclxuIl0sInNvdXJjZVJvb3QiOiIifQ==