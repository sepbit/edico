<?php
/**
 * Edico - EDItorCOnfig for COdiad
 * Copyright (C) 2018-2019  Sepbit
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/** Get the project directory */
$path = $_REQUEST['p'];

if (!file_exists($_REQUEST['p'])) {
    include_once '../../common.php';
    checkSession();
    $path = BASE_PATH .'/workspace/'. $_REQUEST['p'];
}

/** Execute EditorConfig */
exec('editorconfig '. $path, $outputArray);

/** Analyze the result */
foreach ($outputArray as $value) {
    /** Get indentStyle */
    preg_match('/indent_style=(\w+)/', $value, $outputArray);
    if ($outputArray) {
        $config['indentStyle'] = $outputArray[1];
    }

    /** Get tabWidth */
    preg_match('/tab_width=(\d+)/', $value, $outputArray);
    if ($outputArray) {
        $config['tabWidth'] = (int) $outputArray[1];
    }
}

/** Build JSON */
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Status: 200 OK', true, 200);
echo json_encode($config);
