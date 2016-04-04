/*
 * My Custom Styles
 * JS functions
 * @since 2.0
 * @agareginyan
 */


(function(){
    jQuery(document).ready(function($) {

        // Find all textareas on page
        $('textarea').each(function(index, elements) {

            // Change textarea to CodeMirror editor
            var editor = CodeMirror.fromTextArea( elements , {
                                    lineNumbers: true,
                                    firstLineNumber: 1,
                                    matchBrackets: true,
                                    indentUnit: 4,
                                    mode: 'text/css'
            });

            // Refresh CodeMirror editor after 1 second
            setTimeout(function() {
                    editor.refresh();
            },1);
        });
    });
}());