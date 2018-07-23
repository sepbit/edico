<?php
/**
 * Edico - EDItorCOnfig for COdiad
 * Copyright (C) 2018  Vitortec.com
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
 *
 * PHP version 7.0
 *
 * @author    Vitor Guia <vitor.guia@vitortec.com>
 * @copyright 2018 Vitortec.com
 * @license   http://www.gnu.org/licenses GPL-3.0-or-later
 * @see       https://github.com/vitorteccom/edico Repository of Edico
 */

$path = $_REQUEST['p'];

if (!file_exists($_REQUEST['p'])) {
    include_once '../../common.php';
    checkSession();
    $path = BASE_PATH .'/workspace/'. $_REQUEST['p'];
}

exec('editorconfig '. $path, $outputArray);

foreach ($outputArray as $value) {
    preg_match("/indent_style=(\w+)/", $value, $outputArray);
    if ($outputArray) {
        $config['indentStyle'] = $outputArray[1];
    }

    preg_match("/tab_width=(\d+)/", $value, $outputArray);
    if ($outputArray) {
        $config['tabWidth'] = (int) $outputArray[1];
    }
}

echo json_encode($config);
