<?php

if (file_exists($_REQUEST['action'].'/'.$_SERVER['REQUEST_METHOD'].'.php')) {
	require $_REQUEST['action'].'/'.$_SERVER['REQUEST_METHOD'].'.php';
} else {
	die('api error');
}
