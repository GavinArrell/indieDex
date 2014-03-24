<?php
require_once 'core.inc.php';
session_destroy();
header('Location: index.php');
?>