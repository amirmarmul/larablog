/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


/**
 * Load all vendor script
 */
(function() {
    /**
     * Ajax CSRF Token
     */
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name=csrf-token]').attr('content'),
        }
    });

    /**
     * Initialize datatable
     */
    $('.datatable').DataTable({
        processing: true,
        responsive: true,
        deferRender: true,
    });

    /**
     * Initialize select2
     */
    $('.select2').select2({
        theme: 'bootstrap4',
        width: 'style',
    });

    /**
     * 
     */
    $('.editor').trumbowyg({
        autogrow: true,
        svgPath: '/images/trumbowyg.svg',
        btnsDef: {
            image: {
                dropdown: ['insertImage', 'upload'],
                ico: 'insertImage'
            }
        },
        btns: [
            ['viewHTML'],
            ['formatting'],
            ['strong', 'em', 'del'],
            ['superscript', 'subscript'],
            ['link'],
            ['image'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen']
        ],
        plugins: {
            upload: {
                serverPath: '/api/trumbowyg',
                urlPropertyName: 'data',
                fileFieldName: 'file',
            }
        }
    });

})();
