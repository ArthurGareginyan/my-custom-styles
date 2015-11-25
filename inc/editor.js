/*
 * My Custom Styles
 * CodeMirror editor
 * @since 1.4
 * @agareginyan
 */


// Change editor to CodeMirror
var editor = CodeMirror.fromTextArea(document.getElementById('mcstyles_settings[mcstyles-content]'), {
    lineNumbers: true,
    matchBrackets: true,
    mode: 'text/css',
    indentUnit: 4
});

// Refresh CodeMirror editor after 1 second
setTimeout(function() {
    editor.refresh();
},1);
