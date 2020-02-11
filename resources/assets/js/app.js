/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


(function() {
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
        theme: 'bootstrap',
        width: '100%',
    });

})();
