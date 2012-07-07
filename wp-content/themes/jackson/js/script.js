( function( $ ) {
	
	$( 'a[href^="#"]' ).click( function( e ) {
		var id = $(this).attr( 'href' );
		var target = $( id ).offset().top;

		$( 'html, body' ).animate( { scrollTop: target }, 900, 'swing' );
		e.preventDefault();
	});
	
})( jQuery );
