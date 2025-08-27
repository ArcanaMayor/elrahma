import './bootstrap';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

document.addEventListener('DOMContentLoaded', function () {
    const editorElement = document.querySelector('#ckeditor-classic');
    if (editorElement) {
        ClassicEditor
            .create(editorElement)
            .then(editor => {
                console.log('CKEditor aktif:', editor);
            })
            .catch(error => {
                console.error(error);
            });
    }
});
