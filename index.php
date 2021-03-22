<?php declare(strict_types=1);
try {
	require_once __DIR__ . '/src/bootstrap.php';
} catch (\Exception $exception) {
	die(sprintf('<h2>Fatal error in bootstrap</h2><p>%s</p>', $exception->getMessage()));
}

?>
	<h1>Business card</h1>
	<img src="generate.php">
<?php
