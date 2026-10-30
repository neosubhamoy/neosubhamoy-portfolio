<?php
//---single entry point: every page and api request is rewritten here (see vercel.json / dev-router.php)
require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/core/router.php';
?>
