-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: fresh_ecommerce
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `about_sections`
--

DROP TABLE IF EXISTS `about_sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about_sections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `paragraph_one` text DEFAULT NULL,
  `paragraph_two` text DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_url` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_sections`
--

LOCK TABLES `about_sections` WRITE;
/*!40000 ALTER TABLE `about_sections` DISABLE KEYS */;
INSERT INTO `about_sections` VALUES (1,'About Our Company','We are dedicated to bringing you the freshest, highest quality products sourced directly from trusted farms and producers.','With years of experience and a passion for quality, we make sure every item that reaches your home meets our strict standards.','Learn More','#','about-section/04ZJMzjOqbtmk5pVkxFVIwK9kzNKCKqBkcU1Doe6.jpg',1,'2026-07-05 03:59:01','2026-07-06 01:10:39');
/*!40000 ALTER TABLE `about_sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `button_one_text` varchar(255) DEFAULT NULL,
  `button_one_url` varchar(255) DEFAULT NULL,
  `button_two_text` varchar(255) DEFAULT NULL,
  `button_two_url` varchar(255) DEFAULT NULL,
  `media` varchar(255) NOT NULL,
  `media_type` varchar(255) NOT NULL DEFAULT 'image',
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,'Summer Sale is Live','Up to 40% off on electronics and fashion essentials.','Shop Now','#featured','View Deals','#featured','banners/xa6EZlHx4jyuzf3qcnGSaP4pmwLskdR2YvxFpLql.jpg','image',0,1,'2026-07-05 03:59:01','2026-07-05 06:17:29'),(2,'New Arrivals Weekly','Fresh drops across every category, every week.','Explore','#featured',NULL,NULL,'banners/xXlqKh5trAhEPQ223zFaRI430jBQsW9bUckwXuhB.jpg','image',1,1,'2026-07-05 03:59:01','2026-07-05 06:18:03'),(3,NULL,NULL,NULL,NULL,NULL,NULL,'banners/N0bdKYRgXGJunnmYQ0Eu0mmshDPN5BzHH3SR7ZCe.webp','image',2,1,'2026-07-05 03:59:01','2026-07-05 06:18:22'),(4,NULL,NULL,NULL,NULL,NULL,NULL,'banners/b6m74PB3tM95lTKlaroFtsqyl7A3rtAWNYEIGo9C.jpg','image',0,1,'2026-07-06 01:08:36','2026-07-06 01:08:36');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('fresh-e-commerce-cache-admin@admin.com|127.0.0.1','i:1;',1783255856),('fresh-e-commerce-cache-admin@admin.com|127.0.0.1:timer','i:1783255856;',1783255856),('fresh-e-commerce-cache-mdabutaleb.dev@gmail.com|127.0.0.1','i:1;',1783321606),('fresh-e-commerce-cache-mdabutaleb.dev@gmail.com|127.0.0.1:timer','i:1783321606;',1783321606);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parent_id` bigint(20) unsigned DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Electronics','electronics',NULL,NULL,NULL,1,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(2,'Mobile Phones','mobile-phones',1,NULL,NULL,1,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(3,'Laptops','laptops',1,NULL,NULL,1,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(4,'Fashion','fashion',NULL,NULL,NULL,1,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(5,'Men','men',4,NULL,NULL,1,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(6,'Women','women',4,NULL,NULL,1,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(7,'Home & Living','home-living',NULL,NULL,NULL,1,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(8,'Beauty','beauty',NULL,NULL,NULL,1,'2026-07-05 03:59:01','2026-07-05 03:59:01');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2026_07_05_082926_create_categories_table',1),(5,'2026_07_05_082926_create_orders_table',1),(6,'2026_07_05_082926_create_products_table',1),(7,'2026_07_05_082927_create_order_items_table',1),(8,'2026_07_05_085137_create_banners_table',1),(9,'2026_07_05_091035_create_product_showcases_table',1),(10,'2026_07_05_092248_create_about_sections_table',1),(11,'2026_07_06_072349_create_social_links_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  KEY `order_items_product_id_foreign` (`product_id`),
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `order_number` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `subtotal` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `shipping_cost` decimal(10,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(10,2) NOT NULL DEFAULT 0.00,
  `total` decimal(10,2) NOT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'unpaid',
  `payment_method` varchar(255) DEFAULT NULL,
  `shipping_name` varchar(255) NOT NULL,
  `shipping_phone` varchar(255) NOT NULL,
  `shipping_address` text NOT NULL,
  `shipping_city` varchar(255) NOT NULL,
  `shipping_state` varchar(255) DEFAULT NULL,
  `shipping_zip` varchar(255) DEFAULT NULL,
  `shipping_country` varchar(255) NOT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `orders_order_number_unique` (`order_number`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_showcases`
--

DROP TABLE IF EXISTS `product_showcases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_showcases` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_showcases`
--

LOCK TABLES `product_showcases` WRITE;
/*!40000 ALTER TABLE `product_showcases` DISABLE KEYS */;
INSERT INTO `product_showcases` VALUES (1,'product-showcases/YU5zzcFVkvW0PimWVZ27SbgLKdI3TINhRkXm3CMk.jpg',0,1,'2026-07-05 03:59:01','2026-07-05 05:03:40'),(2,'product-showcases/R82yW0X1KvJMmjQlRiC5T3KTUOb6UVc2D3wYUunT.jpg',1,1,'2026-07-05 03:59:01','2026-07-05 05:03:49'),(3,'product-showcases/cVdq5CrB7XwjNd88vEm6ud8upmgWPR8Eg9U5uGgw.jpg',2,1,'2026-07-05 03:59:01','2026-07-05 05:03:58'),(4,'product-showcases/7D8TOa0l8NH4NEHPBEm8rQjVflaPHli7OlMEf48c.jpg',3,1,'2026-07-05 03:59:01','2026-07-05 05:04:07'),(5,'product-showcases/T4wuSWIeFkqDGN44vkWmPPGOIofL7mGpaioFKu2K.jpg',4,1,'2026-07-05 03:59:01','2026-07-05 05:04:16'),(6,'product-showcases/seed-placeholder-5.jpg',5,0,'2026-07-05 03:59:01','2026-07-05 05:04:26');
/*!40000 ALTER TABLE `product_showcases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `sale_price` decimal(10,2) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `stock` int(10) unsigned NOT NULL DEFAULT 0,
  `thumbnail` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  UNIQUE KEY `products_sku_unique` (`sku`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,7,'Enim Consequatur Quisquam','enim-consequatur-quisquam-9589','Iste id autem eius veniam nihil. Eveniet eum vitae doloremque aspernatur.',197.15,NULL,'SKU-1374PJ',9,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(2,2,'Sed Omnis Sunt','sed-omnis-sunt-3328','Pariatur facilis sapiente libero nisi dolor. Fugit quia placeat recusandae velit ut. Qui quaerat quo occaecati quasi autem at eligendi. Quibusdam rerum corporis sint doloremque aspernatur aperiam mollitia voluptatibus.',118.74,NULL,'SKU-5466ZF',15,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(3,3,'Tempore Qui Culpa','tempore-qui-culpa-1430','Explicabo alias quia voluptas ea a consequatur consectetur soluta. Blanditiis perferendis porro reprehenderit. Explicabo beatae nihil consequatur. Vero eius necessitatibus rerum in error optio. Quo praesentium et voluptate cumque.',170.80,136.64,'SKU-3850PD',63,NULL,1,1,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(4,5,'Quidem Tempora Hic','quidem-tempora-hic-9099','Non perferendis facere esse maxime quos dignissimos porro laboriosam. Aut qui rerum ipsam alias impedit velit. Eum inventore ipsam id qui velit sed voluptatem. Velit vel eum tenetur ut qui eligendi.',137.58,NULL,'SKU-8671CS',44,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(5,3,'Eaque Non Dolor','eaque-non-dolor-9750','Sapiente odit nam eum. Rerum dolorem et incidunt est quia natus. Rerum aliquam quia omnis minima voluptatum. Maxime omnis est voluptatem commodi natus et expedita.',357.60,NULL,'SKU-3183GA',66,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(6,4,'Ut Omnis Architecto','ut-omnis-architecto-2192','Reprehenderit dolore nobis iusto occaecati. Saepe aut temporibus aut ipsa neque neque. Labore sequi odit qui quibusdam. Illo tenetur quis a et nesciunt.',322.40,NULL,'SKU-9400NH',91,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(7,3,'Pariatur Porro Iure','pariatur-porro-iure-2112','Dolores assumenda provident minima consequuntur nulla expedita magni ut. Quam modi quidem laboriosam.',57.08,NULL,'SKU-5595QH',66,NULL,1,1,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(8,4,'Reiciendis Omnis Modi','reiciendis-omnis-modi-9255','Sed sit sint pariatur asperiores nisi. Ullam perspiciatis commodi saepe. Asperiores consequatur quidem omnis eius quos. Voluptatum et dolor est.',382.38,NULL,'SKU-4247BV',68,NULL,1,1,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(9,2,'Hic Magni Placeat','hic-magni-placeat-1650','Expedita et enim pariatur sunt est accusantium explicabo. Minima et nulla iste quasi error. Quam dolor consequatur non consequuntur ea nesciunt.',52.83,42.26,'SKU-5089ZC',64,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(10,2,'Qui Et Aut','qui-et-aut-1299','Dolorum quod soluta ut et eligendi quia. Aliquam et aliquam in ullam rerum totam nostrum. Saepe tempora animi quisquam numquam quo aliquam fugiat minus.',205.29,NULL,'SKU-7538JV',85,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(11,5,'Commodi Ipsum Quasi','commodi-ipsum-quasi-8250','Quia aperiam veritatis distinctio. Numquam magnam rerum blanditiis sed qui perferendis et praesentium. Labore voluptatem earum natus perferendis blanditiis ut. Sapiente eveniet quia molestiae aut sit cum nulla.',187.56,150.05,'SKU-6180FT',7,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(12,7,'Officia Et Corrupti','officia-et-corrupti-6244','Rerum facere in sed et. Ipsum aperiam blanditiis vero mollitia. Sit fugiat error eius nemo molestiae a nisi.',244.87,NULL,'SKU-9802VE',78,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(13,1,'Non In Adipisci','non-in-adipisci-5216','Reprehenderit voluptatibus nihil veritatis ipsa. Maxime dolores asperiores aut et. Cum et consectetur reiciendis nisi. Quas sit optio at illo.',308.14,NULL,'SKU-9788NH',66,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(14,7,'Maxime Sit Quae','maxime-sit-quae-5830','Qui omnis neque rerum aliquid deserunt deserunt et. Et enim laboriosam provident commodi nostrum amet.',189.42,151.54,'SKU-5658QE',91,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(15,4,'Numquam Et Beatae','numquam-et-beatae-5362','Tenetur doloremque dolores laudantium dolorum. Ratione sequi nulla reprehenderit cum soluta atque aut. Corporis explicabo laudantium earum quia.',32.97,26.38,'SKU-3646OJ',100,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(16,6,'Ea Nihil Porro','ea-nihil-porro-4900','Ab rerum alias ducimus error. Ullam accusamus sequi dignissimos est illum totam deleniti. Magnam autem commodi soluta odio natus vel rem quaerat.',242.25,NULL,'SKU-0306OH',80,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(17,8,'Voluptatem Consequatur Voluptas','voluptatem-consequatur-voluptas-7141','Tempora culpa minima vel ut ad ducimus quia. Suscipit qui alias voluptas delectus id.',295.59,NULL,'SKU-0550OT',36,NULL,1,1,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(18,7,'Aut Veritatis Autem','aut-veritatis-autem-3878','Magnam molestiae vel ea animi est necessitatibus. Excepturi qui esse nihil nesciunt vero blanditiis temporibus.',176.64,NULL,'SKU-2974PZ',5,NULL,1,1,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(19,7,'Tenetur Doloribus In','tenetur-doloribus-in-5359','Quos nihil et similique omnis consectetur quo esse. Occaecati illo eveniet dolores et ut quisquam omnis. Deleniti fuga animi cumque possimus.',491.78,NULL,'SKU-4978LS',75,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(20,4,'Necessitatibus Vero Sit','necessitatibus-vero-sit-7130','Ex ut repudiandae et veritatis. Ab in nisi tempore consequatur ex. Non in iusto quisquam beatae veniam cumque est.',59.01,NULL,'SKU-6973RZ',15,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(21,1,'Cumque Voluptatem Voluptas','cumque-voluptatem-voluptas-4775','Accusamus reprehenderit architecto quasi id mollitia consequatur. Unde dignissimos id et voluptas quo. Voluptates voluptatibus libero vel ut quas eaque. Placeat et eum id rerum omnis aliquam praesentium.',260.02,NULL,'SKU-0975IY',22,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(22,1,'Et Voluptates Dolores','et-voluptates-dolores-2579','Quia non quis rerum et. Et et autem repellendus.',325.70,260.56,'SKU-6404FK',76,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(23,1,'Numquam At Quae','numquam-at-quae-8546','Dignissimos ullam qui eum quia. Quia suscipit deserunt iure ad minima qui dolores. Dolorem culpa accusamus dolor dolorum doloremque aliquid.',11.15,NULL,'SKU-4113YU',46,NULL,1,0,'2026-07-05 03:59:01','2026-07-05 03:59:01'),(24,7,'Doloribus Cupiditate Blanditiis','doloribus-cupiditate-blanditiis-4539','Blanditiis et odio quidem aut sit est. Corrupti quidem et sint accusantium. Non qui vero in debitis quia minus vero unde. Consectetur enim nobis fugiat nisi nam dolore hic.',351.68,NULL,'SKU-9714AP',94,NULL,1,1,'2026-07-05 03:59:01','2026-07-05 03:59:01');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('KEb9jsgAvIjoH1DyBXPYXd8z4jubK7ZvKDO91152',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZDBhanZrMXgwTE1sVHdVdzdsb014SWNJYVpNQUJVSHN3eU1tMjZrTCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1783325303),('Yc71bA0am5QIgvoyNqV3ktfzsFDgUOwbL1A2k6r6',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRzJ1NHc0SFVhU3U0VmdOdm5NVzFIYnU5SzlrT3kxNVI3azdHQ2pyOCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9',1783323795);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social_links`
--

DROP TABLE IF EXISTS `social_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `social_links` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `platform` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_links`
--

LOCK TABLES `social_links` WRITE;
/*!40000 ALTER TABLE `social_links` DISABLE KEYS */;
INSERT INTO `social_links` VALUES (1,'Facebook','https://www.sameerthinks.com/','fa-brands fa-facebook',0,1,'2026-07-06 01:28:39','2026-07-06 01:33:58'),(2,'Instagram','#','fa-brands fa-instagram',1,2,'2026-07-06 01:28:39','2026-07-06 01:28:39'),(3,'X (Twitter)','#','fa-brands fa-x-twitter',1,3,'2026-07-06 01:28:39','2026-07-06 01:28:39'),(4,'LinkedIn','#','fa-brands fa-linkedin',1,4,'2026-07-06 01:28:39','2026-07-06 01:28:39'),(5,'WhatsApp','#','fa-brands fa-whatsapp',0,5,'2026-07-06 01:28:39','2026-07-06 01:28:39');
/*!40000 ALTER TABLE `social_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'customer',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@example.com','2026-07-05 03:59:01','$2y$12$/YjN0H0i7HqzZWjnNyKeJ.G.w.QbGxrfXLjSkd9yyQ27KlRVl98ue','admin',NULL,'2026-07-05 03:59:01','2026-07-05 03:59:01');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-07-06 14:50:44
