(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["index"],{

/***/ "./assets/js/discogs.js":
/*!******************************!*\
  !*** ./assets/js/discogs.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! core-js/modules/es.regexp.exec */ "./node_modules/core-js/modules/es.regexp.exec.js");

__webpack_require__(/*! core-js/modules/es.string.split */ "./node_modules/core-js/modules/es.string.split.js");

$(document).ready(function () {
  var discogsArrayLenght = 49;
  var i = 0;
  var queryResult;
  var direction;
  $('.discogs-research-button').on('click', function (e) {
    direction = e.target.className.split('-')[0];

    if (direction == 'next') {
      if (i == discogsArrayLenght) {
        i = 0;
      } else {
        i++;
      }
    } else {
      if (i == 0) {
        i = discogsArrayLenght;
      } else {
        i--;
      }
    }

    if (i == 1) {
      $.ajax({
        data: {
          count: i
        },
        url: "/ajaxImage"
      }).done(function (response) {
        queryResult = response;
        $('.research-logo').attr('src', queryResult['results'][i]['cover_image']);
        $('.research-logo').attr('data-item-type', queryResult['results'][i]['type']);
        $('.research-logo').attr('data-item-id', queryResult['results'][i]['id']);
        $('.dj-or-label').html("Juste pour info c'est un " + queryResult['results'][i]['type']);
      });
    } else {
      $('.research-logo').attr('src', queryResult['results'][i]['cover_image']);
      $('.research-logo').attr('data-item-type', queryResult['results'][i]['type']);
      $('.research-logo').attr('data-item-id', queryResult['results'][i]['id']);
      $('.dj-or-label').html("Juste pour info c'est un " + queryResult['results'][i]['type']);
    }
  });
  $('.good-answer-ma-man').on('click', function (e) {
    var id;
    var type;
    var i;
    type = $('.research-logo').attr('data-item-type');
    id = $('.research-logo').attr('data-item-id');
    $.ajax({
      data: {
        id: id,
        type: type
      },
      url: "/ajaxLoadVideos"
    }).done(function (response) {
      queryResult = response;

      for (i = 0; i <= queryResult[1].length; i++) {
        /*
                        $('.video-section').append('<p><a href='+queryResult[1][i]['videoUri']+'>Allé clicke là - '+queryResult[1][i]['videoName']+'</a> </p>')
        */
      }

      $('.video-section').append('<p><a href="http://127.0.0.1:8000/createYoutubePlaylist">Créer la playlist</a> </p>');
    });
    $videosss = {
      0: "",
      1: {
        0: {
          'artists': "Paul Cut",
          'videoName': "Paul Cut - The Joy",
          'videoUri': "https://www.youtube.com/watch?v=8lv2hQZVHes"
        },
        1: {
          'artists': "Paul Cut",
          'videoName': "Paul Cut - The World",
          'videoUri': "https://www.youtube.com/watch?v=BUFdKuW-QEE"
        }
      }
    };
  });
});

/***/ })

},[["./assets/js/discogs.js","runtime","vendors~index"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvZGlzY29ncy5qcyJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsImRpc2NvZ3NBcnJheUxlbmdodCIsImkiLCJxdWVyeVJlc3VsdCIsImRpcmVjdGlvbiIsIm9uIiwiZSIsInRhcmdldCIsImNsYXNzTmFtZSIsInNwbGl0IiwiYWpheCIsImRhdGEiLCJjb3VudCIsInVybCIsImRvbmUiLCJyZXNwb25zZSIsImF0dHIiLCJodG1sIiwiaWQiLCJ0eXBlIiwibGVuZ3RoIiwiYXBwZW5kIiwiJHZpZGVvc3NzIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7O0FBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBVTtBQUN4QixNQUFNQyxrQkFBa0IsR0FBRyxFQUEzQjtBQUNBLE1BQUlDLENBQUMsR0FBRyxDQUFSO0FBQ0EsTUFBSUMsV0FBSjtBQUNBLE1BQUlDLFNBQUo7QUFDQU4sR0FBQyxDQUFDLDBCQUFELENBQUQsQ0FBOEJPLEVBQTlCLENBQWlDLE9BQWpDLEVBQXlDLFVBQVNDLENBQVQsRUFBVztBQUNoREYsYUFBUyxHQUFHRSxDQUFDLENBQUNDLE1BQUYsQ0FBU0MsU0FBVCxDQUFtQkMsS0FBbkIsQ0FBeUIsR0FBekIsRUFBOEIsQ0FBOUIsQ0FBWjs7QUFDQSxRQUFHTCxTQUFTLElBQUUsTUFBZCxFQUFxQjtBQUNqQixVQUFHRixDQUFDLElBQUVELGtCQUFOLEVBQXlCO0FBQ3JCQyxTQUFDLEdBQUMsQ0FBRjtBQUNILE9BRkQsTUFHSTtBQUNBQSxTQUFDO0FBQ0o7QUFDSixLQVBELE1BUUk7QUFDQSxVQUFHQSxDQUFDLElBQUUsQ0FBTixFQUFRO0FBQ0pBLFNBQUMsR0FBQ0Qsa0JBQUY7QUFDSCxPQUZELE1BR0k7QUFDQUMsU0FBQztBQUNKO0FBQ0o7O0FBQ0QsUUFBR0EsQ0FBQyxJQUFFLENBQU4sRUFBUTtBQUNKSixPQUFDLENBQUNZLElBQUYsQ0FBTztBQUNIQyxZ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QUFjLHNCQURkO0FBRUEsc0JBQWE7QUFGYjtBQU5EO0FBRkssS0FBWjtBQWVILEdBbENEO0FBcUNILENBakZELEUiLCJmaWxlIjoiaW5kZXguanMiLCJzb3VyY2VzQ29udGVudCI6WyIkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpe1xyXG4gICAgY29uc3QgZGlzY29nc0FycmF5TGVuZ2h0ID0gNDk7XHJcbiAgICBsZXQgaSA9IDA7XHJcbiAgICBsZXQgcXVlcnlSZXN1bHQ7XHJcbiAgICBsZXQgZGlyZWN0aW9uO1xyXG4gICAgJCgnLmRpc2NvZ3MtcmVzZWFyY2gtYnV0dG9uJykub24oJ2NsaWNrJyxmdW5jdGlvbihlKXtcclxuICAgICAgICBkaXJlY3Rpb24gPSBlLnRhcmdldC5jbGFzc05hbWUuc3BsaXQoJy0nKVswXTtcclxuICAgICAgICBpZihkaXJlY3Rpb249PSduZXh0Jyl7XHJcbiAgICAgICAgICAgIGlmKGk9PWRpc2NvZ3NBcnJheUxlbmdodCl7XHJcbiAgICAgICAgICAgICAgICBpPTA7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgZWxzZXtcclxuICAgICAgICAgICAgICAgIGkrKztcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgICAgICBlbHNle1xyXG4gICAgICAgICAgICBpZihpPT0wKXtcclxuICAgICAgICAgICAgICAgIGk9ZGlzY29nc0FycmF5TGVuZ2h0O1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIGVsc2V7XHJcbiAgICAgICAgICAgICAgICBpLS07XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9XHJcbiAgICAgICAgaWYoaT09MSl7XHJcbiAgICAgICAgICAgICQuYWpheCh7XHJcbiAgICAgICAgICAgICAgICBkYXRhOiB7Y291bnQ6aX0sXHJcbiAgICAgICAgICAgICAgICB1cmw6IFwiL2FqYXhJbWFnZVwiXHJcbiAgICAgICAgICAgIH0pLmRvbmUoZnVuY3Rpb24ocmVzcG9uc2UpIHtcclxuICAgICAgICAgICAgICAgIHF1ZXJ5UmVzdWx0ID0gcmVzcG9uc2U7XHJcbiAgICAgICAgICAgICAgICAkKCcucmVzZWFyY2gtbG9nbycpLmF0dHIoJ3NyYycscXVlcnlSZXN1bHRbJ3Jlc3VsdHMnXVtpXVsnY292ZXJfaW1hZ2UnXSk7XHJcbiAgICAgICAgICAgICAgICAkKCcucmVzZWFyY2gtbG9nbycpLmF0dHIoJ2RhdGEtaXRlbS10eXBlJyxxdWVyeVJlc3VsdFsncmVzdWx0cyddW2ldWyd0eXBlJ10pO1xyXG4gICAgICAgICAgICAgICAgJCgnLnJlc2VhcmNoLWxvZ28nKS5hdHRyKCdkYXRhLWl0ZW0taWQnLHF1ZXJ5UmVzdWx0WydyZXN1bHRzJ11baV1bJ2lkJ10pO1xyXG4gICAgICAgICAgICAgICAgJCgnLmRqLW9yLWxhYmVsJykuaHRtbChcIkp1c3RlIHBvdXIgaW5mbyBjJ2VzdCB1biBcIitxdWVyeVJlc3VsdFsncmVzdWx0cyddW2ldWyd0eXBlJ10pO1xyXG4gICAgICAgICAgICB9KTtcclxuICAgICAgICB9XHJcbiAgICAgICAgZWxzZSB7XHJcbiAgICAgICAgICAgICQoJy5yZXNlYXJjaC1sb2dvJykuYXR0cignc3JjJyxxdWVyeVJlc3VsdFsncmVzdWx0cyddW2ldWydjb3Zlcl9pbWFnZSddKTtcclxuICAgICAgICAgICAgJCgnLnJlc2VhcmNoLWxvZ28nKS5hdHRyKCdkYXRhLWl0ZW0tdHlwZScscXVlcnlSZXN1bHRbJ3Jlc3VsdHMnXVtpXVsndHlwZSddKTtcclxuICAgICAgICAgICAgJCgnLnJlc2VhcmNoLWxvZ28nKS5hdHRyKCdkYXRhLWl0ZW0taWQnLHF1ZXJ5UmVzdWx0WydyZXN1bHRzJ11baV1bJ2lkJ10pO1xyXG4gICAgICAgICAgICAkKCcuZGotb3ItbGFiZWwnKS5odG1sKFwiSnVzdGUgcG91ciBpbmZvIGMnZXN0IHVuIFwiK3F1ZXJ5UmVzdWx0WydyZXN1bHRzJ11baV1bJ3R5cGUnXSk7XHJcbiAgICAgICAgfVxyXG4gICAgfSk7XHJcblxyXG5cclxuICAgICQoJy5nb29kLWFuc3dlci1tYS1tYW4nKS5vbignY2xpY2snLGZ1bmN0aW9uKGUpe1xyXG4gICAgICAgIGxldCBpZDtcclxuICAgICAgICBsZXQgdHlwZTtcclxuICAgICAgICBsZXQgaTtcclxuICAgICAgICB0eXBlID0gJCgnLnJlc2VhcmNoLWxvZ28nKS5hdHRyKCdkYXRhLWl0ZW0tdHlwZScpO1xyXG4gICAgICAgIGlkID0gJCgnLnJlc2VhcmNoLWxvZ28nKS5hdHRyKCdkYXRhLWl0ZW0taWQnKTtcclxuICAgICAgICAkLmFqYXgoe1xyXG4gICAgICAgICAgICBkYXRhOiB7aWQ6aWQsdHlwZTp0eXBlfSxcclxuICAgICAgICAgICAgdXJsOiBcIi9hamF4TG9hZFZpZGVvc1wiXHJcbiAgICAgICAgfSkuZG9uZShmdW5jdGlvbihyZXNwb25zZSkge1xyXG4gICAgICAgICAgICBxdWVyeVJlc3VsdCA9IHJlc3BvbnNlO1xyXG4gICAgICAgICAgICBmb3IgKGk9MDsgaSA8PSBxdWVyeVJlc3VsdFsxXS5sZW5ndGg7IGkrKykge1xyXG4vKlxyXG4gICAgICAgICAgICAgICAgJCgnLnZpZGVvLXNlY3Rpb24nKS5hcHBlbmQoJzxwPjxhIGhyZWY9JytxdWVyeVJlc3VsdFsxXVtpXVsndmlkZW9VcmknXSsnPkFsbMOpIGNsaWNrZSBsw6AgLSAnK3F1ZXJ5UmVzdWx0WzFdW2ldWyd2aWRlb05hbWUnXSsnPC9hPiA8L3A+JylcclxuKi9cclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAkKCcudmlkZW8tc2VjdGlvbicpLmFwcGVuZCgnPHA+PGEgaHJlZj1cImh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jcmVhdGVZb3V0dWJlUGxheWxpc3RcIj5DcsOpZXIgbGEgcGxheWxpc3Q8L2E+IDwvcD4nKVxyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICAkdmlkZW9zc3MgPSB7XHJcbiAgICAgICAgICAgIDAgOiBcIlwiLFxyXG4gICAgICAgICAgICAxIDp7XHJcbiAgICAgICAgICAgICAgICAwIDpcclxuICAgICAgICAgICAgICAgIHsnYXJ0aXN0cycgOiBcIlBhdWwgQ3V0XCIsXHJcbiAgICAgICAgICAgICAgICAndmlkZW9OYW1lJyA6IFwiUGF1bCBDdXQgLSBUaGUgSm95XCIsXHJcbiAgICAgICAgICAgICAgICAndmlkZW9VcmknIDogXCJodHRwczovL3d3dy55b3V0dWJlLmNvbS93YXRjaD92PThsdjJoUVpWSGVzXCJ9LFxyXG4gICAgICAgICAgICAgICAgMTpcclxuICAgICAgICAgICAgICAgIHsnYXJ0aXN0cycgOiBcIlBhdWwgQ3V0XCIsXHJcbiAgICAgICAgICAgICAgICAndmlkZW9OYW1lJyA6IFwiUGF1bCBDdXQgLSBUaGUgV29ybGRcIixcclxuICAgICAgICAgICAgICAgICd2aWRlb1VyaScgOiBcImh0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9QlVGZEt1Vy1RRUVcIn1cclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuXHJcblxyXG4gICAgfSk7XHJcblxyXG5cclxufSk7XHJcbiJdLCJzb3VyY2VSb290IjoiIn0=