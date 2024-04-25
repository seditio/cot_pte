<?php
/**
 * Functions for the PTE Plugin
 *
 * @package pte
 * @copyright (c) 2024 sed.by
 */

defined('COT_CODE') or die('Wrong URL');

function toexpire($t) {
	$d = floor($t / 86400);
	$d_string = ($d > 0) ? cot_declension($d, 'Days') . ' ' : '';
	$h = floor(($t - $d * 86400) / 3600);
	$h_full = ($h < 10 ? '0' : '') . $h;
	$m = floor(($t - ($d * 86400 + $h * 3600)) / 60);
	$m_full = ($m < 10 ? '0' : '') . $m;
	$s = $t - ($d * 86400 + $h * 3600 + $m * 60);
	$s_full = ($s < 10 ? '0' : '') . $s;
	return $d_string . $h_full . ':' . $m_full . ':' . $s_full;
}
