<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=projectstags.main
[END_COT_EXT]
==================== */

/**
* @package projects_toexpire
* @version 1.00
* @author Dmitri Beliavski
* @copyright Copyright (c) 2024 Dmitri Beliavski
* @license BSD
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
