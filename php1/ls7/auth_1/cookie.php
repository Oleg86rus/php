<?php
setcookie('login', 'admin', time() + 3600, '/');

var_dump($_COOKIE);