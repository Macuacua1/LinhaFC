/**
 * Created by armandofm on 6/22/17.
 */
$(document).ready( function () {
    $(".button-collapse").sideNav();

    $('select2').material_select();

    $('select2').on('contentChanged', function() {
        // re-initialize (update)
        $(this).material_select();
    });
})
