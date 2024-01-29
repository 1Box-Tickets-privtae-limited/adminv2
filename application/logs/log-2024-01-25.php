<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-01-25 07:23:25 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `admin_role_details`
RIGHT JOIN `privilege_admin_roles` ON `privilege_admin_roles`.`admin_role_id` = `admin_role_details`.`admin_roles_id`
RIGHT JOIN `privilege_actions` ON `privilege_actions`.`privilege_id` = `privilege_admin_roles`.`privilege_id`
LEFT JOIN `privilege_functions` ON `privilege_functions`.`privilege_functions_id` = `privilege_actions`.`privilege_functions_id`
WHERE `admin_role_details`.`admin_id` = '204'
AND `privilege_functions`.`controller_name` = 'game'
AND `privilege_functions`.`function_name` = 'pending_orders'
ERROR - 2024-01-25 09:44:24 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `general_settings`
WHERE `general_settings_id` = '1'
ERROR - 2024-01-25 09:44:24 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `general_settings`
WHERE `general_settings_id` = '1'
ERROR - 2024-01-25 09:54:33 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `general_settings`
WHERE `general_settings_id` = '1'
ERROR - 2024-01-25 09:54:33 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `general_settings`
WHERE `general_settings_id` = '1'
ERROR - 2024-01-25 09:54:33 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `admin_role_details`
RIGHT JOIN `privilege_admin_roles` ON `privilege_admin_roles`.`admin_role_id` = `admin_role_details`.`admin_roles_id`
RIGHT JOIN `privilege_actions` ON `privilege_actions`.`privilege_id` = `privilege_admin_roles`.`privilege_id`
LEFT JOIN `privilege_functions` ON `privilege_functions`.`privilege_functions_id` = `privilege_actions`.`privilege_functions_id`
WHERE `admin_role_details`.`admin_id` = '204'
AND `privilege_functions`.`controller_name` = 'tickets'
AND `privilege_functions`.`function_name` = 'index'
ERROR - 2024-01-25 09:54:33 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `general_settings`
WHERE `general_settings_id` = '1'
ERROR - 2024-01-25 09:54:33 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `general_settings`
WHERE `general_settings_id` = '1'
ERROR - 2024-01-25 09:54:33 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `general_settings`
WHERE `general_settings_id` = '1'
ERROR - 2024-01-25 11:00:11 --> Severity: error --> Exception: syntax error, unexpected integer "7", expecting ")" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6644
ERROR - 2024-01-25 11:00:13 --> Severity: error --> Exception: syntax error, unexpected integer "7", expecting ")" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6644
ERROR - 2024-01-25 11:00:43 --> Severity: error --> Exception: syntax error, unexpected integer "7", expecting ")" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6644
ERROR - 2024-01-25 11:01:00 --> Severity: error --> Exception: syntax error, unexpected integer "7", expecting ")" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6644
ERROR - 2024-01-25 11:01:02 --> Severity: error --> Exception: syntax error, unexpected integer "7", expecting ")" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6644
ERROR - 2024-01-25 11:01:18 --> Severity: error --> Exception: syntax error, unexpected integer "7", expecting ")" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6644
ERROR - 2024-01-25 11:01:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '7'
AND `booking_tickets`.`tournament_id` = '2'
GROUP BY `booking_global`.`bg_id`' at line 1 - Invalid query: SELECT `booking_global`.*, `booking_billing_address`.`first_name`, `booking_billing_address`.`last_name`, `booking_billing_address`.`email`, `booking_tickets`.`match_name`, `booking_tickets`.*, `register`.`first_name` as `buyer_first_name`, `register`.`last_name` as `buyer_last_name`, `register`.`email` as `buyer_email`, `register`.`code` as `buyer_code`, `register`.`dialing_code` as `buyer_dialing_code`, `register`.`mobile` as `buyer_mobile`, `countries`.`sortname`, `booking_global`.`created_at` as `cart_date`, `admin_details`.`admin_name` as `seller_first_name`, `admin_details`.`admin_last_name` as `seller_last_name`, 'partner.admin_name as partner_first_name, `partner`.`admin_last_name` as `partner_last_name`, `affiliate`.`admin_name` as `affiliate_first_name`, `affiliate`.`admin_last_name` as `affiliate_last_name`
FROM `booking_global`
JOIN `booking_billing_address` ON `booking_billing_address`.`booking_id` = `booking_global`.`bg_id`
JOIN `booking_tickets` ON `booking_tickets`.`booking_id` = `booking_global`.`bg_id`
LEFT JOIN `admin_details` ON `admin_details`.`admin_id`=`booking_global`.`seller_id`
LEFT JOIN `admin_details` as `partner` ON `partner`.`admin_id`=`booking_global`.`partner_id`
LEFT JOIN `admin_details` as `affiliate` ON `affiliate`.`admin_id`=`booking_global`.`affiliate_id`
JOIN `register` ON `register`.`id` = `booking_global`.`user_id`
JOIN `countries` ON `countries`.`id` = `register`.`country`
LEFT JOIN `match_info` ON `match_info`.`m_id` = `booking_tickets`.`match_id`
WHERE `booking_status` = '7'
AND `booking_tickets`.`tournament_id` = '2'
GROUP BY `booking_global`.`bg_id`
ERROR - 2024-01-25 11:06:13 --> Severity: error --> Exception: syntax error, unexpected token "," /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6675
ERROR - 2024-01-25 11:06:15 --> Severity: error --> Exception: syntax error, unexpected token "," /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6675
ERROR - 2024-01-25 11:06:45 --> Severity: error --> Exception: syntax error, unexpected token "," /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6675
ERROR - 2024-01-25 11:06:46 --> Severity: error --> Exception: syntax error, unexpected token "," /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6675
ERROR - 2024-01-25 11:06:56 --> Severity: error --> Exception: syntax error, unexpected token "," /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6675
ERROR - 2024-01-25 11:07:20 --> Severity: error --> Exception: syntax error, unexpected token "," /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6675
ERROR - 2024-01-25 11:07:35 --> Severity: error --> Exception: fputcsv(): Argument #2 ($fields) must be of type array, null given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6665
ERROR - 2024-01-25 11:09:21 --> Severity: error --> Exception: syntax error, unexpected token "," /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6675
ERROR - 2024-01-25 11:13:34 --> Severity: error --> Exception: syntax error, unexpected token "," /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6676
ERROR - 2024-01-25 11:13:36 --> Severity: error --> Exception: syntax error, unexpected token "," /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6676
ERROR - 2024-01-25 11:13:45 --> Severity: error --> Exception: syntax error, unexpected token "," /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6676
ERROR - 2024-01-25 11:13:47 --> Severity: error --> Exception: syntax error, unexpected token "," /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6676
ERROR - 2024-01-25 11:13:57 --> Severity: error --> Exception: syntax error, unexpected token "," /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6676
ERROR - 2024-01-25 11:13:59 --> Severity: error --> Exception: syntax error, unexpected token "," /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6676
ERROR - 2024-01-25 11:17:53 --> Severity: error --> Exception: syntax error, unexpected token "," /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6676
ERROR - 2024-01-25 11:36:26 --> Severity: error --> Exception: syntax error, unexpected identifier "fputcsv" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6688
ERROR - 2024-01-25 11:36:39 --> Severity: error --> Exception: fputcsv(): Argument #2 ($fields) must be of type array, string given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6688
ERROR - 2024-01-25 11:36:42 --> Severity: error --> Exception: fputcsv(): Argument #2 ($fields) must be of type array, string given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6688
ERROR - 2024-01-25 11:36:50 --> Severity: error --> Exception: fputcsv(): Argument #2 ($fields) must be of type array, string given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6688
ERROR - 2024-01-25 11:37:03 --> Severity: error --> Exception: fputcsv(): Argument #2 ($fields) must be of type array, string given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6688
ERROR - 2024-01-25 11:45:41 --> Severity: error --> Exception: syntax error, unexpected variable "$this" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6574
ERROR - 2024-01-25 11:46:01 --> Query error: Not unique table/alias: 'match_info' - Invalid query: SELECT `booking_global`.*, `booking_billing_address`.`first_name`, `booking_billing_address`.`last_name`, `booking_billing_address`.`email`, `booking_tickets`.`match_name`, `booking_tickets`.*, `register`.`first_name` as `buyer_first_name`, `register`.`last_name` as `buyer_last_name`, `register`.`email` as `buyer_email`, `register`.`code` as `buyer_code`, `register`.`dialing_code` as `buyer_dialing_code`, `register`.`mobile` as `buyer_mobile`, `booking_global`.`created_at` as `cart_date`, `admin_details`.`admin_name` as `seller_first_name`, `admin_details`.`admin_last_name` as `seller_last_name`, `partner`.`admin_name` as `partner_first_name`, `partner`.`admin_last_name` as `partner_last_name`, `affiliate`.`admin_name` as `affiliate_first_name`, `affiliate`.`admin_last_name` as `affiliate_last_name`, `site_settings`.`site_value` as `store_name`, `ticket_details_lang`.`ticket_name` as `listing_notes`
FROM `booking_global`
JOIN `booking_billing_address` ON `booking_billing_address`.`booking_id` = `booking_global`.`bg_id`
JOIN `booking_tickets` ON `booking_tickets`.`booking_id` = `booking_global`.`bg_id`
LEFT JOIN `admin_details` ON `admin_details`.`admin_id`=`booking_global`.`seller_id`
LEFT JOIN `admin_details` as `partner` ON `partner`.`admin_id`=`booking_global`.`partner_id`
LEFT JOIN `admin_details` as `affiliate` ON `affiliate`.`admin_id`=`booking_global`.`affiliate_id`
LEFT JOIN `site_settings` ON `site_settings`.`store_id`=`booking_global`.`store_id` AND `site_settings`.`site_name`="SITE_SHORT_DOMAIN"
JOIN `register` ON `register`.`id` = `booking_global`.`user_id`
LEFT JOIN `match_info` ON `match_info`.`m_id` = `booking_tickets`.`match_id`
LEFT JOIN `match_info` ON `match_info`.`m_id` = `booking_tickets`.`listing_note`
LEFT JOIN `ticket_details_lang` ON `ticket_details_lang`.`ticket_details_id` = `booking_tickets`.`listing_note` AND `language` = "en"
WHERE `booking_status` = '7'
AND `booking_tickets`.`tournament_id` = '2'
AND `booking_global`.`created_at` >= '2023-10-26 00:00'
AND `booking_global`.`created_at` <= '2024-01-25 23:59'
GROUP BY `booking_global`.`bg_id`
ERROR - 2024-01-25 11:46:16 --> Query error: Column 'language' in on clause is ambiguous - Invalid query: SELECT `booking_global`.*, `booking_billing_address`.`first_name`, `booking_billing_address`.`last_name`, `booking_billing_address`.`email`, `booking_tickets`.`match_name`, `booking_tickets`.*, `register`.`first_name` as `buyer_first_name`, `register`.`last_name` as `buyer_last_name`, `register`.`email` as `buyer_email`, `register`.`code` as `buyer_code`, `register`.`dialing_code` as `buyer_dialing_code`, `register`.`mobile` as `buyer_mobile`, `booking_global`.`created_at` as `cart_date`, `admin_details`.`admin_name` as `seller_first_name`, `admin_details`.`admin_last_name` as `seller_last_name`, `partner`.`admin_name` as `partner_first_name`, `partner`.`admin_last_name` as `partner_last_name`, `affiliate`.`admin_name` as `affiliate_first_name`, `affiliate`.`admin_last_name` as `affiliate_last_name`, `site_settings`.`site_value` as `store_name`, `ticket_details_lang`.`ticket_name` as `listing_notes`
FROM `booking_global`
JOIN `booking_billing_address` ON `booking_billing_address`.`booking_id` = `booking_global`.`bg_id`
JOIN `booking_tickets` ON `booking_tickets`.`booking_id` = `booking_global`.`bg_id`
LEFT JOIN `admin_details` ON `admin_details`.`admin_id`=`booking_global`.`seller_id`
LEFT JOIN `admin_details` as `partner` ON `partner`.`admin_id`=`booking_global`.`partner_id`
LEFT JOIN `admin_details` as `affiliate` ON `affiliate`.`admin_id`=`booking_global`.`affiliate_id`
LEFT JOIN `site_settings` ON `site_settings`.`store_id`=`booking_global`.`store_id` AND `site_settings`.`site_name`="SITE_SHORT_DOMAIN"
JOIN `register` ON `register`.`id` = `booking_global`.`user_id`
LEFT JOIN `match_info` ON `match_info`.`m_id` = `booking_tickets`.`match_id`
LEFT JOIN `ticket_details_lang` ON `ticket_details_lang`.`ticket_details_id` = `booking_tickets`.`listing_note` AND `language` = "en"
WHERE `booking_status` = '7'
AND `booking_tickets`.`tournament_id` = '2'
AND `booking_global`.`created_at` >= '2023-10-26 00:00'
AND `booking_global`.`created_at` <= '2024-01-25 23:59'
GROUP BY `booking_global`.`bg_id`
ERROR - 2024-01-25 11:58:54 --> Severity: error --> Exception: Unclosed '{' on line 7 /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 7442
ERROR - 2024-01-25 11:59:52 --> Severity: error --> Exception: Call to undefined function 07735795130() /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6694
ERROR - 2024-01-25 11:59:54 --> Severity: error --> Exception: Call to undefined function 07735795130() /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6694
ERROR - 2024-01-25 12:06:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `ticket_details_lang`
WHERE `language` = 'en'
AND `ticket_details_id` IN...' at line 2 - Invalid query: SELECT GROUP_CONCAT(DISTINCT ticket_name separator
FROM `ticket_details_lang`
WHERE `language` = 'en'
AND `ticket_details_id` IN('28')
GROUP BY `ticket_details_id`
ERROR - 2024-01-25 12:08:27 --> Severity: error --> Exception: syntax error, unexpected identifier "fseek" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Settings.php 6720
ERROR - 2024-01-25 13:13:44 --> Severity: error --> Exception: fwrite(): Argument #2 ($data) must be of type string, array given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Tixstock.php 1359
ERROR - 2024-01-25 13:14:31 --> Severity: error --> Exception: fwrite(): Argument #2 ($data) must be of type string, array given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Tixstock.php 1359
ERROR - 2024-01-25 13:16:00 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'EFL CUP'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2024-01-25 13:16:00 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `general_settings`
WHERE `general_settings_id` = '1'
ERROR - 2024-01-25 13:16:00 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `general_settings`
WHERE `general_settings_id` = '1'
ERROR - 2024-01-25 13:16:00 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `general_settings`
WHERE `general_settings_id` = '1'
ERROR - 2024-01-25 14:08:55 --> Query error: Column 'ticket_type' cannot be null - Invalid query: INSERT INTO `sell_tickets` (`tixstock_id`, `ticket_type`, `ticketid`, `ticket_group_id`, `user_id`, `match_id`, `event_flag`, `ticket_category`, `ticket_block`, `home_town`, `row`, `quantity`, `price_type`, `price`, `listing_note`, `split`, `sell_date`, `status`, `add_by`, `store_id`, `source_type`, `general_admission`, `seat`, `added_from`, `ticket_updated_date`) VALUES ('01hktppg3nw197mbz7mr3s8hmj', NULL, '9707_521857', 802344, 223, '3713', 'E', '26', '38955', 0, 'LFC', 4, 'EUR', '1030.00', '', 5, '2024-01-25 02:08:55', 1, 223, 1, 'tixstock', 'false', '', 'tixstockadmin', '2024-01-25 02:08:55')
ERROR - 2024-01-25 14:23:31 --> Query error: Column 'ticket_type' cannot be null - Invalid query: INSERT INTO `sell_tickets` (`tixstock_id`, `ticket_type`, `ticketid`, `ticket_group_id`, `user_id`, `match_id`, `event_flag`, `ticket_category`, `ticket_block`, `home_town`, `row`, `quantity`, `price_type`, `price`, `listing_note`, `split`, `sell_date`, `status`, `add_by`, `store_id`, `source_type`, `general_admission`, `seat`, `added_from`, `ticket_updated_date`) VALUES ('01hktppg3nw197mbz7mr3s8hmj', NULL, '8774_273983', 358553, 223, '3713', 'E', '26', '38955', 0, 'LFC', 4, 'EUR', '1030.00', '', 5, '2024-01-25 02:23:31', 1, 223, 1, 'tixstock', 'false', '', 'tixstockadmin', '2024-01-25 02:23:31')
ERROR - 2024-01-25 15:32:06 --> Query error: Column 'ticket_type' cannot be null - Invalid query: INSERT INTO `sell_tickets` (`tixstock_id`, `ticket_type`, `ticketid`, `ticket_group_id`, `user_id`, `match_id`, `event_flag`, `ticket_category`, `ticket_block`, `home_town`, `row`, `quantity`, `price_type`, `price`, `listing_note`, `split`, `sell_date`, `status`, `add_by`, `store_id`, `source_type`, `general_admission`, `seat`, `added_from`, `ticket_updated_date`) VALUES ('01hktppg3nw197mbz7mr3s8hmj', NULL, '6108_977840', 634961, 223, '3713', 'E', '26', '38955', 0, 'LFC', 4, 'EUR', '1030.00', '', 5, '2024-01-25 03:32:06', 1, 223, 1, 'tixstock', 'false', '', 'tixstockadmin', '2024-01-25 03:32:06')
