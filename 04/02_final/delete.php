<?php
include_once('utilities.php');
include_once('db/database_utilities.php');
$id = isset( $_GET['id'] ) ? $_GET['id'] : 0;

delete_article( $id );
header('Location: profile.php');