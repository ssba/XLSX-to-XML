<?php

require_once "vendor/autoload.php";

include "config.php";

$xlsxDir = opendir(XLSX_PATH);
while (false !== ($file = readdir($xlsxDir))) {
    if (preg_match('/^.+\.xlsx/i', $file)) {
        Helpers\Converter::convert( XLSX_PATH . $file);
    }
}