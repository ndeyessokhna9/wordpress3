( function( api ) {

	// Extends our custom "modular-lite" section.
	api.sectionConstructor['modular-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );