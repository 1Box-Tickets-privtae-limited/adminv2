<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-12-11 08:03:09 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, bool given /home/720521.cloudwaysapps.com/nbvnkuybmm/public_html/1bx/admin_v2/application/controllers/Event.php 762
ERROR - 2023-12-11 19:39:42 --> Query error: Column 'ticket_type' cannot be null - Invalid query: INSERT INTO `sell_tickets` (`tixstock_id`, `ticket_type`, `ticketid`, `ticket_group_id`, `user_id`, `match_id`, `event_flag`, `ticket_category`, `ticket_block`, `home_town`, `row`, `quantity`, `price_type`, `price`, `listing_note`, `split`, `sell_date`, `add_by`, `store_id`, `source_type`, `general_admission`, `seat`, `ticket_updated_date`, `status`) VALUES ('01hdy7zmk5yc2dyb2st2twccan', NULL, '3295_272302', 433018, 223, '2210', 'E', '3', 34506, 0, '', 6, 'GBP', '103.00', '', 4, '2023-12-11 07:39:42', 223, 1, 'tixstock', 'false', '', '2023-12-11 07:39:42', 1)
ERROR - 2023-12-11 19:39:42 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `general_settings`
WHERE `general_settings_id` = '1'
ERROR - 2023-12-11 19:39:42 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `api_events`
WHERE `id` = '2598'
ERROR - 2023-12-11 19:39:43 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `general_settings`
WHERE `general_settings_id` = '1'
ERROR - 2023-12-11 19:58:51 --> Query error: MySQL server has gone away - Invalid query: SELECT `tournament_lang`.`tournament_id`, `tournament_lang`.`tournament_name`, `tournament`.`category`
FROM `tournament`
JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `tournament`.`t_id`
WHERE `tournament`.`status` = '1'
AND `tournament_lang`.`language` = 'en'
AND `tournament_lang`.`tournament_name` = 'English Premier League'
GROUP BY `tournament`.`t_id`
ORDER BY `tournament_lang`.`tournament_name` ASC
