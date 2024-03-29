var base = location.protocol+'//'+location.host;
$(document).ready(function(){
    editor_init('editor');
})

function editor_init(field){
    CKEDITOR.replace(field,{
        toolbar: [
        { name: 'clipboard', items: ['Cut', 'Copy', 'Pate', 'PasteText', '-', 'Undo', 'Redo' ] },
        { name: 'basicstyles', items: ['Bold', 'Italic', 'BulletedList', 'Strike', 'Image', 'Link', 'Unlink', 'Blockquote' ]},
        { name: 'document', items: ['CodeSnippet', 'EmojiPanel', 'Preview', 'Source' ] }
        ]
    });
}