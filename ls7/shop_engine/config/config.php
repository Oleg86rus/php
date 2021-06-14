<?php
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');

/* DB config */
define('HOST', 'localhost:3306');
define('USER', 'root');
define('PASS', 'root');
define('DB', 'shop');

//TODO попробуйте сделать эти пути абсолютными
include "../engine/db.php";
include "../engine/auth.php";
include "../engine/controller.php";
include "../engine/feedback.php";
include "../engine/news.php";
include "../engine/render.php";
include "../engine/gallery.php";
include "../engine/catalog.php";
include "../engine/log.php";