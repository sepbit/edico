<?php
/**
 * Vitortec.com Codiad EditorConfig
 *
 * PHP Version 7.0
 *
 * @author    Vitor Guia <vitor.guia@vitortec.com>
 * @copyright 2011-2018 Vitortec.com
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version   GIT: <git_id>
 * @see       https://devs.vitortec.com/codiad-editorconfig Documentation of Codiad EditorConfig
 */

$path = $_REQUEST['p'];

if (!file_exists($_REQUEST['p'])) {
    include '../../config.php';
    $path = WORKSPACE .'/'. $_REQUEST['p'];
}

exec('editorconfig '. $path, $outputArray);

foreach ($outputArray as $value) {
    preg_match("/indent_style=(\w+)/", $value, $outputArray);
    if ($outputArray) {
        $config['indentStyle'] = $outputArray[1];
    }

    preg_match("/indent_size=(\d+)/", $value, $outputArray);
    if ($outputArray) {
        $config['indentSize'] = (int) $outputArray[1];
    }
}

echo json_encode($config);
