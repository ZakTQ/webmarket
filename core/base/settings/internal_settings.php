<?php
//настройки глобального уровня. пример: пути к шаблонам или безопасности.
defined('VG_ACCESS' or die ('Access denied'));

const TEMPLATE = 'templates/default/';
const ADMIN_TEMPLATES = 'core/admin/views/';

const COOKIE_VERSION = '1.0.0';
const CRYPT_KEY = '';
const COOKIE_TIME = 60;
const BLOCK_TIME = 3;

//константы для постраничной навигации макс. мин.
const QTY = 8; //колличество товаров
const QTY_LINKS = 3; //колличество ссылок

//массив с css и js
const ADMIN_CSS_JS = [
    'styles' => [],
    'scripts' => [],
];

