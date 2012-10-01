( function( $ ) {
	
	var open = false;
	
	/** prevent webkit-transition on page load
	 *------------------------------------------------------------------*/
	$( document ).ready( function() {
		$( '#footer' ).addClass( 'active' );
	});
	
	/** click on footer
	 *------------------------------------------------------------------*/
	$( '#footer' ).on( 'click', function() {	
		if( !open ) {
			$( this ).css( { 'bottom': 0 } );
		} else {
			$( this ).css( { 'bottom': -41 } );
		}
		open = !open;
	});
	
	/** hover, click, double click - all about events
	 *------------------------------------------------------------------*/
	$( '#content_wrapper' ).on( 'mousedown', function( event ) { 
		if( event.which === 3 ) { 
		//	alert( "rightclick" );
		} 
	});
	
	/** we want it smooth...
	 *------------------------------------------------------------------*/
	$( 'a[href^="#"]' ).click( function( e ) {
		var id = $(this).attr( 'href' );
		var target = $( id ).offset().top;

		$( 'html, body' ).animate( { scrollTop: target }, 900, 'swing' );
		e.preventDefault();
	});
	
	/** shadowbox
	*------------------------------------------------------------------*/
	Shadowbox.init();
	
})( jQuery );
