<?php
/**
 * @package Hello_Dolly
 * @version 1.7.2
 */
/*
Plugin Name: Hello Dolly
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Matt Mullenweg
Version: 1.7.2
Author URI: http://ma.tt/
*/

function hello_dolly_get_lyric() {
	/** These are the lyrics to Hello Dolly */
	$lyrics = "I walk a lonely road
	The only one that I have ever known
	Don't know where it goes
	But it's only me, and I walk alone
	I walk this empty street
	On the boulevard of broken dreams
	Where the city sleeps
	And I'm the only one, and I walk alone
	I walk alone, I walk alone
	I walk alone, and I walk a
	My shadow's only one that walks beside me
	My shallow heart's the only thing that's beating
	Sometimes I wish someone out there will find me
	'Til then I walk alone
	Ah ah ah ah ah
	Ah ah ah
	I'm walking down the line
	That divides me somewhere in my mind
	On the border line of the edge
	And where I walk alone
	Read between the lines
	What's fucked up and every thing's all right
	Check my vital signs to know I'm still alive
	And I walk alone
	I walk alone, I walk alone
	I walk alone and I walk a
	My shadow's only one that walks beside me
	My shallow heart's the only thing that's beating
	Sometimes I wish someone out there will find me
	'Til then I walk alone
	Ah ah ah ah ah
	Ah ah
	I walk alone, and I walk a
	I walk this empty street
	On the boulevard of broken dreams
	Where the city sleeps
	And I'm the only one, and I walk a
	My shadow's only one that walks beside me
	My shallow heart's the only thing that's beating
	Sometimes I wish someone out there will find me
	'Til then I walk alone";

	// Here we split it into lines.
	$lyrics = explode( "\n", $lyrics );

	// And then randomly choose a line.
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later.
function hello_dolly() {
	$chosen = hello_dolly_get_lyric();
	$lang   = '';
	if ( 'en_' !== substr( get_user_locale(), 0, 3 ) ) {
		$lang = ' lang="en"';
	}

	printf(
		'<p id="dolly"><span class="screen-reader-text">%s </span><span dir="ltr"%s>%s</span></p>',
		__( 'Quote from Hello Dolly song, by Jerry Herman:' ),
		$lang,
		$chosen
	);
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'admin_notices', 'hello_dolly' );

// We need some CSS to position the paragraph.
function dolly_css() {
	echo "
	<style type='text/css'>
	#dolly {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 12px;
		line-height: 1.6666;
	}
	.rtl #dolly {
		float: left;
	}
	.block-editor-page #dolly {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#dolly,
		.rtl #dolly {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

add_action( 'admin_head', 'dolly_css' );
