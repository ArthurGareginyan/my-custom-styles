/*
 * My Custom Styles
 * CodeMirror editor
 * @since 1.4
 * @agareginyan
 */


var editor = CodeMirror.fromTextArea(document.getElementById('mcstyles_settings[mcstyles-content]'), {
    lineNumbers: true,
    matchBrackets: true,
    mode: 'text/css',
    indentUnit: 4
});

setTimeout(function() {
    editor.refresh();
},1);