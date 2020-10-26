(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["signup"],{

/***/ "./assets/js/signup.js":
/*!*****************************!*\
  !*** ./assets/js/signup.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $(document).getElementsByClassName('signInFormInput');
  $("#user_save").click(function (e) {
    e.preventDefault();
    console.log(validateEmail($("#user_emailAddress").val()));

    if ($("#user_emailAddress").val().toLowerCase() == $("#mail_confirm").val().toLowerCase()) {
      console.log('pareil');
    } else {
      console.log('paspareil');
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvc2lnbnVwLmpzIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImNsaWNrIiwiZSIsInByZXZlbnREZWZhdWx0IiwiY29uc29sZSIsImxvZyIsInZhbGlkYXRlRW1haWwiLCJ2YWwiLCJ0b0xvd2VyQ2FzZSIsImVtYWlsIiwicmUiLCJ0ZXN0Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7QUFBQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFVO0FBRXhCRixHQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZRSxzQkFBWixDQUFtQyxpQkFBbkM7QUFFQUgsR0FBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQkksS0FBaEIsQ0FBc0IsVUFBU0MsQ0FBVCxFQUFXO0FBQzdCQSxLQUFDLENBQUNDLGNBQUY7QUFDQUMsV0FBTyxDQUFDQyxHQUFSLENBQVlDLGFBQWEsQ0FBQ1QsQ0FBQyxDQUFDLG9CQUFELENBQUQsQ0FBd0JVLEdBQXhCLEVBQUQsQ0FBekI7O0FBQ0EsUUFBR1YsQ0FBQyxDQUFDLG9CQUFELENBQUQsQ0FBd0JVLEdBQXhCLEdBQThCQyxXQUE5QixNQUErQ1gsQ0FBQyxDQUFDLGVBQUQsQ0FBRCxDQUFtQlUsR0FBbkIsR0FBeUJDLFdBQXpCLEVBQWxELEVBQTBGO0FBQ3RGSixhQUFPLENBQUNDLEdBQVIsQ0FBWSxRQUFaO0FBQ0gsS0FGRCxNQUVPO0FBQ0hELGFBQU8sQ0FBQ0MsR0FBUixDQUFZLFdBQVo7QUFDSDtBQUNKLEdBUkQ7O0FBU0EsV0FBU0MsYUFBVCxDQUF1QkcsS0FBdkIsRUFBOEI7QUFDMUIsUUFBTUMsRUFBRSxHQUFHLDJKQUFYO0FBQ0EsV0FBT0EsRUFBRSxDQUFDQyxJQUFILENBQVFGLEtBQVIsQ0FBUDtBQUNIO0FBR0w7Ozs7O0FBSUMsQ0F2QkQsRSIsImZpbGUiOiJzaWdudXAuanMiLCJzb3VyY2VzQ29udGVudCI6WyIkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpe1xyXG5cclxuICAgICQoZG9jdW1lbnQpLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ3NpZ25JbkZvcm1JbnB1dCcpO1xyXG5cclxuICAgICQoXCIjdXNlcl9zYXZlXCIpLmNsaWNrKGZ1bmN0aW9uKGUpe1xyXG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuICAgICAgICBjb25zb2xlLmxvZyh2YWxpZGF0ZUVtYWlsKCQoXCIjdXNlcl9lbWFpbEFkZHJlc3NcIikudmFsKCkpKTtcclxuICAgICAgICBpZigkKFwiI3VzZXJfZW1haWxBZGRyZXNzXCIpLnZhbCgpLnRvTG93ZXJDYXNlKCkgPT0gJChcIiNtYWlsX2NvbmZpcm1cIikudmFsKCkudG9Mb3dlckNhc2UoKSkge1xyXG4gICAgICAgICAgICBjb25zb2xlLmxvZygncGFyZWlsJyk7XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgY29uc29sZS5sb2coJ3Bhc3BhcmVpbCcpO1xyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG4gICAgZnVuY3Rpb24gdmFsaWRhdGVFbWFpbChlbWFpbCkge1xyXG4gICAgICAgIGNvbnN0IHJlID0gL14oKFtePD4oKVtcXF1cXFxcLiw7Olxcc0BcXFwiXSsoXFwuW148PigpW1xcXVxcXFwuLDs6XFxzQFxcXCJdKykqKXwoXFxcIi4rXFxcIikpQCgoXFxbWzAtOV17MSwzfVxcLlswLTldezEsM31cXC5bMC05XXsxLDN9XFwuWzAtOV17MSwzfVxcXSl8KChbYS16QS1aXFwtMC05XStcXC4pK1thLXpBLVpdezIsfSkpJC87XHJcbiAgICAgICAgcmV0dXJuIHJlLnRlc3QoZW1haWwpO1xyXG4gICAgfVxyXG5cclxuXHJcbi8qICAgICQoZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICQoJ1tkYXRhLXRvZ2dsZT1cInBvcG92ZXJcIl0nKS5wb3BvdmVyKCk7XHJcbiAgICB9KVxyXG4gICAgJCgnI3VzZXJfZW1haWxBZGRyZXNzJykucG9wb3ZlcigpOyovXHJcbn0pO1xyXG5cclxuXHJcblxyXG5cclxuIl0sInNvdXJjZVJvb3QiOiIifQ==