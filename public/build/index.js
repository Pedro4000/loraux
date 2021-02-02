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
        console.log(queryResult['results'][i]['cover_image'], queryResult);
        $('.research-logo').attr('src', queryResult['results'][i]['cover_image']);
        $('.research-logo').attr('data-item-type', queryResult['results'][i]['type']);
        $('.research-logo').attr('data-item-id', queryResult['results'][i]['id']);
        $('.dj-or-label').html("Juste pour info c'est un " + queryResult['results'][i]['type']);
      });
    } else {
      console.log("Juste pour info c'est un" + queryResult['results'][i]['type']);
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
    console.log('putin');
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
        console.log('okbuen');
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvZGlzY29ncy5qcyJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsImRpc2NvZ3NBcnJheUxlbmdodCIsImkiLCJxdWVyeVJlc3VsdCIsImRpcmVjdGlvbiIsIm9uIiwiZSIsInRhcmdldCIsImNsYXNzTmFtZSIsInNwbGl0IiwiYWpheCIsImRhdGEiLCJjb3VudCIsInVybCIsImRvbmUiLCJyZXNwb25zZSIsImNvbnNvbGUiLCJsb2ciLCJhdHRyIiwiaHRtbCIsImlkIiwidHlwZSIsImxlbmd0aCIsImFwcGVuZCIsIiR2aWRlb3NzcyJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7OztBQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVU7QUFDeEIsTUFBTUMsa0JBQWtCLEdBQUcsRUFBM0I7QUFDQSxNQUFJQyxDQUFDLEdBQUcsQ0FBUjtBQUNBLE1BQUlDLFdBQUo7QUFDQSxNQUFJQyxTQUFKO0FBQ0FOLEdBQUMsQ0FBQywwQkFBRCxDQUFELENBQThCTyxFQUE5QixDQUFpQyxPQUFqQyxFQUF5QyxVQUFTQyxDQUFULEVBQVc7QUFDaERGLGFBQVMsR0FBR0UsQ0FBQyxDQUFDQyxNQUFGLENBQVNDLFNBQVQsQ0FBbUJDLEtBQW5CLENBQXlCLEdBQXpCLEVBQThCLENBQTlCLENBQVo7O0FBQ0EsUUFBR0wsU0FBUyxJQUFFLE1BQWQsRUFBcUI7QUFDakIsVUFBR0YsQ0FBQyxJQUFFRCxrQkFBTixFQUF5QjtBQUNyQkMsU0FBQyxHQUFDLENBQUY7QUFDSCxPQUZELE1BR0k7QUFDQUEsU0FBQztBQUNKO0FBQ0osS0FQRCxNQVFJO0FBQ0EsVUFBR0EsQ0FBQyxJQUFFLENBQU4sRUFBUTtBQUNKQSxTQUFDLEdBQUNELGtCQUFGO0FBQ0gsT0FGRCxNQUdJO0FBQ0FDLFNBQUM7QUFDSjtBQUNKOztBQUNELFFBQUdBLENBQUMsSUFBRSxDQUFOLEVBQVE7QUFDSkosT0FBQyxDQUFDWSxJ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dkMsRUFBMkM7QUFDdkNjLGVBQU8sQ0FBQ0MsR0FBUixDQUFZLFFBQVo7QUFDaEI7OztBQUdhOztBQUNEbkIsT0FBQyxDQUFDLGdCQUFELENBQUQsQ0FBb0J5QixNQUFwQixDQUEyQixxRkFBM0I7QUFDSCxLQVpEO0FBY0FDLGFBQVMsR0FBRztBQUNSLFNBQUksRUFESTtBQUVSLFNBQUc7QUFDQyxXQUNBO0FBQUMscUJBQVksVUFBYjtBQUNBLHVCQUFjLG9CQURkO0FBRUEsc0JBQWE7QUFGYixTQUZEO0FBS0MsV0FDQTtBQUFDLHFCQUFZLFVBQWI7QUFDQSx1QkFBYyxzQkFEZDtBQUVBLHNCQUFhO0FBRmI7QUFORDtBQUZLLEtBQVo7QUFlSCxHQXBDRDtBQXVDSCxDQXJGRCxFIiwiZmlsZSI6ImluZGV4LmpzIiwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcclxuICAgIGNvbnN0IGRpc2NvZ3NBcnJheUxlbmdodCA9IDQ5O1xyXG4gICAgbGV0IGkgPSAwO1xyXG4gICAgbGV0IHF1ZXJ5UmVzdWx0O1xyXG4gICAgbGV0IGRpcmVjdGlvbjtcclxuICAgICQoJy5kaXNjb2dzLXJlc2VhcmNoLWJ1dHRvbicpLm9uKCdjbGljaycsZnVuY3Rpb24oZSl7XHJcbiAgICAgICAgZGlyZWN0aW9uID0gZS50YXJnZXQuY2xhc3NOYW1lLnNwbGl0KCctJylbMF07XHJcbiAgICAgICAgaWYoZGlyZWN0aW9uPT0nbmV4dCcpe1xyXG4gICAgICAgICAgICBpZihpPT1kaXNjb2dzQXJyYXlMZW5naHQpe1xyXG4gICAgICAgICAgICAgICAgaT0wO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIGVsc2V7XHJcbiAgICAgICAgICAgICAgICBpKys7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9XHJcbiAgICAgICAgZWxzZXtcclxuICAgICAgICAgICAgaWYoaT09MCl7XHJcbiAgICAgICAgICAgICAgICBpPWRpc2NvZ3NBcnJheUxlbmdodDtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBlbHNle1xyXG4gICAgICAgICAgICAgICAgaS0tO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGlmKGk9PTEpe1xyXG4gICAgICAgICAgICAkLmFqYXgoe1xyXG4gICAgICAgICAgICAgICAgZGF0YToge2NvdW50Oml9LFxyXG4gICAgICAgICAgICAgICAgdXJsOiBcIi9hamF4SW1hZ2VcIlxyXG4gICAgICAgICAgICB9KS5kb25lKGZ1bmN0aW9uKHJlc3BvbnNlKSB7XHJcbiAgICAgICAgICAgICAgICBxdWVyeVJlc3VsdCA9IHJlc3BvbnNlO1xyXG4gICAgICAgICAgICAgICAgY29uc29sZS5sb2cocXVlcnlSZXN1bHRbJ3Jlc3VsdHMnXVtpXVsnY292ZXJfaW1hZ2UnXSwgcXVlcnlSZXN1bHQpO1xyXG4gICAgICAgICAgICAgICAgJCgnLnJlc2VhcmNoLWxvZ28nKS5hdHRyKCdzcmMnLHF1ZXJ5UmVzdWx0WydyZXN1bHRzJ11baV1bJ2NvdmVyX2ltYWdlJ10pO1xyXG4gICAgICAgICAgICAgICAgJCgnLnJlc2VhcmNoLWxvZ28nKS5hdHRyKCdkYXRhLWl0ZW0tdHlwZScscXVlcnlSZXN1bHRbJ3Jlc3VsdHMnXVtpXVsndHlwZSddKTtcclxuICAgICAgICAgICAgICAgICQoJy5yZXNlYXJjaC1sb2dvJykuYXR0cignZGF0YS1pdGVtLWlkJyxxdWVyeVJlc3VsdFsncmVzdWx0cyddW2ldWydpZCddKTtcclxuICAgICAgICAgICAgICAgICQoJy5kai1vci1sYWJlbCcpLmh0bWwoXCJKdXN0ZSBwb3VyIGluZm8gYydlc3QgdW4gXCIrcXVlcnlSZXN1bHRbJ3Jlc3VsdHMnXVtpXVsndHlwZSddKTtcclxuICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGVsc2Uge1xyXG4gICAgICAgICAgICBjb25zb2xlLmxvZyhcIkp1c3RlIHBvdXIgaW5mbyBjJ2VzdCB1blwiK3F1ZXJ5UmVzdWx0WydyZXN1bHRzJ11baV1bJ3R5cGUnXSk7XHJcbiAgICAgICAgICAgICQoJy5yZXNlYXJjaC1sb2dvJykuYXR0cignc3JjJyxxdWVyeVJlc3VsdFsncmVzdWx0cyddW2ldWydjb3Zlcl9pbWFnZSddKTtcclxuICAgICAgICAgICAgJCgnLnJlc2VhcmNoLWxvZ28nKS5hdHRyKCdkYXRhLWl0ZW0tdHlwZScscXVlcnlSZXN1bHRbJ3Jlc3VsdHMnXVtpXVsndHlwZSddKTtcclxuICAgICAgICAgICAgJCgnLnJlc2VhcmNoLWxvZ28nKS5hdHRyKCdkYXRhLWl0ZW0taWQnLHF1ZXJ5UmVzdWx0WydyZXN1bHRzJ11baV1bJ2lkJ10pO1xyXG4gICAgICAgICAgICAkKCcuZGotb3ItbGFiZWwnKS5odG1sKFwiSnVzdGUgcG91ciBpbmZvIGMnZXN0IHVuIFwiK3F1ZXJ5UmVzdWx0WydyZXN1bHRzJ11baV1bJ3R5cGUnXSk7XHJcbiAgICAgICAgfVxyXG4gICAgfSk7XHJcblxyXG5cclxuICAgICQoJy5nb29kLWFuc3dlci1tYS1tYW4nKS5vbignY2xpY2snLGZ1bmN0aW9uKGUpe1xyXG4gICAgICAgIGxldCBpZDtcclxuICAgICAgICBsZXQgdHlwZTtcclxuICAgICAgICBsZXQgaTtcclxuICAgICAgICBjb25zb2xlLmxvZygncHV0aW4nKTtcclxuICAgICAgICB0eXBlID0gJCgnLnJlc2VhcmNoLWxvZ28nKS5hdHRyKCdkYXRhLWl0ZW0tdHlwZScpO1xyXG4gICAgICAgIGlkID0gJCgnLnJlc2VhcmNoLWxvZ28nKS5hdHRyKCdkYXRhLWl0ZW0taWQnKTtcclxuICAgICAgICAkLmFqYXgoe1xyXG4gICAgICAgICAgICBkYXRhOiB7aWQ6aWQsdHlwZTp0eXBlfSxcclxuICAgICAgICAgICAgdXJsOiBcIi9hamF4TG9hZFZpZGVvc1wiXHJcbiAgICAgICAgfSkuZG9uZShmdW5jdGlvbihyZXNwb25zZSkge1xyXG4gICAgICAgICAgICBxdWVyeVJlc3VsdCA9IHJlc3BvbnNlO1xyXG4gICAgICAgICAgICBmb3IgKGk9MDsgaSA8PSBxdWVyeVJlc3VsdFsxXS5sZW5ndGg7IGkrKykge1xyXG4gICAgICAgICAgICAgICAgY29uc29sZS5sb2coJ29rYnVlbicpO1xyXG4vKlxyXG4gICAgICAgICAgICAgICAgJCgnLnZpZGVvLXNlY3Rpb24nKS5hcHBlbmQoJzxwPjxhIGhyZWY9JytxdWVyeVJlc3VsdFsxXVtpXVsndmlkZW9VcmknXSsnPkFsbMOpIGNsaWNrZSBsw6AgLSAnK3F1ZXJ5UmVzdWx0WzFdW2ldWyd2aWRlb05hbWUnXSsnPC9hPiA8L3A+JylcclxuKi9cclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAkKCcudmlkZW8tc2VjdGlvbicpLmFwcGVuZCgnPHA+PGEgaHJlZj1cImh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jcmVhdGVZb3V0dWJlUGxheWxpc3RcIj5DcsOpZXIgbGEgcGxheWxpc3Q8L2E+IDwvcD4nKVxyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICAkdmlkZW9zc3MgPSB7XHJcbiAgICAgICAgICAgIDAgOiBcIlwiLFxyXG4gICAgICAgICAgICAxIDp7XHJcbiAgICAgICAgICAgICAgICAwIDpcclxuICAgICAgICAgICAgICAgIHsnYXJ0aXN0cycgOiBcIlBhdWwgQ3V0XCIsXHJcbiAgICAgICAgICAgICAgICAndmlkZW9OYW1lJyA6IFwiUGF1bCBDdXQgLSBUaGUgSm95XCIsXHJcbiAgICAgICAgICAgICAgICAndmlkZW9VcmknIDogXCJodHRwczovL3d3dy55b3V0dWJlLmNvbS93YXRjaD92PThsdjJoUVpWSGVzXCJ9LFxyXG4gICAgICAgICAgICAgICAgMTpcclxuICAgICAgICAgICAgICAgIHsnYXJ0aXN0cycgOiBcIlBhdWwgQ3V0XCIsXHJcbiAgICAgICAgICAgICAgICAndmlkZW9OYW1lJyA6IFwiUGF1bCBDdXQgLSBUaGUgV29ybGRcIixcclxuICAgICAgICAgICAgICAgICd2aWRlb1VyaScgOiBcImh0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9QlVGZEt1Vy1RRUVcIn1cclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuXHJcblxyXG4gICAgfSk7XHJcblxyXG5cclxufSk7XHJcbiJdLCJzb3VyY2VSb290IjoiIn0=