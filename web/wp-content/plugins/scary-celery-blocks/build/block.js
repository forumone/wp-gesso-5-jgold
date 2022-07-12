/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./tutorial-block/block.js ***!
  \*********************************/
(function (blocks, element) {
  var el = element.createElement;
  blocks.registerBlockType('gutenberg-examples/example-01-basic', {
    edit: function () {
      return el('p', {}, 'Hello World (from the editor).');
    },
    save: function () {
      return el('p', {}, 'Hola mundo (from the frontend).');
    }
  });
})(window.wp.blocks, window.wp.element);
/******/ })()
;
//# sourceMappingURL=block.js.map