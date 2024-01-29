<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-12-27 11:17:20 --> Query error: Unknown column 'api_key_settings.seller_id' in 'on clause' - Invalid query: SELECT `api_key_settings`.*, `admin_details`.`admin_name`, `admin_details`.`admin_last_name`, `admin_details`.`admin_email`, `admin_details`.`company_name`, `seller_details`.`admin_name` AS `seller_name`, `seller_details`.`admin_last_name` AS `seller_last_name`
FROM `api_key_settings`
LEFT JOIN `admin_details` as `seller_details` ON `seller_details`.`admin_id` = `api_key_settings`.`seller_id`
LEFT JOIN `admin_details` ON `admin_details`.`admin_id` = `api_key_settings`.`partner_id`
ORDER BY `api_key_settings`.`id` DESC
ERROR - 2023-12-27 11:17:33 --> Query error: Unknown column 'api_key_settings.seller_id' in 'on clause' - Invalid query: SELECT `api_key_settings`.*, `admin_details`.`admin_name`, `admin_details`.`admin_last_name`, `admin_details`.`admin_email`, `admin_details`.`company_name`, `seller_details`.`admin_name` AS `seller_name`, `seller_details`.`admin_last_name` AS `seller_last_name`
FROM `api_key_settings`
LEFT JOIN `admin_details` as `seller_details` ON `seller_details`.`admin_id` = `api_key_settings`.`seller_id`
LEFT JOIN `admin_details` ON `admin_details`.`admin_id` = `api_key_settings`.`partner_id`
ORDER BY `api_key_settings`.`id` DESC
