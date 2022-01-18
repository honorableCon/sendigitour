jQuery(document).ready(function($){
  /*Drag and drop to change order*/
  $(".avadanta-repeater-field-control-wrap").sortable({
    orientation: "vertical",
    update: function( event, ui ) {
      avadanta_refresh_repeater_values();
    }
  });
    /**
     * Section re-order
    */
    $('#tm-sections-reorder').sortable({
        cursor: 'move',
        update: function(event, ui) {
            var section_ids = '';
            $('#tm-sections-reorder li').css('cursor','default').each(function() {
                var section_id = jQuery(this).attr( 'data-section-name' );
                section_ids = section_ids + section_id + ',';
            });
            $('#shortui-order').val(section_ids);
            $('#shortui-order').trigger('change');
        }
    });


    //Scroll to section
    $('body').on('click', '#sub-accordion-panel-avadanta_homepage_settings .control-subsection .accordion-section-title', function(event) {
        var section_id = $(this).parent('.control-subsection').attr('id');
        scrollToSection( section_id );
    });

});