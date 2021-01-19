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
  var i = 0;
  var queryResult;
  var direction;
  $('.discogs-research-button').on('click', function (e) {
    direction = e.target.className.split('-')[0];

    if (direction == 'next') {
      if (i == 49) {
        i = 0;
      } else {
        i++;
      }
    } else {
      if (i == 0) {
        i = 49;
      } else {
        i--;
      }
    }

    if (i == 1) {
      console.log('ok');
      $.ajax({
        data: {
          count: i
        },
        url: "/ajaxImage"
      }).done(function (response) {
        queryResult = response;
        console.log(queryResult['results'][i]['cover_image'], queryResult);
        $('.research-logo').attr('src', queryResult['results'][i]['cover_image']);
        $('.dj-or-label').html("Juste pour info c'est un " + queryResult['results'][i]['type']);
      });
    } else {
      console.log("Juste pour info c'est un" + queryResult['results'][i]['type']);
      $('.research-logo').attr('src', queryResult['results'][i]['cover_image']);
      $('.dj-or-label').html("Juste pour info c'est un " + queryResult['results'][i]['type']);
    }
  });
});

/***/ })

},[["./assets/js/discogs.js","runtime","vendors~index"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvZGlzY29ncy5qcyJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsImkiLCJxdWVyeVJlc3VsdCIsImRpcmVjdGlvbiIsIm9uIiwiZSIsInRhcmdldCIsImNsYXNzTmFtZSIsInNwbGl0IiwiY29uc29sZSIsImxvZyIsImFqYXgiLCJkYXRhIiwiY291bnQiLCJ1cmwiLCJkb25lIiwicmVzcG9uc2UiLCJhdHRyIiwiaHRtbCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7OztBQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVU7QUFDeEIsTUFBSUMsQ0FBQyxHQUFHLENBQVI7QUFDQSxNQUFJQyxXQUFKO0FBQ0EsTUFBSUMsU0FBSjtBQUNBTCxHQUFDLENBQUMsMEJBQUQsQ0FBRCxDQUE4Qk0sRUFBOUIsQ0FBaUMsT0FBakMsRUFBeUMsVUFBU0MsQ0FBVCxFQUFXO0FBQ2hERixhQUFTLEdBQUdFLENBQUMsQ0FBQ0MsTUFBRixDQUFTQyxTQUFULENBQW1CQyxLQUFuQixDQUF5QixHQUF6QixFQUE4QixDQUE5QixDQUFaOztBQUNBLFFBQUdMLFNBQVMsSUFBRSxNQUFkLEVBQXFCO0FBQ2pCLFVBQUdGLENBQUMsSUFBRSxFQUFOLEVBQVM7QUFDTEEsU0FBQyxHQUFDLENBQUY7QUFDSCxPQUZELE1BR0k7QUFDQUEsU0FBQztBQUNKO0FBQ0osS0FQRCxNQVFJO0FBQ0EsVUFBR0EsQ0FBQyxJQUFFLENBQU4sRUFBUTtBQUNKQSxTQUFDLEdBQUMsRUFBRjtBQUNILE9BRkQsTUFHSTtBQUNBQSxTQUFDO0FBQ0o7QUFDSjs7QUFDRCxRQUFHQSxDQUFDLElBQUUsQ0FBTixFQUFRO0FBQ0pRLGFBQU8sQ0FBQ0MsR0FBUixDQUFZLElBQVo7QUFDQVosT0FBQyxDQUFDYSxJQUFGLENBQU87QUFDSEMsWUFBSSxFQUFFO0FBQUNDLGVBQUssRUFBQ1o7QUFBUCxTQURIO0FBRUhhLFdBQUcsRUFBRTtBQUZGLE9BQVAsRUFHR0MsSUFISCxDQUdRLFVBQVNDLFFBQVQsRUFBbUI7QUFDdkJkLG1CQUFXLEdBQUdjLFFBQWQ7QUFDQVAsZUFBTyxDQUFDQyxHQUFSLENBQVlSLFdBQVcsQ0FBQyxTQUFELENBQVgsQ0FBdUJELENBQXZCLEVBQTBCLGFBQTFCLENBQVosRUFBc0RDLFdBQXREO0FBQ0FKLFNBQUMsQ0FBQyxnQkFBRCxDQUFELENBQW9CbUIsSUFBcEIsQ0FBeUIsS0FBekIsRUFBK0JmLFdBQVcsQ0FBQyxTQUFELENBQVgsQ0FBdUJELENBQXZCLEVBQTBCLGFBQTFCLENBQS9CO0FBQ0FILFNBQUMsQ0FBQyxjQUFELENBQUQsQ0FBa0JvQixJQUFsQixDQUF1Qiw4QkFBNEJoQixXQUFXLENBQUMsU0FBRCxDQUFYLENBQXVCRCxDQUF2QixFQUEwQixNQUExQixDQUFuRDtBQUNILE9BUkQ7QUFTSCxLQVhELE1BWUs7QUFDRFEsYUFBTyxDQUFDQyxHQUFSLENBQVksNkJBQTJCUixXQUFXLENBQUMsU0FBRCxDQUFYLENBQXVCRCxDQUF2QixFQUEwQixNQUExQixDQUF2QztBQUNBSCxPQUFDLENBQUMsZ0JBQUQsQ0FBRCxDQUFvQm1CLElBQXBCLENBQXlCLEtBQXpCLEVBQStCZixXQUFXLENBQUMsU0FBRCxDQUFYLENBQXVCRCxDQUF2QixFQUEwQixhQUExQixDQUEvQjtBQUNBSCxPQUFDLENBQUMsY0FBRCxDQUFELENBQWtCb0IsSUFBbEIsQ0FBdUIsOEJBQTRCaEIsV0FBVyxDQUFDLFNBQUQsQ0FBWCxDQUF1QkQsQ0FBdkIsRUFBMEIsTUFBMUIsQ0FBbkQ7QUFDSDtBQUNKLEdBbkNEO0FBc0NILENBMUNELEUiLCJmaWxlIjoiaW5kZXguanMiLCJzb3VyY2VzQ29udGVudCI6WyIkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpe1xyXG4gICAgbGV0IGkgPSAwO1xyXG4gICAgbGV0IHF1ZXJ5UmVzdWx0O1xyXG4gICAgbGV0IGRpcmVjdGlvbjtcclxuICAgICQoJy5kaXNjb2dzLXJlc2VhcmNoLWJ1dHRvbicpLm9uKCdjbGljaycsZnVuY3Rpb24oZSl7XHJcbiAgICAgICAgZGlyZWN0aW9uID0gZS50YXJnZXQuY2xhc3NOYW1lLnNwbGl0KCctJylbMF07XHJcbiAgICAgICAgaWYoZGlyZWN0aW9uPT0nbmV4dCcpe1xyXG4gICAgICAgICAgICBpZihpPT00OSl7XHJcbiAgICAgICAgICAgICAgICBpPTA7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgZWxzZXtcclxuICAgICAgICAgICAgICAgIGkrKztcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgICAgICBlbHNle1xyXG4gICAgICAgICAgICBpZihpPT0wKXtcclxuICAgICAgICAgICAgICAgIGk9NDk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgZWxzZXtcclxuICAgICAgICAgICAgICAgIGktLTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgICAgICBpZihpPT0xKXtcclxuICAgICAgICAgICAgY29uc29sZS5sb2coJ29rJyk7XHJcbiAgICAgICAgICAgICQuYWpheCh7XHJcbiAgICAgICAgICAgICAgICBkYXRhOiB7Y291bnQ6aX0sXHJcbiAgICAgICAgICAgICAgICB1cmw6IFwiL2FqYXhJbWFnZVwiXHJcbiAgICAgICAgICAgIH0pLmRvbmUoZnVuY3Rpb24ocmVzcG9uc2UpIHtcclxuICAgICAgICAgICAgICAgIHF1ZXJ5UmVzdWx0ID0gcmVzcG9uc2U7XHJcbiAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhxdWVyeVJlc3VsdFsncmVzdWx0cyddW2ldWydjb3Zlcl9pbWFnZSddLCBxdWVyeVJlc3VsdCk7XHJcbiAgICAgICAgICAgICAgICAkKCcucmVzZWFyY2gtbG9nbycpLmF0dHIoJ3NyYycscXVlcnlSZXN1bHRbJ3Jlc3VsdHMnXVtpXVsnY292ZXJfaW1hZ2UnXSlcclxuICAgICAgICAgICAgICAgICQoJy5kai1vci1sYWJlbCcpLmh0bWwoXCJKdXN0ZSBwb3VyIGluZm8gYydlc3QgdW4gXCIrcXVlcnlSZXN1bHRbJ3Jlc3VsdHMnXVtpXVsndHlwZSddKVxyXG4gICAgICAgICAgICB9KTtcclxuICAgICAgICB9XHJcbiAgICAgICAgZWxzZSB7XHJcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKFwiSnVzdGUgcG91ciBpbmZvIGMnZXN0IHVuXCIrcXVlcnlSZXN1bHRbJ3Jlc3VsdHMnXVtpXVsndHlwZSddKTtcclxuICAgICAgICAgICAgJCgnLnJlc2VhcmNoLWxvZ28nKS5hdHRyKCdzcmMnLHF1ZXJ5UmVzdWx0WydyZXN1bHRzJ11baV1bJ2NvdmVyX2ltYWdlJ10pXHJcbiAgICAgICAgICAgICQoJy5kai1vci1sYWJlbCcpLmh0bWwoXCJKdXN0ZSBwb3VyIGluZm8gYydlc3QgdW4gXCIrcXVlcnlSZXN1bHRbJ3Jlc3VsdHMnXVtpXVsndHlwZSddKVxyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG5cclxuXHJcbn0pO1xyXG4iXSwic291cmNlUm9vdCI6IiJ9