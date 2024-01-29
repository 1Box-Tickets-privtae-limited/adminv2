<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-01-08 08:19:13 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, null given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/views/zenith/users/user_permissions.php 98
ERROR - 2024-01-08 08:21:14 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, null given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/views/zenith/users/user_permissions.php 98
ERROR - 2024-01-08 08:22:23 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, null given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/views/zenith/users/user_permissions.php 98
ERROR - 2024-01-08 12:04:52 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `admin_role_details`
RIGHT JOIN `privilege_admin_roles` ON `privilege_admin_roles`.`admin_role_id` = `admin_role_details`.`admin_roles_id`
RIGHT JOIN `privilege_actions` ON `privilege_actions`.`privilege_id` = `privilege_admin_roles`.`privilege_id`
LEFT JOIN `privilege_functions` ON `privilege_functions`.`privilege_functions_id` = `privilege_actions`.`privilege_functions_id`
WHERE `admin_role_details`.`admin_id` = '17'
AND `privilege_functions`.`controller_name` = 'settings'
AND `privilege_functions`.`function_name` = 'teams'
