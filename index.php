<?php

define('VG_ACCESS',bool true);

//в каком формате обрабатывать заголовки сайту
header('Content-Type:text/html; charset=utf-8');

//начало сессии
session_start();

require_once('config.php');
require_once('core/base/settings/internal_settings.php');