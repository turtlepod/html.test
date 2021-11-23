<?php
// Website config.
$config = [
	'title' => 'HTML.TEST',
	'path'  => dirname( __FILE__ ) . '/',
];

/**
 * Print Data.
 */
function code( $data ){
	?>
<pre>
<?php var_dump( $data ); ?>
</pre>
	<?php
}

// Load index.
require_once( 'parts/index.php' );