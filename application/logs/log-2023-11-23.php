<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-23 12:19:29 --> Query error: Illegal mix of collations (latin1_swedish_ci,IMPLICIT) and (utf8_general_ci,COERCIBLE) for operation 'like' - Invalid query: SELECT `match_info`.`match_name` as `event_name`, `match_settings`.*, `match_info`.*, `s1`.`s_no`, `match_info`.`status` as `match_status`, `tournament_lang`.*, `match_info_lang`.`match_name`, `teams_lang`.`team_name`, `tournament`.`url_key`, `s1`.`sold`, `st`.`stadium_name`, SUM(s1.quantity + s1.sold) AS box_quantity, `match_info_lang`.`meta_title` as `meta_title`, `match_info_lang`.`meta_description` as `meta_description`, `match_info`.`seo_keywords` as `match_seo_keywords`, `cities`.`name` as `city_name`, `countries`.`name` as `country_name`, `game_category_lang`.`category_name`
FROM `match_info`
LEFT JOIN `booking_tickets` ON `match_info`.`m_id` = `booking_tickets`.`booking_id`
LEFT JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `match_info`.`tournament`
LEFT JOIN `match_settings` ON `match_settings`.`matches` = `match_info`.`m_id`
LEFT JOIN `match_info_lang` ON `match_info_lang`.`match_id` = `match_info`.`m_id`
LEFT JOIN `game_category_lang` ON `game_category_lang`.`game_cat_id` = `match_info`.`category`
LEFT JOIN `teams_lang` ON `teams_lang`.`team_id` = `match_info`.`hometown` AND `teams_lang`.`language` = "en"
LEFT JOIN `admin_details` ON `admin_details`.`admin_id` = `match_info`.`add_by`
LEFT JOIN `sell_tickets` `s1` ON `s1`.`match_id` = `match_info`.`m_id`
LEFT JOIN `tournament` ON `tournament`.`t_id` = `match_info`.`tournament`
LEFT JOIN `stadium` `st` ON `st`.`s_id` = `match_info`.`venue`
LEFT JOIN `cities` ON `cities`.`id` = `match_info`.`city`
LEFT JOIN `countries` ON `countries`.`id` = `match_info`.`country`
WHERE `match_info`.`event_type` = 'match'
AND `match_info_lang`.`language` = 'en'
AND `tournament_lang`.`language` = 'en'
AND `game_category_lang`.`language` = 'en'
AND `match_info`.`match_date` > '2023-11-23 12:19'
AND `match_info`.`status` != '2'
AND `match_info`.`status` != '3'
AND  `match_info`.`match_name` LIKE '%42 2D vs 2E (Düsseldorf)﻿ Euro 2024%' ESCAPE '!'
GROUP BY `match_info`.`m_id`
ORDER BY `match_info`.`match_date` ASC
ERROR - 2023-11-23 12:19:38 --> Query error: Illegal mix of collations (latin1_swedish_ci,IMPLICIT) and (utf8_general_ci,COERCIBLE) for operation 'like' - Invalid query: SELECT `match_info`.`match_name` as `event_name`, `match_settings`.*, `match_info`.*, `s1`.`s_no`, `match_info`.`status` as `match_status`, `tournament_lang`.*, `match_info_lang`.`match_name`, `teams_lang`.`team_name`, `tournament`.`url_key`, `s1`.`sold`, `st`.`stadium_name`, SUM(s1.quantity + s1.sold) AS box_quantity, `match_info_lang`.`meta_title` as `meta_title`, `match_info_lang`.`meta_description` as `meta_description`, `match_info`.`seo_keywords` as `match_seo_keywords`, `cities`.`name` as `city_name`, `countries`.`name` as `country_name`, `game_category_lang`.`category_name`
FROM `match_info`
LEFT JOIN `booking_tickets` ON `match_info`.`m_id` = `booking_tickets`.`booking_id`
LEFT JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `match_info`.`tournament`
LEFT JOIN `match_settings` ON `match_settings`.`matches` = `match_info`.`m_id`
LEFT JOIN `match_info_lang` ON `match_info_lang`.`match_id` = `match_info`.`m_id`
LEFT JOIN `game_category_lang` ON `game_category_lang`.`game_cat_id` = `match_info`.`category`
LEFT JOIN `teams_lang` ON `teams_lang`.`team_id` = `match_info`.`hometown` AND `teams_lang`.`language` = "en"
LEFT JOIN `admin_details` ON `admin_details`.`admin_id` = `match_info`.`add_by`
LEFT JOIN `sell_tickets` `s1` ON `s1`.`match_id` = `match_info`.`m_id`
LEFT JOIN `tournament` ON `tournament`.`t_id` = `match_info`.`tournament`
LEFT JOIN `stadium` `st` ON `st`.`s_id` = `match_info`.`venue`
LEFT JOIN `cities` ON `cities`.`id` = `match_info`.`city`
LEFT JOIN `countries` ON `countries`.`id` = `match_info`.`country`
WHERE `match_info`.`event_type` = 'match'
AND `match_info_lang`.`language` = 'en'
AND `tournament_lang`.`language` = 'en'
AND `game_category_lang`.`language` = 'en'
AND `match_info`.`match_date` > '2023-11-23 12:19'
AND `match_info`.`status` != '2'
AND `match_info`.`status` != '3'
AND  `match_info`.`match_name` LIKE '%42 2D vs 2E (Düsseldorf)﻿ Euro 2024%' ESCAPE '!'
GROUP BY `match_info`.`m_id`
ORDER BY `match_info`.`match_date` ASC
ERROR - 2023-11-23 12:19:42 --> Query error: Illegal mix of collations (latin1_swedish_ci,IMPLICIT) and (utf8_general_ci,COERCIBLE) for operation 'like' - Invalid query: SELECT `match_info`.`match_name` as `event_name`, `match_settings`.*, `match_info`.*, `s1`.`s_no`, `match_info`.`status` as `match_status`, `tournament_lang`.*, `match_info_lang`.`match_name`, `teams_lang`.`team_name`, `tournament`.`url_key`, `s1`.`sold`, `st`.`stadium_name`, SUM(s1.quantity + s1.sold) AS box_quantity, `match_info_lang`.`meta_title` as `meta_title`, `match_info_lang`.`meta_description` as `meta_description`, `match_info`.`seo_keywords` as `match_seo_keywords`, `cities`.`name` as `city_name`, `countries`.`name` as `country_name`, `game_category_lang`.`category_name`
FROM `match_info`
LEFT JOIN `booking_tickets` ON `match_info`.`m_id` = `booking_tickets`.`booking_id`
LEFT JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `match_info`.`tournament`
LEFT JOIN `match_settings` ON `match_settings`.`matches` = `match_info`.`m_id`
LEFT JOIN `match_info_lang` ON `match_info_lang`.`match_id` = `match_info`.`m_id`
LEFT JOIN `game_category_lang` ON `game_category_lang`.`game_cat_id` = `match_info`.`category`
LEFT JOIN `teams_lang` ON `teams_lang`.`team_id` = `match_info`.`hometown` AND `teams_lang`.`language` = "en"
LEFT JOIN `admin_details` ON `admin_details`.`admin_id` = `match_info`.`add_by`
LEFT JOIN `sell_tickets` `s1` ON `s1`.`match_id` = `match_info`.`m_id`
LEFT JOIN `tournament` ON `tournament`.`t_id` = `match_info`.`tournament`
LEFT JOIN `stadium` `st` ON `st`.`s_id` = `match_info`.`venue`
LEFT JOIN `cities` ON `cities`.`id` = `match_info`.`city`
LEFT JOIN `countries` ON `countries`.`id` = `match_info`.`country`
WHERE `match_info`.`event_type` = 'match'
AND `match_info_lang`.`language` = 'en'
AND `tournament_lang`.`language` = 'en'
AND `game_category_lang`.`language` = 'en'
AND `match_info`.`match_date` > '2023-11-23 12:19'
AND `match_info`.`status` != '2'
AND `match_info`.`status` != '3'
AND  `match_info`.`match_name` LIKE '%42 2D vs 2E (Düsseldorf)﻿ Euro 2024%' ESCAPE '!'
GROUP BY `match_info`.`m_id`
ORDER BY `match_info`.`match_date` ASC
ERROR - 2023-11-23 12:19:52 --> Query error: Illegal mix of collations (latin1_swedish_ci,IMPLICIT) and (utf8_general_ci,COERCIBLE) for operation 'like' - Invalid query: SELECT `match_info`.`match_name` as `event_name`, `match_settings`.*, `match_info`.*, `s1`.`s_no`, `match_info`.`status` as `match_status`, `tournament_lang`.*, `match_info_lang`.`match_name`, `teams_lang`.`team_name`, `tournament`.`url_key`, `s1`.`sold`, `st`.`stadium_name`, SUM(s1.quantity + s1.sold) AS box_quantity, `match_info_lang`.`meta_title` as `meta_title`, `match_info_lang`.`meta_description` as `meta_description`, `match_info`.`seo_keywords` as `match_seo_keywords`, `cities`.`name` as `city_name`, `countries`.`name` as `country_name`, `game_category_lang`.`category_name`
FROM `match_info`
LEFT JOIN `booking_tickets` ON `match_info`.`m_id` = `booking_tickets`.`booking_id`
LEFT JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `match_info`.`tournament`
LEFT JOIN `match_settings` ON `match_settings`.`matches` = `match_info`.`m_id`
LEFT JOIN `match_info_lang` ON `match_info_lang`.`match_id` = `match_info`.`m_id`
LEFT JOIN `game_category_lang` ON `game_category_lang`.`game_cat_id` = `match_info`.`category`
LEFT JOIN `teams_lang` ON `teams_lang`.`team_id` = `match_info`.`hometown` AND `teams_lang`.`language` = "en"
LEFT JOIN `admin_details` ON `admin_details`.`admin_id` = `match_info`.`add_by`
LEFT JOIN `sell_tickets` `s1` ON `s1`.`match_id` = `match_info`.`m_id`
LEFT JOIN `tournament` ON `tournament`.`t_id` = `match_info`.`tournament`
LEFT JOIN `stadium` `st` ON `st`.`s_id` = `match_info`.`venue`
LEFT JOIN `cities` ON `cities`.`id` = `match_info`.`city`
LEFT JOIN `countries` ON `countries`.`id` = `match_info`.`country`
WHERE `match_info`.`event_type` = 'match'
AND `match_info_lang`.`language` = 'en'
AND `tournament_lang`.`language` = 'en'
AND `game_category_lang`.`language` = 'en'
AND `match_info`.`match_date` > '2023-11-23 12:19'
AND `match_info`.`status` != '2'
AND `match_info`.`status` != '3'
AND  `match_info`.`match_name` LIKE '%42 2D vs 2E (Düsseldorf)﻿ Euro 2024%' ESCAPE '!'
GROUP BY `match_info`.`m_id`
ORDER BY `match_info`.`match_date` ASC
ERROR - 2023-11-23 12:20:01 --> Query error: Illegal mix of collations (latin1_swedish_ci,IMPLICIT) and (utf8_general_ci,COERCIBLE) for operation 'like' - Invalid query: SELECT `match_info`.`match_name` as `event_name`, `match_settings`.*, `match_info`.*, `s1`.`s_no`, `match_info`.`status` as `match_status`, `tournament_lang`.*, `match_info_lang`.`match_name`, `teams_lang`.`team_name`, `tournament`.`url_key`, `s1`.`sold`, `st`.`stadium_name`, SUM(s1.quantity + s1.sold) AS box_quantity, `match_info_lang`.`meta_title` as `meta_title`, `match_info_lang`.`meta_description` as `meta_description`, `match_info`.`seo_keywords` as `match_seo_keywords`, `cities`.`name` as `city_name`, `countries`.`name` as `country_name`, `game_category_lang`.`category_name`
FROM `match_info`
LEFT JOIN `booking_tickets` ON `match_info`.`m_id` = `booking_tickets`.`booking_id`
LEFT JOIN `tournament_lang` ON `tournament_lang`.`tournament_id` = `match_info`.`tournament`
LEFT JOIN `match_settings` ON `match_settings`.`matches` = `match_info`.`m_id`
LEFT JOIN `match_info_lang` ON `match_info_lang`.`match_id` = `match_info`.`m_id`
LEFT JOIN `game_category_lang` ON `game_category_lang`.`game_cat_id` = `match_info`.`category`
LEFT JOIN `teams_lang` ON `teams_lang`.`team_id` = `match_info`.`hometown` AND `teams_lang`.`language` = "en"
LEFT JOIN `admin_details` ON `admin_details`.`admin_id` = `match_info`.`add_by`
LEFT JOIN `sell_tickets` `s1` ON `s1`.`match_id` = `match_info`.`m_id`
LEFT JOIN `tournament` ON `tournament`.`t_id` = `match_info`.`tournament`
LEFT JOIN `stadium` `st` ON `st`.`s_id` = `match_info`.`venue`
LEFT JOIN `cities` ON `cities`.`id` = `match_info`.`city`
LEFT JOIN `countries` ON `countries`.`id` = `match_info`.`country`
WHERE `match_info`.`event_type` = 'match'
AND `match_info_lang`.`language` = 'en'
AND `tournament_lang`.`language` = 'en'
AND `game_category_lang`.`language` = 'en'
AND `match_info`.`match_date` > '2023-11-23 12:20'
AND `match_info`.`status` != '2'
AND `match_info`.`status` != '3'
AND  `match_info`.`match_name` LIKE '%42 2D vs 2E (Düsseldorf)﻿ Euro 2024%' ESCAPE '!'
GROUP BY `match_info`.`m_id`
ORDER BY `match_info`.`match_date` ASC
