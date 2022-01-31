<?php

/*
 *  0 - Режим "prodaction"
 *  1 - Режим "development"
 * */
const DEBUG = 1;

/*
 *  default - Стандартная тема
 * */
const LAYOUT = 'default';

define("ROOT", dirname(__DIR__));

/*
 *  Вспомогающие константы
 * */
const APP = ROOT . "/app";
const CONFIG = ROOT . "/config";
const WWW = ROOT . "/public";
const TMP = ROOT . "/tmp";
const VENDOR = ROOT . "/vendor";
const CORE = VENDOR . "/core";
const LIBS = CORE . "/libs";
const BASE = CORE . "/base";

require VENDOR . '/autoload.php';
require LIBS . '/functions.php';