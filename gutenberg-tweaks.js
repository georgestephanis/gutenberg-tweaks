
wp.blocks.registerBlockType( 'georgestephanis/test-block', {
	title: gutenbergTweaks.strings.Carrot,
	icon: 'carrot',
	category: 'common',

	attributes: {
		category: 'foo'
	},

	edit: function( props ) {
		return React.createElement( 'img', {
			src: gutenbergTweaks.plugin_url + 'carrot.png',
			height: 272,
			width: 478
		} );
	},

	save: function( props ) {
		return React.createElement( 'img', {
			src: gutenbergTweaks.plugin_url + 'carrot.png',
			height: 272,
			width: 478
		} );
	}
} );
