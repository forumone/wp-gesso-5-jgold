<?php
$director = get_field( 'director', $post_id );
$release_year = get_field( 'release_year', $post_id );

if ( $director || $release_year ) {
	echo '<dl class="film-info">';

	if ( $director ) {
		echo '<dt>' . __('Director') . '</dt>';
		echo '<dd>' . $director . '</dd>';
	}

	if ( $release_year ) {
		echo '<dt>' . __('Release year') . '</dt>';
		echo '<dd>' . $release_year . '</dd>';
	}

	echo '</dl>';
}
