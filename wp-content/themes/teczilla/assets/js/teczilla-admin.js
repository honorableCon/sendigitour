( function( $ ){
    $( document ).ready( function(){
      $( '.teczilla-btn-get-started' ).on( 'click', function( e ) {
          e.preventDefault();
          $( this ).html( 'Processing.. Please wait' ).addClass( 'updating-message' );
          $.post( teczilla_ajax_object.ajax_url, { 'action' : 'install_act_plugin' }, function( response ){
              location.href = 'customize.php?teczilla_notice=dismiss-get-started';
          } );
      } );
    } );

}( jQuery ) )