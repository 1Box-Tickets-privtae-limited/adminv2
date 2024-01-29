<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-12-12 05:33:01 --> Severity: error --> Exception: syntax error, unexpected token "public" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Tixstockcms.php 183
ERROR - 2023-12-12 06:05:03 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2023-12-12 06:07:29 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2023-12-12 06:10:33 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2023-12-12 06:12:36 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2023-12-12 06:16:40 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2023-12-12 06:40:52 --> Query error: Column 'ticket_type' cannot be null - Invalid query: INSERT INTO `sell_tickets` (`tixstock_id`, `ticket_type`, `ticketid`, `ticket_group_id`, `user_id`, `match_id`, `event_flag`, `ticket_category`, `ticket_block`, `home_town`, `row`, `quantity`, `price_type`, `price`, `listing_note`, `split`, `sell_date`, `add_by`, `store_id`, `source_type`, `general_admission`, `seat`, `ticket_updated_date`, `status`) VALUES ('01hgzgw8q7et189xfa168wqna3', NULL, '5653_508764', 586840, 223, '2263', 'E', '150', '34895', 0, '', 4, 'GBP', '143.17', '', 5, '2023-12-12 06:40:52', 223, 1, 'tixstock', 'false', '', '2023-12-12 06:40:52', 1)
ERROR - 2023-12-12 06:53:20 --> Query error: Column 'ticket_type' cannot be null - Invalid query: INSERT INTO `sell_tickets` (`tixstock_id`, `ticket_type`, `ticketid`, `ticket_group_id`, `user_id`, `match_id`, `event_flag`, `ticket_category`, `ticket_block`, `home_town`, `row`, `quantity`, `price_type`, `price`, `listing_note`, `split`, `sell_date`, `add_by`, `store_id`, `source_type`, `general_admission`, `seat`, `ticket_updated_date`, `status`) VALUES ('01hdy7zmk5yc2dyb2st2twccan', NULL, '3371_129402', 152555, 223, '2210', 'E', '3', '34506', 0, '', 6, 'GBP', '103.00', '', 4, '2023-12-12 06:53:20', 223, 1, 'tixstock', 'false', '', '2023-12-12 06:53:20', 1)
ERROR - 2023-12-12 07:00:30 --> Query error: Column 'ticket_type' cannot be null - Invalid query: INSERT INTO `sell_tickets` (`tixstock_id`, `ticket_type`, `ticketid`, `ticket_group_id`, `user_id`, `match_id`, `event_flag`, `ticket_category`, `ticket_block`, `home_town`, `row`, `quantity`, `price_type`, `price`, `listing_note`, `split`, `sell_date`, `add_by`, `store_id`, `source_type`, `general_admission`, `seat`, `ticket_updated_date`, `status`) VALUES ('01hdy7zmk5yc2dyb2st2twccan', NULL, '6054_875596', 963467, 223, '2210', 'E', '3', '34506', 0, '', 6, 'GBP', '103.00', '', 4, '2023-12-12 07:00:30', 223, 1, 'tixstock', 'false', '', '2023-12-12 07:00:30', 1)
ERROR - 2023-12-12 07:04:54 --> Query error: Column 'ticket_type' cannot be null - Invalid query: INSERT INTO `sell_tickets` (`tixstock_id`, `ticket_type`, `ticketid`, `ticket_group_id`, `user_id`, `match_id`, `event_flag`, `ticket_category`, `ticket_block`, `home_town`, `row`, `quantity`, `price_type`, `price`, `listing_note`, `split`, `sell_date`, `add_by`, `store_id`, `source_type`, `general_admission`, `seat`, `ticket_updated_date`, `status`) VALUES ('01hdy7zmk5yc2dyb2st2twccan', NULL, '5496_811843', 614359, 223, '2210', 'E', '3', '34506', 0, '', 6, 'GBP', '103.00', '', 4, '2023-12-12 07:04:54', 223, 1, 'tixstock', 'false', '', '2023-12-12 07:04:54', 1)
ERROR - 2023-12-12 07:05:47 --> Query error: Column 'ticket_type' cannot be null - Invalid query: INSERT INTO `sell_tickets` (`tixstock_id`, `ticket_type`, `ticketid`, `ticket_group_id`, `user_id`, `match_id`, `event_flag`, `ticket_category`, `ticket_block`, `home_town`, `row`, `quantity`, `price_type`, `price`, `listing_note`, `split`, `sell_date`, `add_by`, `store_id`, `source_type`, `general_admission`, `seat`, `ticket_updated_date`, `status`) VALUES ('01hdy7zmk5yc2dyb2st2twccan', NULL, '2331_515193', 788227, 223, '2210', 'E', '3', '34506', 0, '', 6, 'GBP', '103.00', '', 4, '2023-12-12 07:05:46', 223, 1, 'tixstock', 'false', '', '2023-12-12 07:05:47', 1)
ERROR - 2023-12-12 07:06:11 --> Query error: Column 'ticket_type' cannot be null - Invalid query: INSERT INTO `sell_tickets` (`tixstock_id`, `ticket_type`, `ticketid`, `ticket_group_id`, `user_id`, `match_id`, `event_flag`, `ticket_category`, `ticket_block`, `home_town`, `row`, `quantity`, `price_type`, `price`, `listing_note`, `split`, `sell_date`, `add_by`, `store_id`, `source_type`, `general_admission`, `seat`, `ticket_updated_date`, `status`) VALUES ('01hdy7zmk5yc2dyb2st2twccan', NULL, '4901_430064', 120366, 223, '2210', 'E', '3', '34506', 0, '', 6, 'GBP', '103.00', '', 4, '2023-12-12 07:06:11', 223, 1, 'tixstock', 'false', '', '2023-12-12 07:06:11', 1)
ERROR - 2023-12-12 07:06:44 --> Query error: Column 'ticket_type' cannot be null - Invalid query: INSERT INTO `sell_tickets` (`tixstock_id`, `ticket_type`, `ticketid`, `ticket_group_id`, `user_id`, `match_id`, `event_flag`, `ticket_category`, `ticket_block`, `home_town`, `row`, `quantity`, `price_type`, `price`, `listing_note`, `split`, `sell_date`, `add_by`, `store_id`, `source_type`, `general_admission`, `seat`, `ticket_updated_date`, `status`) VALUES ('01hdy7zmk5yc2dyb2st2twccan', NULL, '2589_268910', 893400, 223, '2210', 'E', '3', '34506', 0, '', 6, 'GBP', '103.00', '', 4, '2023-12-12 07:06:44', 223, 1, 'tixstock', 'false', '', '2023-12-12 07:06:44', 1)
ERROR - 2023-12-12 07:12:48 --> Query error: Column 'ticket_type' cannot be null - Invalid query: INSERT INTO `sell_tickets` (`tixstock_id`, `ticket_type`, `ticketid`, `ticket_group_id`, `user_id`, `match_id`, `event_flag`, `ticket_category`, `ticket_block`, `home_town`, `row`, `quantity`, `price_type`, `price`, `listing_note`, `split`, `sell_date`, `add_by`, `store_id`, `source_type`, `general_admission`, `seat`, `ticket_updated_date`, `status`) VALUES ('01hdy7zmk5yc2dyb2st2twccan', NULL, '6288_646717', 480055, 223, '2210', 'E', '3', '34506', 0, '', 6, 'GBP', '103.00', '', 4, '2023-12-12 07:12:48', 223, 1, 'tixstock', 'false', '', '2023-12-12 07:12:48', 1)
ERROR - 2023-12-12 07:16:17 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2023-12-12 07:17:46 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2023-12-12 07:18:58 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2023-12-12 08:12:00 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2023-12-12 08:20:51 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 08:20:53 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 08:21:48 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 08:23:55 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2023-12-12 08:31:11 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2023-12-12 08:32:55 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2023-12-12 08:36:43 --> Severity: error --> Exception: syntax error, unexpected variable "$this" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/models/General_Model.php 6418
ERROR - 2023-12-12 08:36:49 --> Severity: error --> Exception: syntax error, unexpected variable "$this" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/models/General_Model.php 6418
ERROR - 2023-12-12 08:36:53 --> Severity: error --> Exception: syntax error, unexpected variable "$this" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/models/General_Model.php 6418
ERROR - 2023-12-12 08:37:03 --> Severity: error --> Exception: syntax error, unexpected variable "$this" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/models/General_Model.php 6418
ERROR - 2023-12-12 08:37:06 --> Severity: error --> Exception: syntax error, unexpected variable "$this" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/models/General_Model.php 6418
ERROR - 2023-12-12 08:37:08 --> Severity: error --> Exception: syntax error, unexpected variable "$this" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/models/General_Model.php 6418
ERROR - 2023-12-12 08:37:10 --> Severity: error --> Exception: syntax error, unexpected variable "$this" /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/models/General_Model.php 6418
ERROR - 2023-12-12 08:39:23 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 08:45:55 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2023-12-12 08:49:18 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2023-12-12 08:52:00 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2023-12-12 08:56:43 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
ERROR - 2023-12-12 08:58:33 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 08:58:38 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:01:37 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:01:37 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:01:38 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:01:38 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:03:41 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:03:45 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:04:04 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:04:04 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:08:00 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:08:04 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:08:04 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:08:57 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:08:57 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:19:09 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:19:14 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:19:19 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:21:42 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:21:42 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:23:43 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:27:24 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:57:40 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 09:57:45 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 10:09:13 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 10:09:18 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 10:09:20 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 10:09:20 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 10:09:40 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 10:09:40 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 10:12:31 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 10:12:39 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 10:13:05 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 10:39:54 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-12 11:27:30 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
