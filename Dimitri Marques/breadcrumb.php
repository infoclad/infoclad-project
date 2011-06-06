<?php

/*
 * Breadcrumb - creates navigational breadcrumbs for websites with a 
 * variety of customization options
 * Copyright (C) 2007 Eric Brisco
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
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * @author Eric Brisco
 * @copyright Copyright (C) 2008 Eric Brisco
 * @license http://www.gnu.org/licenses/gpl.txt GNU Public License
 * 
 * Taking an array of options, generates a breadcrumb
 * 
 * @param array $options an associative array of configuration options
 * @return string the generated breadcrumb
 */
function breadcrumb(array $options = array()) {

    /* 
     * Setup the $options array with default values if none were
     * specified
     */

    if (isset($options['uri'])) $uri = $options['uri'];
    elseif (isset($_SERVER['REQUEST_URI'])) $uri = $_SERVER['REQUEST_URI'];
    else $uri = '';

    if (isset($options['script_path'])) $script_path = $options['script_path'];
    elseif (isset($_SERVER['SCRIPT_NAME'])) $script_path = $_SERVER['SCRIPT_NAME'];
    else $script_path = '';

    if (isset($options['server'])) $server = $options['server'];
    elseif (isset($_SERVER['HTTP_HOST'])) $server = $_SERVER['HTTP_HOST'];
    elseif (isset($_SERVER['SERVER_NAME'])) $server = $_SERVER['SERVER_NAME'];
    else $server = '';

    if (isset($options['protocol'])) $protocol = $options['protocol'];
    elseif (isset($_SERVER['SERVER_PROTOCOL'])) {
        if (stripos($_SERVER['SERVER_PROTOCOL'], 'https') !== false) $protocol = 'https';
        else $protocol = 'http';
    }
    else $protocol = 'http';

    if (isset($options['base'])) $base = $options['base'];
    else $base = '';

    if (isset($options['tpl'])) $tpl = $options['tpl'];
    else $tpl = '<a href="%s">%s</a>';

    if (isset($options['first_tpl'])) $first_tpl = $options['first_tpl'];
    else $first_tpl = $tpl;

    if (isset($options['last_tpl'])) $last_tpl = $options['last_tpl'];
    else $last_tpl = $tpl;

    if (isset($options['separator'])) $separator = $options['separator'];
    else $separator = ' &raquo; ';

    if (isset($options['home_link'])) $home_link = $options['home_link'];
    else $home_link = 'Home';
    
    if (isset($options['rm_file_ext'])) $rm_file_ext = $options['rm_file_ext'];
    else $rm_file_ext = true;
    
    if (isset($options['rm_path_info'])) $rm_path_info = $options['rm_path_info'];
    else $rm_path_info = false;
    
    if (isset($options['rm_query_string'])) $rm_query_string = $options['rm_query_string'];
    else $rm_query_string = false;
    
    if (isset($options['format_callback'])) $format_callback = $options['format_callback'];
    else $format_callback = create_function('$s', 'return str_replace(array(\'-\', \'_\'),\' \',ucwords($s));');
    
    /*
     * Generate the breadcrumb
     */

    $base = trim($base, '/');

    if ($server) $path = $protocol.'://'.$server.($base ? '/'.$base.'/' : '');
    else $path = $base;

    $script_path = trim($script_path, '/');
    $path_parts = explode('/', $script_path);

    $output = '';
    $output .= sprintf($first_tpl, $path, $home_link);

    $i = 0;
    while ($i < count($path_parts)) {
        $path .= '/'.$path_parts[$i];
        if (isset($path_parts[$i + 1])) {
            $output .= $separator.sprintf($tpl, $path, $format_callback(basename($path)));
        }
        else {
            $last_link = basename($path);
            if ($rm_file_ext) {
                $last_link = substr($last_link, 0, strrpos($last_link, '.'));
            }
            if (!$rm_path_info) {
                $start = strlen($script_path) + 1;
                $has_query_string = strpos($uri, '?');
                if ($has_query_string) {
                    $end = $has_query_string - $start;
                    $path .= substr($uri, $start, $end);
                }
                else {
                    $path .= substr($uri, $start);
                }
            }
            if (!$rm_query_string) {
                $path .= '?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '');
            }
            $output .= $separator.sprintf($last_tpl, $path, $format_callback($last_link));
        }
        ++$i;
    }

    return $output;

}
?>

<div id="breadcrumb">
<?php
$format = create_function('$s', 'return $s;');
echo breadcrumb(array('format_callback' => $format));
?>
</div>