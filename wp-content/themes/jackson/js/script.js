( function( $ ) {
	
	/** prevent webkit-transition on page load
	 *------------------------------------------------------------------*/
	$( document ).ready( function() {
		$( '#footer' ).addClass( 'active' );	
	});
	
	/** hover, click, double click - all about events
	 *------------------------------------------------------------------*/

	
	/** we want it smooth...
	 *------------------------------------------------------------------*/
	$( 'a[href^="#"]' ).click( function( e ) {
		var id = $(this).attr( 'href' );
		var target = $( id ).offset().top;

		$( 'html, body' ).animate( { scrollTop: target }, 900, 'swing' );
		e.preventDefault();
	});
	
	
	
})( jQuery );
