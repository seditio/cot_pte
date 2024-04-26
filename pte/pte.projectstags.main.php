<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=projectstags.main
[END_COT_EXT]
==================== */

/**
 * @package pte
 * @author Dmitri Beliavski
 * @copyright (c) 2024 sed.by
 */

defined('COT_CODE') or die('Wrong URL.');

require_once cot_incfile('pte', 'plug');
require_once cot_langfile('pte', 'plug');

$updated = ($item_data['item_update']) ? $item_data['item_update'] : $item_data['item_date'];
$till = $updated + $item_data['item_expired'];
$secs = $till - $sys['now'];

$temp_array["PTE_UPDATED"] = $updated;
$temp_array["PTE_VALID_TILL"] = $till;
$temp_array["PTE_TO_EXPIRE"] = ($secs > 0) ? toexpire($secs) : $L['pte_project_expired'];
