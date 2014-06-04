#
#<?php die("Forbidden."); ?>

2014-06-04 05:58:04 ERROR vmError: exeSortSearchListQuery Table 'mdmjoomla.zwd7x_virtuemart_categories_es_es' doesn't exist SQL=SELECT  c.`virtuemart_category_id`, l.`category_description`, l.`category_name`, c.`ordering`, c.`published`, cx.`category_child_id`, cx.`category_parent_id`, c.`shared`  FROM `zwd7x_virtuemart_categories_es_es` l
				  JOIN `zwd7x_virtuemart_categories` AS c using (`virtuemart_category_id`)
				  LEFT JOIN `zwd7x_virtuemart_category_categories` AS cx
				  ON l.`virtuemart_category_id` = cx.`category_child_id` 
 WHERE  cx.`category_parent_id` = 0

 ORDER BY c.ordering ASC