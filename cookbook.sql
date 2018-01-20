-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1:3306
-- 產生時間： 2018-01-18 18:57:15
-- 伺服器版本: 5.7.19
-- PHP 版本： 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `cookbook`
--

-- --------------------------------------------------------

--
-- 資料表結構 `chefs`
--

DROP TABLE IF EXISTS `chefs`;
CREATE TABLE IF NOT EXISTS `chefs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `professional` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `chefs_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `chefs`
--

INSERT INTO `chefs` (`id`, `name`, `email`, `professional`, `employed_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '張秋永', 'chef01@gmail.com', '西餐', '2018-01-19 09:21:15', '2018-01-13 09:16:34', '2018-01-18 09:51:12', NULL),
(2, '詹姆士', 'chef02@gmail.com', '西餐', '2018-01-19 09:22:17', '2018-01-14 09:09:23', '2018-01-18 09:22:17', NULL),
(3, '阿基師', 'chef03@gmail.com', '西餐', '2018-01-19 09:23:53', '2018-01-18 06:22:44', '2018-01-18 09:23:53', NULL),
(4, '吳秉承', 'chef04@gmail.com', '西餐', '2018-01-19 09:24:35', '2018-01-18 09:24:35', '2018-01-18 09:24:35', NULL),
(5, '郭主義', 'chef05@gmail.com', '西餐', '2018-01-19 09:25:34', '2018-01-18 09:25:34', '2018-01-18 09:25:34', NULL),
(6, '王輔立', 'chef06@gmail.com', '西餐', '2018-01-19 09:26:01', '2018-01-18 09:26:01', '2018-01-18 09:26:01', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `cookbooks`
--

DROP TABLE IF EXISTS `cookbooks`;
CREATE TABLE IF NOT EXISTS `cookbooks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `chef_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredient` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `flavor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `step` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cookbooks_chef_id_foreign` (`chef_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `cookbooks`
--

INSERT INTO `cookbooks` (`id`, `chef_id`, `title`, `type`, `ingredient`, `flavor`, `step`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '照燒雞肉飯餅', '日式', '帶皮去骨雞腿肉1隻、蝦卵30克、蔥絲10克、柳橙1顆、柴魚片5克、原味美乃滋30克(裝袋)、太白粉1/2杯(裝盤)、熟白飯150克、雞蛋3顆', '味醂30c.c.、醬油30c.c.、糖30克、七味粉10克、鹽、白胡椒粉', '1.起小湯鍋，放入醬油30c.c.、味醂c.c.、糖30克.拌煮成照燒醬，備用。 2.取水晶碗，將雞腿肉劃刀後切丁拌入照燒醬2大匙、七味粉、米酒1大匙、1/4顆全蛋液、磨入少許柳橙皮屑抓醃。 3.起160度油鍋，將抓醃好的雞腿丁沾裹太白粉入鍋炸至熟成後濾出。 4.起鍋熱油，將白飯、蝦卵、雞蛋3顆拌勻，調入白胡椒粉、鹽少許後入鍋壓成餅狀煎至兩面金黃。 5.取成品盤放入飯餅淋上照燒醬，接著放上炸好的雞腿肉，淋入美乃滋、撒上柴魚片、蔥絲，最後刨入少許柳橙皮屑提味', '2018-01-13 13:12:15', '2018-01-18 09:44:19', NULL),
(2, 2, '天津丼', '日式', '白蝦仁10尾(去腸泥)、蟹肉碎罐頭1罐(瀝乾水份)、蔥花3支、金針菇1袋、熱白飯2碗、柴魚高湯700c.c.、太白粉2大匙、雞蛋4顆、清酒3大匙', '醬油3大匙、味醂6大匙、鹽、糖', '1.起鍋放入高湯復熱後倒出，並取適量高湯加入太白粉拌勻備用。 2.取白蝦仁拍扁後切碎、金針菇切小段，備用。 3.起深炒鍋，放入高湯、味醂6大匙、清酒3大匙、蔥花、醬油3大匙少許滾煮，接著放入金針菇段拌煮入味。 4.另起鍋熱適量香油，放入蟹肉碎罐頭、蝦仁碎鍋拌炒均勻後備用。 5.取水晶碗，打入4顆全蛋、放入上鍋炒料、加入餘量蔥花打勻，調入鹽、白胡椒粉少許。 6.另起鍋熱油，倒入上步驟蛋液煎成蛋包。 7.取成品碗，放入白飯，蓋上煎好的蛋包，最後將步驟3鍋調入適量太白粉水拌勻勾芡後淋入成品碗中', '2018-01-18 09:33:19', '2018-01-18 09:33:19', NULL),
(3, 3, '免治牛肉飯', '日式', '和牛火鍋肉片100克、洋蔥丁50克、牛番茄丁30克、生甜豆仁25克、薑末1大匙、熟白飯1碗、雞蛋1顆、高湯300c.c.、玉米粉1大匙', '梅林辣醬油1大匙、米酒1大匙、醬油1大匙、黑胡椒1/2大匙、鹽、香油', '1.預熱蒸鍋，放入白飯蒸熱，備用。 2.取牛肉片切小片、蛋白加入高湯1大匙拌勻、玉米粉加入高湯1大匙拌勻，備用。 3.起深炒鍋，撒入適量黑胡椒、鹽鋪底，再放入牛肉片炒香後倒出。 4.湯料：同上鍋餘油，炒香洋蔥丁、牛番茄丁、甜豆仁、薑末後，接著加入高湯滾煮出味，再關火調入玉米粉水勾芡收汁。 5.同上鍋，放入炒香的牛肉片、香油1大匙、辣醬油1茶匙翻炒均勻。 6.取成品盤，放入白飯舖底，接著淋入適量湯料，再將餘量湯料加入蛋白後拌勻倒入成品盤中，最後放入生蛋黃點綴', '2018-01-18 09:56:59', '2018-01-18 09:56:59', NULL),
(4, 3, '蛋酥燴絲瓜', '中式', '雞蛋3顆、絲瓜1條、乾干貝6粒(以少許米酒和水蒸軟留湯)、中文蛤15顆、鮮香菇片2朵、紅蘿蔔絲10克、薑絲10克、蔥花1支、蒜末1大匙、太白粉水2大匙、高湯500c.c.', '鹽、糖', '1.取絲瓜對剖後切薄片、水晶碗打入1顆全蛋、2顆蛋黃加入少許沙拉油打勻，備用。 2.起中溫油鍋，取漏勺高舉倒入蛋汁，以筷子拌開蛋液成蛋酥狀後，撈起吸油，再撒入少許鹽撈勻。 3.起鍋熱油1大匙，爆香薑絲、紅蘿蔔絲，再放入香菇片、絲瓜片炒香，接著調入高湯，將乾干貝剝碎後入鍋加蓋煨煮。 4.同上鍋，待絲瓜煨軟後，放入蛤蜊滾煮至蛤蜊殼開，再調入適量太白粉水勾芡，起鍋前淋入米酒1大匙、撒入蔥花、蒜末提香。 5.預熱砂鍋，倒入上鍋料，最後撒上蛋酥', '2018-01-18 10:13:36', '2018-01-18 10:13:36', NULL),
(5, 4, '咖哩羊肉捲餅', '中式', '羊五花肉片300克、洋蔥絲1/2顆、洋菇片20克、土芹菜末20克、薑末10克、青辣椒片10克、紅蔥頭末10克、蘋果絲30克、蔥抓餅2片、太白粉2大匙', '米酒2大匙、醬油1大匙、鹽1大匙、白胡椒粉1大匙、印度咖哩粉4大匙、香油', '1.起鍋熱適量油，放入蔥抓餅以小火半煎炸至膨起呈金黃色後濾出。 2.取水晶碗，將羊肉片切小段拌入米酒1大匙、白胡椒粉1大匙、咖哩粉1大匙、香油少許抓醃備用。 3.同步驟1-1鍋餘油加入香油少許，放入洋菇片、薑末、紅蔥頭末炒香，接著放入羊肉、洋蔥絲、青辣椒片拌炒，調入咖哩粉3大匙、水適量、白胡椒粉少許，起鍋前再放入土芹菜末、鹽1大匙、醬油1大匙、米酒1大匙拌炒均勻。 4.取鋁箔紙放上蔥抓餅拍鬆，接著放入蘋果絲適量、上步驟羊肉炒料捲起對切排盤', '2018-01-18 10:40:05', '2018-01-18 10:40:05', NULL),
(6, 5, '風情羊肉餅', '中式', '羊肉片500克、洋蔥末50克、蔥花30克、芹菜段100克、蒜苗段100克、沙拉筍絲100克、紅甜椒末60克、去籽青辣椒末30克、去籽紅辣椒末15克、薑末20克、蒜末20克、雞蛋1顆、太白粉2大匙、泡野山椒末1/2大匙、乾香菇60克(泡水切末)、高湯600cc', '米酒1大匙、白胡椒粉、香油、鹽、糖', '1.取調理機，將羊肉片切碎放入，加入米酒1/2大匙、蛋清1粒、蔥花、太白粉1大匙、油1大匙、少許白胡椒粉、糖、鹽打泥，備用。 2.起鍋，放入薑末、蒜末、泡野山椒末、高湯拌勻後濾出，調入鹽、糖少許，接著放入芹菜段、沙拉筍、蒜苗段、香油1大匙炒香後倒出。 3.取水晶碗，放入羊肉泥、洋蔥末、紅甜椒末、乾香菇末拌勻後塑形成圓餅狀，備用。 4.起滾水鍋，放入塑形好的羊肉餅滾至全熟，備用。 5.取成品盤，倒入高湯、芹菜段、沙拉筍、蒜苗段、羊肉餅。 6.起鍋熱適量香油，加入青辣椒末、紅辣椒末炒香，淋上羊肉餅', '2018-01-18 10:42:54', '2018-01-18 10:42:54', NULL),
(7, 6, '蠔氣炸飯球', '日式', '鮮蚵12粒、巴西里碎2大匙、蒜末1大匙、綠卷鬚2把(取嫩葉)、麵粉100克(裝盤)、蛋2顆(裝盤)、麵包粉100克(裝盤)、小顆水洗莫札瑞拉起士球6粒、酸豆2大匙、冷白飯2碗(水分多一點) 、罐頭鯷魚6尾、蒜仁2顆、帕馬森起士1塊', '番茄醬70克、起士粉4大匙、研磨黑胡椒、義大利黑醋30c.c、原味美乃滋200克、鹽、橄欖油1罐、義式綜合香料1罐', '1.取白飯拌入番茄醬，鹽、研磨黑胡椒、義式綜合香料調味，備用。 2.麵包粉加入巴西里碎1大匙，起士粉1/2大匙，備用 3.沙拉：取綠捲生菜加入適量橄欖油、1/2量巴西里碎、適量研磨黑胡椒、少許鹽拌勻備用。 4.醬汁；取調理機加入美乃滋200克、蒜仁2顆、鯷魚6尾、酸豆2大匙、起士粉3大匙、黑醋30 c.c打勻成醬汁。 5.起深炒鍋，加入適量橄欖油，將1/2量蒜末炒香，接著放入鮮蚵炒至8分熟後取出。 6.取適量飯中間放入炒過的鮮蚵、一顆起士球包起成球狀，備用。 起150度油鍋，將起士球沾麵粉、蛋液、麵包粉後入鍋，炸至金黃香酥後濾出。 取成品盤，倒入醬汁鋪底，接著擺上炸好的飯球，最後用綠捲生菜點綴裝飾', '2018-01-18 10:48:26', '2018-01-18 10:48:26', NULL),
(8, 1, '藍帶豬排', '日式', '豬里肌火鍋片10片、豬五花火鍋片10片、洋蔥絲20克、洋蔥碎10克、小番茄20克、玉米筍20克、青花菜20克、水煮蛋碎1/2顆、酸黃瓜碎10克.、美乃滋50克、起士片4片、火腿片4片、麵包粉1/2杯(裝盤)、高筋麵粉1/2杯', '番茄醬10克', '1.取里肌肉片5片、五花肉片5片相疊，撒上鹽、白胡椒粉少許，將起士片、火腿片對切放入肉片中對折包起。 2.取水晶碗，放入高筋麵粉、適量水拌勻成麵糊，接著將上步驟豬排沾裹麵糊封緊開口後裹上麵包粉。 3.起油鍋，將上步驟豬排入鍋油炸至熟後濾出。 4.另起鍋熱油，將青花菜切小朵、玉米筍對切、小番茄對切加入適量水、洋蔥絲調入白胡椒粉少許翻炒。 5.取水晶碗，放入美乃滋、番茄醬、酸黃瓜碎、洋蔥碎、水煮蛋碎拌勻成醬汁。 6.取成品盤，放入炒好的蔬菜，將炸好的豬排切塊排入盤中，淋入醬汁', '2018-01-18 10:52:17', '2018-01-18 10:52:17', NULL),
(9, 2, '起士牛肉三明治', '西式', '牛小排火鍋肉片10片、清酒2大匙、洋蔥泥3大匙、蒜泥1大匙、牛番茄1顆、廣東A菜8片、圓形黑麥麵包2片、雙色起士絲1大碗', '醬油、味醂2大匙', '1.起鍋放入適量起士絲放上黑麥麵包片，煎至起士融化後翻面煎熱後取出。 2.牛番茄切片、牛小排肉片切小段，備用。 3.取水晶碗，放入蒜泥1大匙、洋蔥泥3大匙、醬油4大匙、味醂2大匙、清酒2大匙拌勻，牛肉片放入抓醃。 4.另起鍋放入適量起士絲放上一層牛肉片，接著再放上一層起士絲堆疊，待起士融化後翻面，加蓋燜至熟。 5.取步驟1-1黑麥麵包，放入廣東A菜，接著挖入適量起士牛肉，再蓋上牛番茄片及黑麥麵包。 6.取水晶碗，放入餘量生菜，調入橄欖油、研磨海鹽、研磨黑胡椒、紅酒醋少許拌勻成沙拉，與三明治一同排入盤中', '2018-01-18 10:54:12', '2018-01-18 10:54:12', NULL),
(10, 4, '玉子蟹肉飯', '日式', '蟹肉碎罐頭2罐(瀝乾水份)、甜豆筴20克、蔥花10克、金針菇30克、香菜末10克、雞蛋3顆、熟越光米飯1碗、雞高湯200c.c.、太白粉1大匙、無鹽奶油1小塊、鮮奶2大匙.、罐頭玉米粒20克', '醬油1大匙、糖2茶匙、粗黑胡椒粒1茶匙、米酒1大匙、鹽巴1茶匙、香油1大匙', '1.起鍋熱香油，放入蟹肉碎罐頭炒香，加入蔥花、鹽、粗黑胡椒粒少許拌炒呈蟹肉鬆狀。 2.取水晶碗，放入雞蛋3顆打勻，接著調入鮮奶1大匙、鹽少許拌勻後倒入上鍋中。 3.起鍋熱油，倒入上步驟蛋液撒上罐頭玉米粒煎成蛋皮狀，待煎至定型後捲起。 4.另起鍋倒入高湯復熱，將金針菇切小段、甜豆筴切末入鍋滾煮，接著調入鹽、糖少許、適量水、太白粉水少許勾芡滾煮。 5.同步驟1-3鍋，將蛋捲取出以竹簾捲緊固定形狀放回鍋中以小火定型後取出。 6.取成品盤，將白飯倒扣於盤中，取無鹽奶油1小塊蓋於白飯下，接著將蛋捲切塊放入盤中，淋上步驟2-1醬汁，放上香菜末少許提香', '2018-01-18 10:56:21', '2018-01-18 10:56:21', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_13_074740_create_chefs_table', 1),
(4, '2018_01_13_074920_create_cookbooks_table', 1),
(5, '2018_01_13_135948_add_email_to_chefs_table', 1),
(6, '2018_01_13_140748_add_professional_to_chefs_table', 1),
(7, '2018_01_13_141421_add_employed_date_to_chefs_table', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
