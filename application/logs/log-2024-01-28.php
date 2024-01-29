<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-01-28 14:48:17 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `admin_role_details`
RIGHT JOIN `privilege_admin_roles` ON `privilege_admin_roles`.`admin_role_id` = `admin_role_details`.`admin_roles_id`
RIGHT JOIN `privilege_actions` ON `privilege_actions`.`privilege_id` = `privilege_admin_roles`.`privilege_id`
LEFT JOIN `privilege_functions` ON `privilege_functions`.`privilege_functions_id` = `privilege_actions`.`privilege_functions_id`
WHERE `admin_role_details`.`admin_id` = '204'
AND `privilege_functions`.`controller_name` = 'settings'
AND `privilege_functions`.`function_name` = 'export'
ERROR - 2024-01-28 14:48:17 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `admin_role_details`
RIGHT JOIN `privilege_admin_roles` ON `privilege_admin_roles`.`admin_role_id` = `admin_role_details`.`admin_roles_id`
RIGHT JOIN `privilege_actions` ON `privilege_actions`.`privilege_id` = `privilege_admin_roles`.`privilege_id`
LEFT JOIN `privilege_functions` ON `privilege_functions`.`privilege_functions_id` = `privilege_actions`.`privilege_functions_id`
WHERE `admin_role_details`.`admin_id` = '204'
AND `privilege_functions`.`controller_name` = 'settings'
AND `privilege_functions`.`function_name` = 'export'
ERROR - 2024-01-28 14:48:17 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `general_settings`
WHERE `general_settings_id` = '1'
ERROR - 2024-01-28 14:48:17 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `admin_role_details`
RIGHT JOIN `privilege_admin_roles` ON `privilege_admin_roles`.`admin_role_id` = `admin_role_details`.`admin_roles_id`
RIGHT JOIN `privilege_actions` ON `privilege_actions`.`privilege_id` = `privilege_admin_roles`.`privilege_id`
LEFT JOIN `privilege_functions` ON `privilege_functions`.`privilege_functions_id` = `privilege_actions`.`privilege_functions_id`
WHERE `admin_role_details`.`admin_id` = '204'
AND `privilege_functions`.`controller_name` = 'settings'
AND `privilege_functions`.`function_name` = 'export'
ERROR - 2024-01-28 14:48:17 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `general_settings`
WHERE `general_settings_id` = '1'
