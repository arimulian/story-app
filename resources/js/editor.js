import EditorJS from '@editorjs/editorjs';
import Header from '@editorjs/header';
import List from '@editorjs/list';

const editor = new EditorJS({
    /**
     * id of Element that should contain Editor instance
     */
    holder: 'editors',
    placeholder: 'Let`s write an awesome story!',
    tools: {
        header: {
            class: Header,
            inlineToolbar: true
        },
        list: {
            class: List,
            inlineToolbar: true
        }
    },
});
