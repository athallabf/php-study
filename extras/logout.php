<?php

session_start();

session_destroy();

header('Location: /php-learn/13_sessions.php');
