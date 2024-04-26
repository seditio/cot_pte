<?php
/**
 * Functions for the PTE Plugin
 *
 * @package pte
 * @author Dmitri Beliavski
 * @copyright (c) 2024 sed.by
 */

defined('COT_CODE') or die('Wrong URL');

function toexpire($t) {
	global $R;
	require_once cot_incfile('pte', 'plug', 'rc');

	$d = floor($t / 86400);
	$h = floor(($t - $d * 86400) / 3600);
	$m = floor(($t - ($d * 86400 + $h * 3600)) / 60);
	$s = $t - ($d * 86400 + $h * 3600 + $m * 60);

	$res = cot_rc('pte_out', array(
		'days' => ($d > 0) ? cot_declension($d, 'Days') . ' ' : '',
		'hours' => ($h < 10 ? '0' : '') . $h,
		'minutes' => ($m < 10 ? '0' : '') . $m,
		'seconds' => ($s < 10 ? '0' : '') . $s
	));
	return $res;
}
