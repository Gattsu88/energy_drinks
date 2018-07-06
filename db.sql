CREATE DATABASE  IF NOT EXISTS `energy_drinks` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `energy_drinks`;
-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: energy_drinks
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(90) CHARACTER SET latin1 DEFAULT NULL,
  `description` varchar(2056) CHARACTER SET latin1 DEFAULT NULL,
  `company` varchar(2056) CHARACTER SET latin1 DEFAULT NULL,
  `highlights` varchar(2056) CHARACTER SET latin1 DEFAULT NULL,
  `image` varchar(256) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Red Bull Energy Drink','Red Bull Energy Drink is, quite simply, one of the best energy drinks on the planet. You’ve surely seen the ads, or maybe even tried the product for yourself – after all, Red Bull “Gives You Wings”. Red Bull is a true legend in the energy drink world, packaged in that iconic blue-and-silver can. And with a potent blend of high quality ingredients, including caffeine, taurine, B-vitamins and more, this drink packs a punch.',' Red Bull is made by Red Bull GmbH, an Austrian-based beverage manufacturer. Best known for their signature Red Bull product, this company was founded in 1987 and has since grown into one of the largest beverage conglomerates on the planet. With 2015 sales of $4.5 billion, Red Bull is by far the best selling energy drink – and for good reason!','The most popular energy drink\nSales of $4.5 billion in 2015\n80mg caffeine per serving\nPacked with caffeine, taurine, B-vitamins and more\nAvailable in a variety of flavors\nGreat value for money\nModerate caffeine content won’t make you jittery\nRed Bull sponsors tons of extreme sports, giving back to the community.','images/brands/1.jpg'),(2,'Monster Energy Drink','Monster Energy Drink is one of the most popular energy drinks on the market. Featuring an energy blend of glucose, panax ginseng, taurine, caffeine, L-carnitine, and more, this ultra-popular beverage is affordable, accessible, and tasty. And offering a 160mg dose of caffeine, this drink offers a good balance of taste and energy.','Monster Energy Drink is made by Monster Beverage, a large scale drink manufacturer based in the US. First introduced in 2002, Monster has now grown into a massive company and a worldwide success. Today, they not only produce a wide variety of delicious beverages, but they also give back to the community by supporting extreme sports like BMX, skateboarding, snowboarding and much more.','One of the most popular energy drinks out there\n160mg caffeine per serving\nEnergy blend including taurine, ginseng, glucose, L-carnitine, guarana and more\nDelicious flavor\nGreat value for money\nMonster Energy supports many artists, athletes and more. The legendary MONSTER!','images/brands/2.jpg'),(3,'Rockstar Zero Carb Energy Drink','Rockstar Zero Carb Energy Drink is a low-calorie and zero carb version of the popular Rockstar energy drink. Containing zero sugar and zero carbs, this potent energy drink is enhanced with a herbal blend of guarana, ginseng, ginkgo, and milk thistle – plus a large dose of caffeine to kick start your day!','Rockstar Zero Carb is made by Rockstar Energy, a huge company specializing in energy drinks. Today, more than 20 flavors and varieties of Rockstar are made and distributed in over 30 countries. As one of the most popular energy drink brands, Rockstar continues to excel producing high quality, accessible and affordable products.','Zero carb, zero sugar\n240mg caffeine per can\nBlend of guarana, ginseng, ginkgo and other energy-boosting herbs\nNo carbs, 10 calories\nHigh caffeine content\nThe legendary Rockstar brand!','images/brands/3.jpg'),(4,'Zipfizz Energy Drink','Zipfizz Energy Drink is a good energy drink containing electrolytes, B-vitamins and more. It’s also a good sports drink, as it provides a good way to rehydrate after exercise. It contains around 100mg caffeine per serving, which is on the low side.','Zipfizz is made by a company of the same name. Founded in 2003, Zipfizz set off to develop a healthy and simple energy drink formula. Today, Zipfizz is one of the most popular electrolyte drinks, and is available worldwide both in-store and online.','Powdered drink mix – just mix with water\n100mg caffeine\nElectrolytes for hydration\nAntioxidants and vitamins\nGreen tea extract\nB12 included\nOnly 10 calories per serving\nZero sugar\nProvides 4-6 hours of energy\nLow caffeine formula\nTasty flavors','images/brands/4.jpg'),(5,'VPX Redline Xtreme RTD (Ready-to-drink Energy Drink)','VPX Redline Xtreme RTD is a strong energy drink designed for athletes and sports enthusiasts. This extremely potent product is designed to increase your energy levels. In addition to the standard energy-boosting ingredients, Redline Xtreme also includes BCAAs.','This product is made by VPX, also known as Redline Sports Nutrition and Performance Beverages. Founded in 1993, VPX has been consistent in their goal of creating high-grade, effective sports supplements. VPX uses industry-leading practices to deliver high quality, science-backed products at reasonable prices.','Designed for athletes\nVery powerful\nConcentrated – 4 oz serving size\nContains caffeine, yerba mate and green tea extract\nContains BCAAs and electrolytes\nA high quality sports drink\n2 servings per bottle','images/brands/5.jpg'),(6,'Starbucks Refreshers','Starbucks Refreshers are good energy drinks that uses natural caffeine from green coffee extract. Available in 3 fruit flavors, these drinks offer natural caffeine and are 25% juice. With less sugar and more natural ingredients, it’s a solid product.','Starbucks Refreshers are made by Starbucks, the largest coffee company in the world. If you live in a city, chances are you’re within walking distance of a Starbucks. While they started as a small coffee shop in Seattle, they are now worldwide and have branched out into other business ventures, like manufacturing these Starbucks Refreshers.','Natural caffeine from green coffee extract\n25% fruit juice\nAdded panax ginseng\n90 calories per serving\nAvailable in 3 tasty flavors\nModerate caffeine content\nAffordable','images/brands/6.jpg'),(7,'Living Essentials 5-Hour Energy','Living Essentials 5-Hour Energy is an innovative energy drink that’s really more of an energy “shot”. You’ve surely seen these in stores, and perhaps even seem TV commercials. These 2-oz bottles are downed in a single gulp, and contain enough caffeine, vitamins and nutrients to keep you going for, well – 5 hours!','5-Hour Energy is made by Living Essentials, a Michigan based manufacturer of health products and energy drinks. Living Essentials was really the first company to come out with a “micro” energy drink like 5-Hour Energy, and they’ve done very well since then. Today, they’re a huge company, still focused on producing high quality products.','Only 2 ounces – easy to drink on-the-go\n200mg caffeine\nTaurine, glucuronic acid, tyrosine & more\nZero sugar\nOnly 4 calories\nB-vitamins\nVery convenient','images/brands/7.jpg'),(8,'CytoSport Fast Twitch RTD','CyToSport Fast Twitch RTD is a powerful energy drink designed for weightlifters. Packed with caffeine and taurine and boosted with nitric oxide-boosting betain anhydrous, L-citrulline and L-arginine, this is a potent all-in-one energy drink.','This product is made by CytoSport, a large manufacturer of workout supplements and health products. Best known for their MuscleMilk product line, CytoSport is a leader in the industry, and for good reason. Founded in 1998, CytoSport is dedicated to producing innovative, effective and affordable supplements for their customers.','Designed for athletes and weightlifters\n200mg caffeine\nTaurine & glucuronolactone\nSugar free\nLess than 1g carbs','images/brands/8.jpg'),(9,'Xyience Xenergy Drink','Xyience Xenergy Drink is a powerful energy drink offering a strong energy boost with zero calories and zero sugar. Available in a variety of tasty flavors, Xyience offers 176mg of caffeine per serving, enough to get your day going or keep you focused through the day’s tasks. Xenergy is now the official energy drink of the UFC (Ultimate Fighting Championship).','This product is made by Xyience, a Texas-based manufacturer of energy drinks and other health products. They offer the Xyience Xenergy line, which includes many flavors and varieties of this popular beverage. They also have a supplement division, which makes effective health supplements for athletes and everyday people alike.','176mg caffeine per serving\nZero calories\nZero carbs\nZero sugar\nThe official energy drink of the UFC\nTaurine, guarana, panax ginseng and more','images/brands/9.jpg'),(10,'SAMBAZON Organic Amazon Energy Drink','SAMBAZON Organic Amazon Energy drink is a good energy drink made with acai berry, natural caffeine, guarana and more. Made with real fruit juice, this all-organic formula is, vegan, and gluten free. With a moderate caffeine level equivalent to around two shots of espresso, this drink provides a great way to help boost your energy levels.','SAMBAZON Organic Amazon Energy Drink is made by SAMBAZON, a large manufacturer of health foods and drinks. This company mostly focuses on the use of acai berry, a natural superfood found in the Amazon. Today, this California-based company is large and successful, and now distributes their products worldwide.','Organic formula\nAll natural, gluten free, vegan\nMade with real fruit juice\n80mg caffeine per serving\nCaffeine from yerba mate, green tea and guarana\nUses real fruit juice\nIncludes acai berry','images/brands/10.jpg');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(256) CHARACTER SET latin1 DEFAULT NULL,
  `answer` text CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (1,'Do energy drinks really help?','Some energy drinks contain sugar and other substances. The boost is short-lived, however, and may be accompanied by other problems. For example, energy drinks that contain sugar may contribute to weight gain and too much caffeine, or caffeine-like substances, can lead to nervousness.'),(2,'How do energy drinks affect your health?','In fact, a recent German study found that healthy people who drank caffeine and taurine-packed energy drinks saw increased heart contraction rates up to an hour later. ... Your body: Too much caffeine can produce a diuretic effect, which can also mean dehydration.'),(3,'Do energy drinks have bull sperm in them?','According to online rumors, Red Bull, Monster, Rockstar and other brand-name energy drinks contain a secret ingredient to pep you up: bull semen. As it happens, there is an ingredient in most energy drinks called taurine.'),(4,'How many energy drinks can you have in a day?','Up to 400 milligrams (mg) of caffeine a day appears to be safe for most healthy adults. That\'s roughly the amount of caffeine in four cups of brewed coffee, 10 cans of cola or two \"energy shot\" drinks.'),(5,'Do energy drinks have more caffeine than coffee?','While coffee does have more caffeine than energy drinks, it\'s how the caffeine is delivered that seems to be at issue. Energy drinks are often high in sugar, while even sweetened coffee would contain less. A Monster Energy Drink has 54 grams of sugar, which is equal to 13.5 teaspoons!'),(6,'How much is a lethal amount of caffeine?','The lethal dose for caffeine is in the neighborhood of 150 milligrams per kilogram of body weight (one kilogram equals roughly 2.2 pounds). While the average person\'s caffeine consumption is around 200 milligrams a day, the Mayo Clinic advises against exceeding 500 to 600 milligrams per day.'),(7,'Can energy drinks hurt your heart?','A review of previous research, presented at the 2013 American Heart Association meeting in New Orleans, found that drinking one to three energy drinks could mess with your heart rhythm and increase your blood pressure. If severe enough, these changes could lead to an irregular heartbeat or even sudden cardiac death.'),(8,'What are the side effects of drinking too much energy drinks?','Caffeine Toxicity. Signs of caffeine overdose include nervousness, anxiety, restlessness, insomnia, nausea and vomiting. More serious symptoms of acute caffeine toxicity include tremors, tachycardia or rapid heart rate, psychomotor agitation, high blood pressure, heart palpitations, dizziness, numbness and fainting.'),(9,'Why do energy drinks make you have to pee?','Caffeine is a diuretic, which means that it will make you have to urinate (pee) more often. ... Caffeine can also cause certain medical conditions, such as heart problems, to become worse. Although it is uncommon, extremely high intake of caffeine from energy drinks has been linked to some deaths in teenagers.'),(10,'Can you get cancer from energy drinks?','Although there is no scientific link between energy drinks and cancer, doctors advise against consuming too much caffeine and sugar, both of which are main ingredients in energy drinks. Research finds that adults should have only one serving per day.'),(11,'Can energy drinks cause liver damage?','Drinking too many energy drinks can hurt your liver. Pounding too many energy drinks could wreck your liver — just as much as too many beers. A 50-year-old construction worker developed acute hepatitis, likely from gulping up to five energy drinks a day for three weeks, according to a BMJ Case Report released Tuesday.'),(12,'Can you get kidney stones from energy drinks?','Calcium Oxalate. ... Energy drinks and other caffeinated beverages like coffee, tea and soda contain oxalate. Nuts, spinach and chocolate also have oxalates. Drinking a lot of energy drinks, especially in combination with other drinks and foods that contain oxalates, increases your chances of developing kidney stones.'),(13,'How long does it take for an energy drink to wear off?','It only takes 45 minutes for 99% of the caffeine to be absorbed through these membranes. In humans, the half-life for caffeine is anywhere from 4 to 6 hours on average, which explains why the average energy drink or coffee\'s effect lasts about 4 to 6 hours.'),(14,'Can too much caffeine cause depression?','Also, anxiety and depression often occur together, and caffeine can worsen anxiety. Stopping abruptly can worsen depression. If you regularly drink caffeinated beverages, quitting can cause a depressed mood until your body adjusts. It can also cause other signs and symptoms, such as headaches, fatigue and irritability.'),(15,'Which is better for you Pepsi or Coke?','Pepsi is sweeter than Coke, so right away it had a big advantage in a sip test. Pepsi is also characterized by a citrusy flavor burst, unlike the more raisiny-vanilla taste of Coke. ... Turning to nutritional content, Pepsi has slightly more sugar, calories, and caffeine. Coke has slightly more sodium.'),(16,'',NULL);
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'energy_drinks'
--

--
-- Dumping routines for database 'energy_drinks'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-11 23:21:24
