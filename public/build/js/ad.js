(self["webpackChunk"] = self["webpackChunk"] || []).push([["js/ad"],{

/***/ "./assets/js/ad.js":
/*!*************************!*\
  !*** ./assets/js/ad.js ***!
  \*************************/
/***/ (() => {

$('#add-image').click(function () {
  // je récupère le numéro des futurs champs que je vais créer
  var index = +$('#widgets-counter').val(); //en cliquant sur le plus, on récupère la valeur widgets-counter
  // le + devant permet de convertir en integer la valeur qu'on reçoit
  // je récupère le prototype des entrées 

  var tmpl = $('#ad_images').data('prototype').replace(/__name__/g, index); // j'injecte ce code au sein de la div 

  $('#ad_images').append(tmpl);
  $('#widgets-counter').val(index + 1); // je gère le boutton supprimer

  handleDeleButtons();
});

function updateCounter() {
  var count = $('#ad_images div.form-group').length;
  $('#widgets-counter').val(count);
}

function handleDeleButtons() {
  $('button[data-action="delete"]').click(function () {
    var target = this.dataset.target;
    $(target).remove();
  });
}

handleDeleButtons();
updateCounter();

/***/ })

},
0,[["./assets/js/ad.js","runtime"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvYWQuanMiXSwibmFtZXMiOlsiJCIsImNsaWNrIiwiaW5kZXgiLCJ2YWwiLCJ0bXBsIiwiZGF0YSIsInJlcGxhY2UiLCJhcHBlbmQiLCJoYW5kbGVEZWxlQnV0dG9ucyIsInVwZGF0ZUNvdW50ZXIiLCJjb3VudCIsImxlbmd0aCIsInRhcmdldCIsImRhdGFzZXQiLCJyZW1vdmUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7O0FBQUlBLENBQUMsQ0FBQyxZQUFELENBQUQsQ0FBZ0JDLEtBQWhCLENBQXNCLFlBQVU7QUFDNUI7QUFDQSxNQUFNQyxLQUFLLEdBQUcsQ0FBQ0YsQ0FBQyxDQUFDLGtCQUFELENBQUQsQ0FBc0JHLEdBQXRCLEVBQWYsQ0FGNEIsQ0FFZ0I7QUFFNUM7QUFFQTs7QUFDQSxNQUFNQyxJQUFJLEdBQUdKLENBQUMsQ0FBQyxZQUFELENBQUQsQ0FBZ0JLLElBQWhCLENBQXFCLFdBQXJCLEVBQWtDQyxPQUFsQyxDQUEwQyxXQUExQyxFQUF1REosS0FBdkQsQ0FBYixDQVA0QixDQVM1Qjs7QUFDQUYsR0FBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQk8sTUFBaEIsQ0FBdUJILElBQXZCO0FBRUFKLEdBQUMsQ0FBQyxrQkFBRCxDQUFELENBQXNCRyxHQUF0QixDQUEwQkQsS0FBSyxHQUFHLENBQWxDLEVBWjRCLENBYzVCOztBQUNBTSxtQkFBaUI7QUFDcEIsQ0FoQkQ7O0FBa0JBLFNBQVNDLGFBQVQsR0FBd0I7QUFDcEIsTUFBTUMsS0FBSyxHQUFHVixDQUFDLENBQUMsMkJBQUQsQ0FBRCxDQUErQlcsTUFBN0M7QUFFQVgsR0FBQyxDQUFDLGtCQUFELENBQUQsQ0FBc0JHLEdBQXRCLENBQTBCTyxLQUExQjtBQUNIOztBQUdELFNBQVNGLGlCQUFULEdBQTRCO0FBQ3hCUixHQUFDLENBQUMsOEJBQUQsQ0FBRCxDQUFrQ0MsS0FBbEMsQ0FBd0MsWUFBVTtBQUM5QyxRQUFNVyxNQUFNLEdBQUcsS0FBS0MsT0FBTCxDQUFhRCxNQUE1QjtBQUVBWixLQUFDLENBQUNZLE1BQUQsQ0FBRCxDQUFVRSxNQUFWO0FBRUgsR0FMRDtBQU1IOztBQUVETixpQkFBaUI7QUFDakJDLGFBQWEsRyIsImZpbGUiOiJqcy9hZC5qcyIsInNvdXJjZXNDb250ZW50IjpbIiAgICAkKCcjYWRkLWltYWdlJykuY2xpY2soZnVuY3Rpb24oKXtcbiAgICAgICAgLy8gamUgcsOpY3Vww6hyZSBsZSBudW3DqXJvIGRlcyBmdXR1cnMgY2hhbXBzIHF1ZSBqZSB2YWlzIGNyw6llclxuICAgICAgICBjb25zdCBpbmRleCA9ICskKCcjd2lkZ2V0cy1jb3VudGVyJykudmFsKCk7IC8vZW4gY2xpcXVhbnQgc3VyIGxlIHBsdXMsIG9uIHLDqWN1cMOocmUgbGEgdmFsZXVyIHdpZGdldHMtY291bnRlclxuXG4gICAgICAgIC8vIGxlICsgZGV2YW50IHBlcm1ldCBkZSBjb252ZXJ0aXIgZW4gaW50ZWdlciBsYSB2YWxldXIgcXUnb24gcmXDp29pdFxuXG4gICAgICAgIC8vIGplIHLDqWN1cMOocmUgbGUgcHJvdG90eXBlIGRlcyBlbnRyw6llcyBcbiAgICAgICAgY29uc3QgdG1wbCA9ICQoJyNhZF9pbWFnZXMnKS5kYXRhKCdwcm90b3R5cGUnKS5yZXBsYWNlKC9fX25hbWVfXy9nLCBpbmRleCk7XG5cbiAgICAgICAgLy8gaidpbmplY3RlIGNlIGNvZGUgYXUgc2VpbiBkZSBsYSBkaXYgXG4gICAgICAgICQoJyNhZF9pbWFnZXMnKS5hcHBlbmQodG1wbCk7XG5cbiAgICAgICAgJCgnI3dpZGdldHMtY291bnRlcicpLnZhbChpbmRleCArIDEpO1xuXG4gICAgICAgIC8vIGplIGfDqHJlIGxlIGJvdXR0b24gc3VwcHJpbWVyXG4gICAgICAgIGhhbmRsZURlbGVCdXR0b25zKCk7XG4gICAgfSk7XG5cbiAgICBmdW5jdGlvbiB1cGRhdGVDb3VudGVyKCl7XG4gICAgICAgIGNvbnN0IGNvdW50ID0gJCgnI2FkX2ltYWdlcyBkaXYuZm9ybS1ncm91cCcpLmxlbmd0aDtcblxuICAgICAgICAkKCcjd2lkZ2V0cy1jb3VudGVyJykudmFsKGNvdW50KTtcbiAgICB9XG5cblxuICAgIGZ1bmN0aW9uIGhhbmRsZURlbGVCdXR0b25zKCl7XG4gICAgICAgICQoJ2J1dHRvbltkYXRhLWFjdGlvbj1cImRlbGV0ZVwiXScpLmNsaWNrKGZ1bmN0aW9uKCl7XG4gICAgICAgICAgICBjb25zdCB0YXJnZXQgPSB0aGlzLmRhdGFzZXQudGFyZ2V0O1xuXG4gICAgICAgICAgICAkKHRhcmdldCkucmVtb3ZlKCk7XG5cbiAgICAgICAgfSlcbiAgICB9XG5cbiAgICBoYW5kbGVEZWxlQnV0dG9ucygpO1xuICAgIHVwZGF0ZUNvdW50ZXIoKTtcbiJdLCJzb3VyY2VSb290IjoiIn0=