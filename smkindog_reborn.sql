/*
SQLyog Enterprise v12.5.1 (64 bit)
MySQL - 10.4.8-MariaDB : Database - smkindog_reborn
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`smkindog_reborn` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `smkindog_reborn`;

/*Table structure for table `guru` */

DROP TABLE IF EXISTS `guru`;

CREATE TABLE `guru` (
  `nip` varchar(16) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `alamat_guru` text NOT NULL,
  `sts_guru` int(1) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `guru` */

insert  into `guru`(`nip`,`nama_guru`,`alamat_guru`,`sts_guru`) values 
('1001940058898418','Gary Clark','96336 Perez Rapids\nPort Pamela, NV 12409',1),
('1029785423404671','Christopher Clay','47938 Morgan Locks\nBonillashire, NE 14717',1),
('1035625528742986','Laura Scott','2326 Jeremy Summit\nDiazfort, AR 43494',1),
('1057964811680742','Cathy Madden','8231 Jacqueline Flat\nNew Kimberly, IA 66295',1),
('1081271752875558','Aaron Wilkins','34943 James Fields Suite 955\nCuevasfort, NJ 28390',1),
('1086494176611515','Pamela Green','2999 Wiley Station Suite 671\nHollyton, MA 12462',1),
('1141662567289525','Susan Cisneros','1634 Perez Brook\nNorth Marie, CT 40560',1),
('1158878428990594','Christopher Suarez','77753 Collins Alley\nMarilynshire, HI 86062',1),
('1202643716009448','Jason Stewart','67702 Amy Lights\nNew Matthewbury, NM 13768',1),
('1213173805720194','Daniel Castro','3191 Michael Land\nNicholasbury, MD 37316',1),
('1218130736150115','Amy Dominguez','PSC 9401, Box 7929\nAPO AP 14912',1),
('1228119790453284','Francisco Miles','633 Louis Forges\nWest Kelliport, CT 89338',1),
('1228519324648644','Charles Miller','45151 Jones Cliff\nWilliamfurt, CT 34245',1),
('1244320532621983','Jeff Forbes','3705 Tucker Rapid\nNelsonbury, MO 04955',1),
('1245969683021872','Bryan Harvey','15913 Hardy Well\nLake Rachelberg, SD 67296',1),
('1260473794839410','Jonathan Durham','699 Diaz Points\nKellyton, VA 17848',1),
('1265557052657299','Ashley Chandler','304 Robert Viaduct\nDavisfurt, GA 44423',1),
('1268513480577285','Troy Stewart','41244 Mcbride Route\nGaryhaven, WA 49897',1),
('1270434535620423','Jeffrey Ewing','1112 Linda Road\nLake Joshuamouth, MD 99092',1),
('1298835026590556','Frederick Boyd','00414 Jonathan Pass\nEbonybury, NM 60937',1),
('1302124761139465','Tracy Hartman','PSC 9968, Box 3113\nAPO AA 92480',1),
('1305726839235932','Gary Reyes','330 Yvonne Stravenue\nPort Josephview, OR 19784',1),
('1310901882870010','Jeff Jenkins','7568 Kaitlyn Crossing Apt. 308\nNew Terriborough, SC 35307',1),
('1325831007202678','Annette Barnes','79082 Robinson Crest\nKellyside, AK 83312',1),
('1358290391170554','Joseph Brown','625 David Camp\nToddberg, NJ 59853',1),
('1360873655362884','Jason Lopez','963 Kaitlyn Mountains Suite 000\nMorganburgh, ME 60653',1),
('1392371148175479','Donald Davenport','83039 Shannon Green\nNew Amandabury, VA 46147',1),
('1395972293627461','Tiffany Oconnor','20475 Garcia Isle Suite 371\nMarshallport, VA 27783',1),
('1407150041475852','Dalton Ortiz','499 Salazar Wells Suite 370\nSouth Robinview, TX 20501',1),
('1451638886322412','Brian Koch','223 Matthew Mills\nEast Amymouth, CT 44682',1),
('1479484233563362','Joanna Ramos','487 Glenn Route\nHollandview, KS 89627',1),
('1503053493605753','Debbie Thomas','27641 Perry Fords Apt. 123\nPattersonside, VT 62545',1),
('1529105251602163','Samuel Berger','34034 Bullock Fords\nWalkerland, CA 26889',1),
('1531489906058436','Bryan Gibson','335 Kathryn Corners Suite 264\nSouth John, SD 15292',1),
('1534996396534091','Kenneth Harper','748 Cynthia Mount\nClintonton, ID 32018',1),
('1551473681626649','Laura Fuentes','13032 John Station Apt. 924\nPort Brian, CA 83383',1),
('1566357633779816','Tiffany Martin','29713 Morgan Causeway Apt. 852\nPort Richardside, CO 52082',1),
('1603083531501861','Rebecca Bryant','USS Huynh\nFPO AA 42062',1),
('1639698226739544','Philip Osborne','2180 Timothy Viaduct Suite 785\nMariaborough, WY 61125',1),
('1643590549068291','Chelsea Howard','6213 Ryan Haven\nFaulknerchester, SD 26243',1),
('1652617651477300','Susan Larson','PSC 4326, Box 2408\nAPO AP 58540',1),
('1657321982546952','James Skinner','93763 Russell Centers Apt. 901\nVelazquezfort, FL 38209',1),
('1664354609904296','Joshua Green','73219 Brian Meadow\nJosephville, WY 44178',1),
('1676676773487910','Dawn Peterson','5563 Keller Village Apt. 247\nGonzalezfort, DC 68619',1),
('1719230463790821','Cindy Bell','645 Stevens Cape\nEast Eric, WA 73492',1),
('1724022725029413','Juan Barton','038 Carter Wall\nCharlesville, KS 40723',1),
('1724843268015577','Jeffrey Adkins','634 Sarah Lock Suite 511\nNorth Darrenborough, SD 60641',1),
('1758397072242288','Mr. William Sellers MD','11201 Myers Throughway Suite 530\nRoweshire, PA 47734',1),
('1766316700293044','Rachel Davis','92820 Tyler Pike Suite 963\nNew Timothyborough, SC 01734',1),
('1786167177955571','Joseph Melendez','79453 Reed Spur\nSouth Jimmyhaven, AK 10324',1),
('1791674973432680','James May','985 Evan Valleys\nSaundersview, CA 95539',1),
('1802113296839239','Kevin Zuniga','53969 Miller Alley Suite 193\nEast Karen, PA 74473',1),
('1807246054087763','Stephen Cameron','31826 Heather Turnpike\nPort Charlotte, WV 15389',1),
('1814246353888381','Ruben Aguilar','769 Jose Lights Apt. 509\nPort Denise, WA 09623',1),
('1823119113118205','Mary Harris','553 Long Crest Apt. 988\nHeathchester, HI 54931',1),
('1875417079596024','Paul Tucker','312 Rogers Turnpike Apt. 978\nWardport, HI 24225',1),
('1876892441908546','Jennifer Mills','111 Christopher Brooks\nHowardton, IN 80435',1),
('1891886559138388','Haley Armstrong','12060 Rogers Lodge\nPeterhaven, IA 14387',1),
('1920970511765600','Robert Reed','7984 Johnson Mountains Apt. 192\nWest Marcton, OH 48546',1),
('1932905977487791','Brenda Davidson','2724 Avery Light\nPort Barry, WY 23154',1),
('1937116403617166','Jose Gordon','7698 Chelsea Light\nSouth Stacyberg, ID 17675',1),
('1950851921134562','Derek Tran','PSC 7259, Box 6001\nAPO AP 91874',1),
('1956304320258951','Frank Smith','27101 Sanders Keys\nNew Bernardmouth, OR 66160',1),
('1968527470377992','Kenneth Green','362 Christopher Crossroad\nLake Keith, NJ 49569',1),
('1991125613246640','Melinda Rodriguez','16539 Stephanie Passage Apt. 244\nAndrewmouth, SC 53293',1),
('1994540151995277','Emily Blankenship','7361 Jones Extensions\nMuellerhaven, NY 15202',1),
('2433980925178265','Amber Davis','6598 Vaughn Ways\nBookermouth, NV 87666',1),
('2562766320085114','Cody Pena','4945 Amber Ridge\nEast Crystal, OR 44689',1),
('2961452078571044','Christy Snyder','1067 Peter Forks\nRobertfort, KY 70596',1),
('3111709084737590','Brandon Smith','49181 Joel Oval Suite 363\nNew Davidside, IL 62007',1),
('3117081299801032','Whitney Fischer','27556 Greg Way Suite 270\nZacharychester, OR 57875',1),
('3249943047929369','Scott Bailey','396 Robert Meadows Suite 510\nNew Samantha, WI 81884',1),
('33333','RRRRRWW','aaaCCX',1),
('4137559684123789','Sydney Frazier','15158 Anthony Turnpike Suite 570\nSouth Christopher, GA 21172',1),
('4431881530225255','Ryan Garrison','PSC 9024, Box 7891\nAPO AA 14534',1),
('4570106061161118','Brian Farmer','285 Simon Route Suite 082\nSouth Kelliburgh, WA 40225',1),
('4784734500348701','Stacy Lowery','415 Wendy Glens\nGutierrezview, WV 64665',1),
('4865837407855150','Eric Brown','28387 Williams Causeway\nLaraview, AL 43234',1),
('5039937138474029','Jason Burgess','4895 Anita Underpass\nRobertstad, PA 80886',1),
('5068606675497405','Richard Jones','1433 Rose Flat Apt. 459\nSparkshaven, KS 77032',1),
('5298667542426783','Mark Harrison','717 Schultz Glens Apt. 191\nSummersborough, IL 92989',1),
('5313880228439686','Rebecca Ryan','8147 Monroe Station\nPort Chelseamouth, LA 43451',1),
('6065387483956838','Margaret Herring','6082 Barnett Centers Apt. 940\nPort Mary, MD 29731',1),
('6327207646396535','Diana King','17878 Amy Ranch\nAnnettemouth, OK 36781',1),
('6374732804414343','Adrian Williams','844 Velasquez Spring\nStevensshire, WI 02700',1),
('6913525909606645','Michael Wood','63939 Barker Pike\nNew Erica, AK 97023',1),
('6945969645867643','Courtney Miller','6075 Holt Manors\nEast Sarah, NJ 63409',1),
('6969240993900060','Kimberly Stephens','294 Benjamin Inlet Suite 032\nLake Rebekahport, FL 21605',1),
('7347725415316310','Andrea Wood','129 Sharon Overpass Suite 216\nNew Susan, SD 03980',1),
('7609249122985282','Steven Baker','979 Rogers Heights\nEast Cassandra, GA 61410',1),
('7666832098191714','Danielle Anderson','50889 Wood Port\nNorth Valerieburgh, TN 76088',1),
('777','rehan','nax acro',1),
('8130577686391023','David Rogers','029 Khan Cliff Suite 284\nMendezmouth, LA 61787',1),
('8387876892958652','Jose Farrell','66612 Kristen Junction Suite 452\nBryanton, WI 29764',1),
('8555956497116308','Richard Lewis','00883 Guerra Street\nToddville, VA 51271',1),
('8605300123014807','Stephen Brown','378 Jones Circles\nSarahfurt, ME 13126',1),
('8719937444433008','Jeffrey Schroeder','5443 Middleton Views\nEast Maria, NC 99429',1),
('888','hanan','pomad',0),
('9068446896257279','Catherine Wright','9628 Boyd Groves\nAliciaberg, AZ 44087',1),
('9281675439479231','Carlos Erickson','USCGC Smith\nFPO AA 35225',1),
('9297675661472186','Mitchell Williams','89427 Matthew Unions\nMartinside, HI 85885',1),
('9457806856356160','Melanie Garcia','878 Jenkins Well\nEast Stephanieberg, DC 92736',1),
('9458537426932281','Renee Weber','027 Kenneth Dale Apt. 296\nWest Randall, OR 21960',1);

/*Table structure for table `jadwal` */

DROP TABLE IF EXISTS `jadwal`;

CREATE TABLE `jadwal` (
  `id_jdwl` int(11) NOT NULL AUTO_INCREMENT,
  `id_mg` int(11) NOT NULL,
  `kode_kelas` int(11) NOT NULL,
  `sts_jadwal` int(1) NOT NULL,
  PRIMARY KEY (`id_jdwl`),
  KEY `id_mg` (`id_mg`),
  KEY `kode_kelas` (`kode_kelas`),
  CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_mg`) REFERENCES `mapel_guru` (`id_mg`),
  CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `jadwal` */

insert  into `jadwal`(`id_jdwl`,`id_mg`,`kode_kelas`,`sts_jadwal`) values 
(1,8,1,1),
(2,1,27,1),
(3,5,1,1),
(4,3,27,1),
(5,8,28,1);

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `kode_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `kode_prodi` varchar(5) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `ket` varchar(1) NOT NULL,
  `sts_kelas` int(1) NOT NULL,
  PRIMARY KEY (`kode_kelas`),
  KEY `kode_prodi` (`kode_prodi`),
  CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`kode_prodi`) REFERENCES `prodi` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `kelas` */

insert  into `kelas`(`kode_kelas`,`kode_prodi`,`kelas`,`ket`,`sts_kelas`) values 
(1,'MM','X','1',1),
(2,'MM','X','2',1),
(3,'MM','X','3',1),
(4,'MM','XI','1',1),
(5,'MM','XI','2',1),
(6,'MM','XI','3',1),
(7,'MM','XII','1',1),
(8,'MM','XII','2',1),
(9,'MM','XII','3',1),
(10,'TKJ','X','1',1),
(11,'TKJ','X','2',1),
(12,'TKJ','X','3',1),
(13,'TKJ','XI','1',1),
(14,'TKJ','XI','2',1),
(15,'TKJ','XI','3',1),
(16,'TKJ','XII','1',1),
(17,'TKJ','XII','2',1),
(18,'TKJ','XII','3',1),
(19,'RPL','X','1',1),
(20,'RPL','X','2',1),
(21,'RPL','X','3',1),
(22,'RPL','XI','1',1),
(23,'RPL','XI','2',1),
(24,'RPL','XI','3',1),
(25,'RPL','XII','1',0),
(26,'RPL','XII','2',1),
(27,'RPL','XII','3',1),
(28,'TOI','XI','2',1);

/*Table structure for table `kelas_siswa` */

DROP TABLE IF EXISTS `kelas_siswa`;

CREATE TABLE `kelas_siswa` (
  `id_ks` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(10) NOT NULL,
  `kode_kelas` int(11) NOT NULL,
  `sts_ks` int(1) NOT NULL,
  PRIMARY KEY (`id_ks`),
  KEY `nis` (`nis`),
  KEY `kode_kelas` (`kode_kelas`),
  CONSTRAINT `kelas_siswa_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`),
  CONSTRAINT `kelas_siswa_ibfk_2` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `kelas_siswa` */

insert  into `kelas_siswa`(`id_ks`,`nis`,`kode_kelas`,`sts_ks`) values 
(1,'1011428728',1,1),
(3,'1027362790',27,1),
(4,'1116305381',18,1),
(5,'1025314486',1,1),
(6,'1095188602',28,1);

/*Table structure for table `mapel` */

DROP TABLE IF EXISTS `mapel`;

CREATE TABLE `mapel` (
  `kode_mapel` varchar(5) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL,
  `sts_mapel` int(1) NOT NULL,
  PRIMARY KEY (`kode_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mapel` */

insert  into `mapel`(`kode_mapel`,`nama_mapel`,`sts_mapel`) values 
('BINDO','Bahasa Indonesia',1),
('BING','Bahasa Inggris',1),
('IPA','Ilmu Pengetahuan AlamAA',1),
('MTK','Matematika',1);

/*Table structure for table `mapel_guru` */

DROP TABLE IF EXISTS `mapel_guru`;

CREATE TABLE `mapel_guru` (
  `id_mg` int(11) NOT NULL AUTO_INCREMENT,
  `kode_mapel` varchar(5) NOT NULL,
  `nip` varchar(16) NOT NULL,
  `sts_mg` int(1) NOT NULL,
  PRIMARY KEY (`id_mg`),
  KEY `kode_mapel` (`kode_mapel`),
  KEY `nip` (`nip`),
  CONSTRAINT `mapel_guru_ibfk_1` FOREIGN KEY (`kode_mapel`) REFERENCES `mapel` (`kode_mapel`),
  CONSTRAINT `mapel_guru_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `mapel_guru` */

insert  into `mapel_guru`(`id_mg`,`kode_mapel`,`nip`,`sts_mg`) values 
(1,'BINDO','1001940058898418',1),
(2,'BINDO','1029785423404671',1),
(3,'BING','1001940058898418',1),
(4,'BING','1035625528742986',1),
(5,'MTK','1029785423404671',1),
(6,'MTK','1035625528742986',1),
(7,'BINDO','888',1),
(8,'BING','777',1);

/*Table structure for table `nilai` */

DROP TABLE IF EXISTS `nilai`;

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_mg` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `uh` int(3) NOT NULL,
  `uts` int(3) NOT NULL,
  `uas` int(3) NOT NULL,
  `na` varchar(5) NOT NULL,
  `sts_nilai` int(1) NOT NULL,
  PRIMARY KEY (`id_nilai`),
  KEY `id_mg` (`id_mg`),
  KEY `nis` (`nis`),
  CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_mg`) REFERENCES `mapel_guru` (`id_mg`),
  CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `nilai` */

insert  into `nilai`(`id_nilai`,`id_mg`,`nis`,`uh`,`uts`,`uas`,`na`,`sts_nilai`) values 
(1,8,'1011428728',90,90,90,'90',1),
(2,8,'1025314486',80,80,80,'80',0),
(3,8,'1025314486',78,87,98,'87.66',1),
(4,1,'1027362790',80,90,70,'80',1);

/*Table structure for table `prodi` */

DROP TABLE IF EXISTS `prodi`;

CREATE TABLE `prodi` (
  `kode_prodi` varchar(5) NOT NULL,
  `nama_prodi` text NOT NULL,
  `sts_prodi` int(1) NOT NULL,
  PRIMARY KEY (`kode_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `prodi` */

insert  into `prodi`(`kode_prodi`,`nama_prodi`,`sts_prodi`) values 
('MM','Multimedia',1),
('RPL','Rekayasa Perangkat Lunak',1),
('TKJ','Teknik Komputer & Jaringan',1),
('TOI','Teknik Otomatis Industri',1);

/*Table structure for table `siswa` */

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `nis` varchar(10) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `sts_siswa` int(1) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `siswa` */

insert  into `siswa`(`nis`,`nama_siswa`,`alamat_siswa`,`sts_siswa`) values 
('1011428728','Mark Miller','4734 Kevin Mount Apt. 101\nKennethmouth, OK 72551',1),
('1025314486','Amanda Mcdonald','08465 Kayla Crest Suite 672\nKarihaven, AZ 75362',1),
('1027362790','Jordan Jensen','PSC 9851, Box 3906\nAPO AE 63500',1),
('1028196418','Joshua Juarez','945 Thomas Highway Suite 338\nRonnieland, ME 73712',1),
('1046184264','Javier Miller','6910 Miller Cape Suite 546\nMeadowshaven, NC 08617',1),
('1062639113','Heather Hernandez','338 Marilyn Terrace Apt. 528\nDyerberg, AK 74621',1),
('1063428393','Debra Hartman','156 Sarah Mews Suite 301\nEast Laurie, AR 34032',1),
('1066313892','Ian Garcia','984 Brooks Mountain\nSarahtown, IN 81413',1),
('1070981595','Karen Washington','USNS Morgan\nFPO AP 23920',1),
('1075815767','Amanda Kline','1458 Christopher Valley\nPort Brianchester, NH 40504',1),
('1081162103','Douglas White','09236 Gonzales Loop Apt. 778\nMckeeborough, MO 82227',1),
('1093335638','Sarah Roberts','05433 Johnson Neck\nRobertsview, TN 93002',1),
('1095188602','Steven Martin','3614 Hernandez Coves\nLopezside, SC 96866',1),
('11','MrGGWF','jauhh bgt sklS\r\n        ',1),
('1111873801','Jerry Kane','8685 Goodwin Mall\nBrendamouth, DE 14636',1),
('1116305381','Angela Snyder','52289 Ray Hollow Suite 536\nPort Davidville, DE 36918',1),
('1120873183','Stefanie Mendez','6064 Shawn Port\nSouth Tiffany, PA 45980',1),
('1121374651','Allison Brown','262 Christensen Squares\nRobertfort, WA 64349',1),
('1128397737','Philip Drake','USCGC Huff\nFPO AE 59718',1),
('1147615227','Jonathan Cox','34543 Walker Cliffs\nPort Cory, MN 46556',1),
('1154912864','William Maxwell','008 Smith Street Suite 764\nBrendafurt, MI 63631',1),
('1162836967','Gregory James','2139 Sean Village Suite 426\nPatrickside, NM 72532',1),
('1180423944','Christina Walker','1778 William Centers\nNew Paulville, DE 73125',1),
('1183998683','Thomas Rivera','PSC 4309, Box 8530\nAPO AE 99531',1),
('1194110949','Juan Curry','94178 Garza Square Suite 529\nSouth Jackson, ND 09028',1),
('1199408948','Sabrina Alexander','63597 David Trail\nNew Chelsea, KS 44814',1),
('1203156716','Christine Lopez','8473 Santos Street Suite 941\nPort Tina, ME 45817',1),
('1204842579','Gary Clark','272 Jeffrey Centers Apt. 060\nChristopherside, IN 05910',1),
('1231270303','Shannon Cantu','267 Jessica Island\nJameschester, NJ 17766',1),
('1260653803','Renee Martinez','1854 Lucas Cape Apt. 089\nSarahmouth, MI 69217',1),
('1263626909','Michelle Richardson','3073 Adam Lodge\nCodymouth, KS 14870',1),
('1267616742','Sandra Dorsey DVM','917 Santos Valley\nLake Ashleymouth, CO 63557',1),
('1267843789','Alicia Taylor','4168 Brian Ways Apt. 972\nHooverbury, NE 16174',1),
('1280537549','Valerie Davis','33199 Mcconnell Path Suite 185\nLiland, ME 29382',1),
('1293742891','Rachel Alvarado','6744 Dominguez Lights Suite 941\nOrtegahaven, NM 40928',1),
('1314234787','Carol Keith MD','901 Rose Port Apt. 580\nMichaelborough, MS 07583',1),
('1323889063','Kyle Taylor','289 Kathy Row Suite 598\nPort Christina, IN 90616',1),
('1346907392','John Brown','2626 Stone Inlet\nKellytown, AR 35770',1),
('1351331465','Kevin Davis','Unit 3534 Box 2145\nDPO AA 08418',1),
('1352285213','Derrick Young','86460 Monica Center Apt. 570\nVargasview, NE 19251',1),
('1353272385','Sara Miller','3871 Williams Curve Suite 855\nLake Angela, WI 91116',1),
('1361002449','Sean Williams','7774 Rebecca Branch Suite 697\nChandlerview, WV 34624',1),
('1381803781','Jessica Parrish','6455 Melissa Drive Suite 265\nFrankton, UT 17066',1),
('1385491783','Christopher Jackson','8357 Jeremiah Rapid\nSouth Brookechester, NY 62379',1),
('1397958567','Mario Maldonado','2825 Ian Courts Apt. 050\nNorth Meganfort, MD 15533',1),
('1400470873','Andrea Edwards','91729 Tonya Streets Suite 076\nGibbsbury, KS 42741',1),
('1415642412','Jennifer Cohen','751 Julia Cape\nNicholasside, SD 06267',1),
('1421025142','Thomas Johnson','538 Brown Village\nShawnbury, NJ 15703',1),
('1432294489','Jay Jones','17871 Brown Ports Suite 103\nNew Beckyville, AK 75400',1),
('1467152218','Paul Dunn','579 Pamela Park\nLeehaven, CA 10283',1),
('1481733655','Rebecca Davila','4837 Davis Avenue\nAndrewburgh, TN 91507',1),
('1503570188','Nichole Miller','41996 Best Brooks\nNorth Jacob, WV 44489',1),
('1506718936','Glenda Jackson','17823 Michael Union\nNorth Heather, CT 43992',1),
('1512065119','Emma Williams','8904 Bryant Crossroad\nLake Christinechester, MT 40480',1),
('1513626385','Paula Anderson','0004 Henderson Path Suite 747\nEast Cindybury, OK 18651',1),
('1516974694','Tracy Johnston','71699 Sean Ford\nPhillipton, WA 98035',1),
('1524323318','Suzanne Smith','4211 Chad Mountain\nNew Michael, NH 92212',1),
('1525511899','Danielle Gonzalez','190 Welch Rest Suite 211\nLake Elizabeth, NJ 05993',1),
('1533128676','Robert Rubio','184 Payne Motorway Suite 060\nLamberttown, MA 27887',1),
('1549504779','Thomas Dunn','Unit 6033 Box 0353\nDPO AA 75949',1),
('1552707542','James Anderson','957 Martin Plains\nSmithmouth, KY 01730',1),
('1566770183','Kimberly Velasquez','7303 Alexander Union Suite 059\nNew Laurafort, VT 93518',1),
('1570059771','Sarah Hall','PSC 8378, Box 8312\nAPO AA 96841',1),
('1586422212','Jennifer Davis','68081 Kenneth Expressway\nRichardfort, NC 59826',1),
('1594585285','Michael Swanson','6504 Paul Street\nFowlerchester, TN 09894',1),
('1616614897','Emily Gallegos','323 Robert Mill\nLake Sarahborough, SC 94568',1),
('1622879063','Toni Sandoval','1454 Jasmine Walk\nPort Sherryfort, MD 72837',1),
('1639529165','Donald Rosales','543 Amy Creek Apt. 794\nPort Tiffany, SD 82345',1),
('1640996265','Krista Lopez','5531 Travis Prairie Suite 608\nCorytown, AK 28321',1),
('1648588456','Christy Duffy','5012 Alice Locks\nPort Christophershire, ME 19140',1),
('1653358780','Megan Valdez','62864 White Forges\nGaryhaven, NE 23970',1),
('1655356936','Jenny Rangel','6567 James Motorway\nSouth Seantown, WI 35744',1),
('1659533504','Michael Dawson','74458 Jackson Lake\nRivasside, NM 18424',1),
('1661190604','Jessica Peterson','936 Lewis Isle\nMichaelfort, FL 33998',1),
('1670021768','Tyler Joyce','69613 Kimberly Shoals Apt. 832\nChristinaville, WY 54955',1),
('1672987636','Jenny Foley','955 Kennedy Light\nPettychester, VA 76683',1),
('1690132288','Jennifer Peterson','0714 Taylor Landing\nWest Alexisport, VA 65329',1),
('1698000535','Jacqueline Smith','524 Ryan Mission\nWest Joseburgh, KY 34666',1),
('1705530129','Kelsey Jones','4889 Reginald Mission\nRobertstad, DE 57061',1),
('1737168938','Richard Carr','129 Deborah Inlet Apt. 467\nEast Danielle, HI 84894',1),
('1741474267','Ashley Mccoy','221 William Mountain\nWest Felicia, RI 26125',1),
('1754113763','Daniel Robinson','9132 Ellis Cliffs\nLake Stephanie, DC 54380',1),
('1766010939','Shawn Torres','33134 Lee Parkways\nCaseyview, CA 15092',1),
('1779112765','Gary Huff','68635 Phillips Freeway\nMichaelmouth, MA 47005',1),
('1784735313','Noah Reyes','87797 Johnson Shoal Apt. 119\nHeathermouth, MD 80945',1),
('1788864352','Andrea Brown','3062 Vargas Falls\nJenniferfort, NE 79989',1),
('1791112707','Andrew Payne','60989 Hutchinson Terrace\nHaleyfort, MD 47417',1),
('1796651997','Cassandra Hull','3419 Burch Summit Apt. 478\nCatherinefurt, AL 30663',1),
('1821355639','Christian Ortega','075 Fuentes Drive\nLake Kennethburgh, NH 99324',1),
('1825599164','Philip Welch','10227 Matthew Street Suite 938\nWest Ryan, WV 34773',1),
('1870267321','Amy Johnson','6041 Michael Corners\nDiazhaven, MN 58826',1),
('1877357955','Miss Jennifer Everett','9215 Jared Highway Apt. 289\nNorth Jill, UT 28929',1),
('1889164827','Amy Wright','43032 Ann Trafficway\nWest Victoriaberg, NJ 70025',1),
('1908498405','Taylor Sullivan','79413 Barker Centers\nNew Steven, AL 88394',1),
('1912886647','David Price','0116 Strong Corners\nNorth Karichester, CO 12769',1),
('1922579136','Anna Snyder','5499 Sabrina Flat Apt. 986\nPort Shannon, NJ 72913',1),
('1940492398','Morgan Vazquez','18538 Wilson Square\nShepherdfort, NH 05859',1),
('1960152438','Latasha James','55325 Johnson Extensions Suite 903\nMatthewton, HI 70949',1),
('1975660149','Cindy Wallace','325 Boyle Motorway Suite 046\nSnyderbury, GA 12488',1),
('1979943845','Sandra Reeves','68283 Morris Burg\nPort Christopherberg, IL 53233',1),
('1991926817','Kathryn Chung','78153 Yolanda Meadows\nWest Kathleenland, OR 91918',1),
('22','MrQQ','jauhh lahh pokonya\r\n        ',1),
('2367','ini adalah nama','jauhh sekali',1),
('78689ygggs','HU','GUGU',0);

/*Table structure for table `tbl_log` */

DROP TABLE IF EXISTS `tbl_log`;

CREATE TABLE `tbl_log` (
  `apa` text DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `ket1` text DEFAULT NULL,
  `ket2` text DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_log` */

insert  into `tbl_log`(`apa`,`ket`,`ket1`,`ket2`,`tgl`) values 
('INSERT NILAI','1027362790',NULL,NULL,'2020-03-18 19:29:52');

/*Table structure for table `userprofile` */

DROP TABLE IF EXISTS `userprofile`;

CREATE TABLE `userprofile` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `sts_user` int(1) NOT NULL,
  `nip` varchar(16) DEFAULT NULL,
  `nis` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `userprofile` */

insert  into `userprofile`(`username`,`password`,`level`,`sts_user`,`nip`,`nis`) values 
('abjectMagpie6','123',2,1,'1358290391170554',''),
('aboardBoa0','123',2,1,'1807246054087763',''),
('aboardPear7','123',3,1,'','1766010939'),
('aboardRuffs5','123',3,1,'','1788864352'),
('admin','123',1,1,NULL,NULL),
('adoringCheese6','123',3,1,'','1203156716'),
('adoringPepper0','123',3,1,'','1991926817'),
('affectedClam6','123',3,1,'','1180423944'),
('alertApples9','123',2,1,'1766316700293044',''),
('alertDotterel0','123',3,1,'','1659533504'),
('alertWhiting9','123',2,1,'1814246353888381',''),
('aloofCockatoo6','123',2,1,'6913525909606645',''),
('aloofFish4','123',2,1,'8387876892958652',''),
('aloofOryx6','123',2,1,'6374732804414343',''),
('amusedUnicorn7','123',2,1,'1531489906058436',''),
('annoyedTermite8','123',2,1,'1158878428990594',''),
('ardentPorpoise7','123',3,1,'','1698000535'),
('ardentPup1','123',3,1,'','1784735313'),
('ardentRaisins7','123',3,1,'','1128397737'),
('artisticMackerel4','123',3,1,'','1111873801'),
('artisticTermite9','123',3,1,'','1594585285'),
('awedCod5','123',2,1,'1652617651477300',''),
('awedFish0','123',2,1,'1302124761139465',''),
('awedMuesli6','123',2,1,'8719937444433008',''),
('betrayedPepper9','123',3,1,'','1566770183'),
('blissfulBasmati6','123',2,1,'1937116403617166',''),
('blissfulWigeon4','123',3,1,'','1796651997'),
('boredCardinal5','123',2,1,'1270434535620423',''),
('boredCoconut2','123',3,1,'','1194110949'),
('boredLard8','123',2,1,'9297675661472186',''),
('brainyMagpie4','123',2,1,'2433980925178265',''),
('bubblyChough4','123',3,1,'','1093335638'),
('bubblyRat9','123',3,1,'','1661190604'),
('cautiousCoconut8','123',2,1,'6327207646396535',''),
('cheerfulGelding2','123',3,1,'','1940492398'),
('chicLion5','123',2,1,'1086494176611515',''),
('cockyOryx1','123',2,1,'1202643716009448',''),
('cockyPonie3','123',3,1,'','1147615227'),
('cockySnipe5','123',2,1,'1657321982546952',''),
('cockyVenison0','123',3,1,'','1552707542'),
('contentFalcon4','123',2,1,'1956304320258951',''),
('contentRuffs4','123',2,1,'1392371148175479',''),
('contentSmelt4','123',2,1,'7347725415316310',''),
('crummyEland7','123',3,1,'','1183998683'),
('crummyLeopard4','123',3,1,'','1639529165'),
('crushedUnicorn2','123',2,1,'3117081299801032',''),
('culturedHyena3','123',3,1,'','1640996265'),
('culturedSausage3','123',3,1,'','1199408948'),
('curiousHoopoe2','123',2,1,'9457806856356160',''),
('cynicalLapwing7','123',2,1,'1245969683021872',''),
('cynicalVenison1','123',3,1,'','1400470873'),
('cynicalWeaver4','123',2,1,'5298667542426783',''),
('dearBittern2','123',3,1,'','1690132288'),
('dearBustard3','123',2,1,'5313880228439686',''),
('debonairBass0','123',3,1,'','1672987636'),
('dejectedEggs7','123',3,1,'','1028196418'),
('dejectedTortoise3','123',2,1,'1503053493605753',''),
('drearyOrange9','123',3,1,'','1506718936'),
('drearyPear4','123',2,1,'1786167177955571',''),
('eang','123',2,1,'777',NULL),
('ecstaticDoves4','123',2,1,'1260473794839410',''),
('empathicCheetah6','123',2,1,'1676676773487910',''),
('empathicTomatoe8','123',2,1,'1758397072242288',''),
('emptyFlamingo5','123',3,1,'','1011428728'),
('emptyMoth3','123',2,1,'9458537426932281',''),
('emptySnail5','123',3,1,'','1655356936'),
('enragedGranola2','123',2,1,'8130577686391023',''),
('enragedLemur0','123',3,1,'','1516974694'),
('enviousCamel8','123',3,1,'','1524323318'),
('enviousDinosaur8','123',2,1,'9281675439479231',''),
('euphoricIcecream0','123',2,1,'1298835026590556',''),
('excitedPoultry9','123',3,1,'','1791112707'),
('excitedRuffs0','123',3,1,'','1586422212'),
('excitedWhiting3','123',3,1,'','1653358780'),
('excludedAbalone4','123',2,1,'4784734500348701',''),
('excludedIcecream6','123',2,1,'1228119790453284',''),
('excludedOryx6','123',3,1,'','1267843789'),
('excludedRelish7','123',2,1,'1325831007202678',''),
('ferventChowder3','123',2,1,'7666832098191714',''),
('ferventLizard9','123',3,1,'','1670021768'),
('finickyTortoise0','123',3,1,'','1260653803'),
('forsakenLeopard4','123',2,1,'1213173805720194',''),
('gg','12345QQQ',3,1,NULL,'11'),
('gleefulPolenta5','123',2,1,'1932905977487791',''),
('gloomyBuck6','123',3,1,'','1648588456'),
('goofyMallard2','123',3,1,'','1467152218'),
('goofyPiglet5','123',2,1,'1218130736150115',''),
('goofySardines8','123',2,1,'1664354609904296',''),
('grizzledMandrill1','123',2,1,'1035625528742986',''),
('grudgingSalami0','123',3,1,'','1432294489'),
('grudgingTacos0','123',3,1,'','1121374651'),
('grumpyBuck4','123',3,1,'','1063428393'),
('guiltyEggs8','123',3,1,'','1421025142'),
('gutturalSeagull4','123',2,1,'1081271752875558',''),
('gutturalViper8','123',2,1,'1529105251602163',''),
('hanz','123',2,1,'888',NULL),
('holisticPup3','123',3,1,'','1525511899'),
('humorousPup9','123',2,1,'6969240993900060',''),
('humorousWeaver1','123',2,1,'1534996396534091',''),
('importedBoa3','123',2,1,'1001940058898418',''),
('importedCheese2','123',2,1,'1603083531501861',''),
('importedMackerel5','123',2,1,'9068446896257279',''),
('ini adalah username','ini adalah password',3,1,NULL,'2367'),
('innocentApricots3','123',2,1,'1479484233563362',''),
('innocentCrane7','123',3,1,'','1741474267'),
('insecureJerky0','123',2,1,'1141662567289525',''),
('insecureLollies7','123',2,1,'4865837407855150',''),
('insecureSeagull3','123',3,1,'','1737168938'),
('jealousLizard4','123',3,1,'','1549504779'),
('jealousThrush0','123',2,1,'1265557052657299',''),
('joyfulTacos8','123',2,1,'2961452078571044',''),
('jubilantFerret6','123',3,1,'','1231270303'),
('jubilantKitten1','123',3,1,'','1922579136'),
('jubilantPepper9','123',3,1,'','1385491783'),
('jumpyDunbird0','123',2,1,'1875417079596024',''),
('jumpyGatorade4','123',3,1,'','1877357955'),
('jumpyHeron0','123',2,1,'1310901882870010',''),
('jumpyLlama4','123',2,1,'1719230463790821',''),
('kindCamel1','123',2,1,'1994540151995277',''),
('lazySalami9','123',2,1,'1395972293627461',''),
('lazyViper8','123',2,1,'2562766320085114',''),
('lovesickJerky7','123',2,1,'1551473681626649',''),
('lovesickViper3','123',3,1,'','1361002449'),
('lyingCheetah5','123',3,1,'','1351331465'),
('mellowCamel9','123',3,1,'','1533128676'),
('mercifulCamel1','123',3,1,'','1027362790'),
('mereOatmeal9','123',2,1,'1228519324648644',''),
('mereTortoise7','123',3,1,'','1754113763'),
('mildLeopard7','123',3,1,'','1081162103'),
('murkyCaribou3','123',2,1,'1991125613246640',''),
('murkyEagle8','123',3,1,'','1622879063'),
('murkyOtter2','123',3,1,'','1162836967'),
('murkyToucan6','123',3,1,'','1381803781'),
('needfulChamois7','123',3,1,'','1293742891'),
('needfulZebra5','123',3,1,'','1095188602'),
('needyFerret2','123',3,1,'','1705530129'),
('obsessedPoultry4','123',2,1,'8555956497116308',''),
('offendedBustard3','123',3,1,'','1889164827'),
('outlyingAbalone5','123',3,1,'','1415642412'),
('outlyingPaella6','123',2,1,'1057964811680742',''),
('pacifiedLion1','123',3,1,'','1154912864'),
('panickyFerret0','123',3,1,'','1908498405'),
('peacefulMagpie8','123',2,1,'1029785423404671',''),
('peskyApples2','123',2,1,'5039937138474029',''),
('peskyBittern2','123',3,1,'','1046184264'),
('peskyDotterel3','123',3,1,'','1280537549'),
('peskyOryx9','123',2,1,'1268513480577285',''),
('peskyRhino4','123',3,1,'','1912886647'),
('peskySnail9','123',2,1,'1643590549068291',''),
('pitifulAbalone2','123',3,1,'','1116305381'),
('pitifulCheese5','123',3,1,'','1503570188'),
('pluckyRice6','123',3,1,'','1570059771'),
('puzzledGranola8','123',2,1,'6945969645867643',''),
('puzzledSnipe9','123',3,1,'','1066313892'),
('qq','123',3,1,NULL,'22'),
('relievedBasmati2','123',3,1,'','1025314486'),
('resolvedGarlic8','123',2,1,'4431881530225255',''),
('rr','123d2',2,1,'33333',NULL),
('scornfulChile7','123',2,1,'1724843268015577',''),
('scornfulTuna3','123',3,1,'','1353272385'),
('selfishBustard5','123',3,1,'','1512065119'),
('selfishCoconut5','123',2,1,'5068606675497405',''),
('selfishRat7','123',2,1,'1950851921134562',''),
('shamefulApricots2','123',2,1,'6065387483956838',''),
('sheepishPudding4','123',2,1,'1305726839235932',''),
('sheepishRaisins9','123',3,1,'','1825599164'),
('sheepishShads7','123',3,1,'','1616614897'),
('shyDinosaur5','123',2,1,'1802113296839239',''),
('sincereSalami1','123',3,1,'','1779112765'),
('solemnEagle1','123',2,1,'1891886559138388',''),
('solemnGatorade0','123',3,1,'','1870267321'),
('solemnStork5','123',3,1,'','1314234787'),
('solidChamois2','123',3,1,'','1821355639'),
('solidHeron7','123',3,1,'','1070981595'),
('solidLard1','123',3,1,'','1960152438'),
('somberChowder4','123',3,1,'','1263626909'),
('somberTeal2','123',3,1,'','1120873183'),
('soreBuck7','123',2,1,'1451638886322412',''),
('spiritedBass6','123',2,1,'7609249122985282',''),
('sugaryFalcon0','123',3,1,'','1267616742'),
('superiorSnipe9','123',3,1,'','1204842579'),
('tautMussel4','123',3,1,'','1075815767'),
('tautWeaver1','123',2,1,'1360873655362884',''),
('thriftyCheese6','123',2,1,'4137559684123789',''),
('thrilledUnicorn4','123',2,1,'1791674973432680',''),
('troubledChowder3','123',3,1,'','1352285213'),
('troubledDove5','123',3,1,'','1975660149'),
('troubledFlamingo2','123',3,1,'','1323889063'),
('trustingGelding4','123',2,1,'1244320532621983',''),
('trustingOcelot6','123',2,1,'1823119113118205',''),
('trustingPlover3','123',3,1,'','1062639113'),
('trustingSwift4','123',2,1,'1724022725029413',''),
('VBHHVH]]]','0+===',3,1,NULL,'78689ygggs'),
('wakefulBuzzard3','123',2,1,'1566357633779816',''),
('wearyHawk2','123',2,1,'1920970511765600',''),
('wearyWhiting3','123',3,1,'','1513626385'),
('wingedChough0','123',2,1,'1876892441908546',''),
('wingedCordial5','123',2,1,'8605300123014807',''),
('wingedGnu9','123',3,1,'','1346907392'),
('worriedGnu9','123',3,1,'','1397958567'),
('worriedJerky5','123',2,1,'1639698226739544',''),
('wrathfulBoars3','123',2,1,'3249943047929369',''),
('wrathfulRhino7','123',2,1,'4570106061161118',''),
('yearningIguana1','123',2,1,'1407150041475852',''),
('yearningLard6','123',3,1,'','1481733655'),
('yearningPonie9','123',2,1,'3111709084737590',''),
('zestyClam7','123',3,1,'','1979943845'),
('zestyFerret4','123',2,1,'1968527470377992','');

/* Trigger structure for table `nilai` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `add_nilai` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `add_nilai` AFTER INSERT ON `nilai` FOR EACH ROW INSERT INTO tbl_log(apa, ket) VALUES("INSERT NILAI", new.nis) */$$


DELIMITER ;

/* Function  structure for function  `fun_siswa` */

/*!50003 DROP FUNCTION IF EXISTS `fun_siswa` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `fun_siswa`() RETURNS varchar(11) CHARSET utf8mb4
    NO SQL
RETURN "aaa" */$$
DELIMITER ;

/* Procedure structure for procedure `nama` */

/*!50003 DROP PROCEDURE IF EXISTS  `nama` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `nama`()
    NO SQL
SELECT * FROM siswa */$$
DELIMITER ;

/*Table structure for table `vnilai` */

DROP TABLE IF EXISTS `vnilai`;

/*!50001 DROP VIEW IF EXISTS `vnilai` */;
/*!50001 DROP TABLE IF EXISTS `vnilai` */;

/*!50001 CREATE TABLE  `vnilai`(
 `kode_mapel` varchar(5) ,
 `nip` varchar(16) ,
 `id_mg` int(11) ,
 `nis` varchar(10) ,
 `id_nilai` int(11) ,
 `uh` int(3) ,
 `uts` int(3) ,
 `uas` int(3) ,
 `na` varchar(5) ,
 `sts_nilai` int(1) ,
 `nama_siswa` varchar(50) ,
 `alamat_siswa` text ,
 `sts_siswa` int(1) ,
 `sts_mg` int(1) ,
 `nama_guru` varchar(50) ,
 `alamat_guru` text ,
 `sts_guru` int(1) ,
 `nama_mapel` varchar(30) ,
 `sts_mapel` int(1) 
)*/;

/*View structure for view vnilai */

/*!50001 DROP TABLE IF EXISTS `vnilai` */;
/*!50001 DROP VIEW IF EXISTS `vnilai` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnilai` AS select `mapel_guru`.`kode_mapel` AS `kode_mapel`,`mapel_guru`.`nip` AS `nip`,`nilai`.`id_mg` AS `id_mg`,`nilai`.`nis` AS `nis`,`nilai`.`id_nilai` AS `id_nilai`,`nilai`.`uh` AS `uh`,`nilai`.`uts` AS `uts`,`nilai`.`uas` AS `uas`,`nilai`.`na` AS `na`,`nilai`.`sts_nilai` AS `sts_nilai`,`siswa`.`nama_siswa` AS `nama_siswa`,`siswa`.`alamat_siswa` AS `alamat_siswa`,`siswa`.`sts_siswa` AS `sts_siswa`,`mapel_guru`.`sts_mg` AS `sts_mg`,`guru`.`nama_guru` AS `nama_guru`,`guru`.`alamat_guru` AS `alamat_guru`,`guru`.`sts_guru` AS `sts_guru`,`mapel`.`nama_mapel` AS `nama_mapel`,`mapel`.`sts_mapel` AS `sts_mapel` from ((((`nilai` join `siswa` on(`nilai`.`nis` = `siswa`.`nis`)) join `mapel_guru` on(`nilai`.`id_mg` = `mapel_guru`.`id_mg`)) join `guru` on(`mapel_guru`.`nip` = `guru`.`nip`)) join `mapel` on(`mapel_guru`.`kode_mapel` = `mapel`.`kode_mapel`)) where `nilai`.`sts_nilai` = 1 and `mapel_guru`.`sts_mg` = 1 and `siswa`.`sts_siswa` = 1 and `mapel`.`sts_mapel` = 1 */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
