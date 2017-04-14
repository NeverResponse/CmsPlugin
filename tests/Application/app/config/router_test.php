<?php
/*
 * This file is part of the Lakion package.
 *
 * (c) Lakion
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (is_file($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.$_SERVER['SCRIPT_NAME'])) {
    return false;
}

$_SERVER = array_merge($_SERVER, $_ENV);
$_SERVER['SCRIPT_FILENAME'] = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'app_test.php';

require 'app_test.php';
