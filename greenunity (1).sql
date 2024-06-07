-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 05:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenunity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(10) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Position` varchar(20) DEFAULT NULL,
  `Contact` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Email`, `Password`, `Name`, `Age`, `Position`, `Contact`) VALUES
(1, 'choong@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Choong', 30, 'Manager', '0105441948');

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE `adoption` (
  `AdoptionID` int(10) NOT NULL,
  `DateTime` datetime(6) DEFAULT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `Adopt_Method` varchar(20) DEFAULT NULL,
  `Animal_to_adopt` varchar(30) DEFAULT NULL,
  `MemberID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`AdoptionID`, `DateTime`, `Amount`, `Adopt_Method`, `Animal_to_adopt`, `MemberID`) VALUES
(1, '2024-02-17 12:02:24.000000', 100.00, 'Debit/Credit Card', 'turtle', 1),
(2, '2024-02-17 12:06:59.000000', 300.00, 'Debit/Credit Card', 'axolotl', 1);

-- --------------------------------------------------------

--
-- Table structure for table `apply_partnership`
--

CREATE TABLE `apply_partnership` (
  `Apply_PartnershipID` int(10) NOT NULL,
  `PartnerID` int(10) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Proposal_ID` int(10) DEFAULT NULL,
  `Submitted_Date` date DEFAULT NULL,
  `Status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply_partnership`
--

INSERT INTO `apply_partnership` (`Apply_PartnershipID`, `PartnerID`, `Title`, `Proposal_ID`, `Submitted_Date`, `Status`) VALUES
(1, 370, 'Educational outreach programs', 1, '2023-12-16', 'Accepted'),
(2, 96, 'Environmental cleanup campaign', 2, '2024-01-06', 'Pending'),
(3, 341, 'Wildlife conservation workshop', 3, '2024-03-28', 'Pending'),
(4, 85, 'Species monitoring initiatives', 4, '2024-02-17', 'Accepted'),
(5, 51, 'Species monitoring initiatives', 5, '2023-12-07', 'Accepted'),
(6, 442, 'Educational outreach programs', 6, '2024-02-13', 'Accepted'),
(7, 339, 'Educational outreach programs', 7, '2023-12-10', 'Rejected'),
(8, 108, 'Species monitoring initiatives', 8, '2024-01-22', 'Accepted'),
(9, 464, 'Educational outreach programs', 9, '2024-02-16', 'Accepted'),
(10, 288, 'Educational outreach programs', 10, '2024-01-14', 'Accepted'),
(11, 14, 'Educational outreach programs', 11, '2024-02-10', 'Rejected'),
(12, 56, 'Species monitoring initiatives', 12, '2024-03-08', 'Rejected'),
(13, 484, 'Species monitoring initiatives', 13, '2024-03-24', 'Accepted'),
(14, 418, 'Species monitoring initiatives', 14, '2024-01-20', 'Pending'),
(15, 208, 'Wildlife conservation workshop', 15, '2024-01-09', 'Rejected'),
(16, 205, 'Habitat restoration projects', 16, '2024-03-06', 'Pending'),
(17, 468, 'Wildlife conservation workshop', 17, '2024-02-23', 'Accepted'),
(18, 161, 'Habitat restoration projects', 18, '2024-03-15', 'Accepted'),
(19, 483, 'Habitat restoration projects', 19, '2024-03-24', 'Accepted'),
(20, 30, 'Environmental cleanup campaign', 20, '2024-02-19', 'Rejected'),
(21, 124, 'Educational outreach programs', 21, '2024-01-24', 'Accepted'),
(22, 494, 'Species monitoring initiatives', 22, '2024-03-03', 'Accepted'),
(23, 190, 'Environmental cleanup campaign', 23, '2024-01-05', 'Rejected'),
(24, 341, 'Species monitoring initiatives', 24, '2023-12-08', 'Rejected'),
(25, 197, 'Environmental cleanup campaign', 25, '2023-12-11', 'Accepted'),
(26, 15, 'Environmental cleanup campaign', 26, '2024-02-19', 'Rejected'),
(27, 39, 'Wildlife conservation workshop', 27, '2024-03-29', 'Accepted'),
(28, 365, 'Wildlife conservation workshop', 28, '2024-03-04', 'Pending'),
(29, 435, 'Educational outreach programs', 29, '2024-01-23', 'Accepted'),
(30, 112, 'Wildlife conservation workshop', 30, '2024-02-25', 'Accepted'),
(31, 313, 'Habitat restoration projects', 31, '2024-02-08', 'Accepted'),
(32, 210, 'Educational outreach programs', 32, '2024-03-24', 'Accepted'),
(33, 254, 'Environmental cleanup campaign', 33, '2023-12-01', 'Rejected'),
(34, 378, 'Species monitoring initiatives', 34, '2024-02-02', 'Accepted'),
(35, 248, 'Species monitoring initiatives', 35, '2024-02-21', 'Accepted'),
(36, 20, 'Habitat restoration projects', 36, '2024-01-12', 'Rejected'),
(37, 415, 'Wildlife conservation workshop', 37, '2024-03-29', 'Accepted'),
(38, 346, 'Wildlife conservation workshop', 38, '2023-12-27', 'Accepted'),
(39, 63, 'Species monitoring initiatives', 39, '2023-12-05', 'Accepted'),
(40, 159, 'Educational outreach programs', 40, '2024-02-19', 'Accepted'),
(41, 468, 'Habitat restoration projects', 41, '2024-03-14', 'Accepted'),
(42, 253, 'Wildlife conservation workshop', 42, '2023-12-25', 'Rejected'),
(43, 12, 'Wildlife conservation workshop', 43, '2024-03-23', 'Rejected'),
(44, 10, 'Wildlife conservation workshop', 44, '2023-12-24', 'Accepted'),
(45, 76, 'Habitat restoration projects', 45, '2024-03-19', 'Pending'),
(46, 385, 'Educational outreach programs', 46, '2023-12-05', 'Rejected'),
(47, 474, 'Habitat restoration projects', 47, '2024-02-04', 'Accepted'),
(48, 345, 'Environmental cleanup campaign', 48, '2024-02-25', 'Pending'),
(49, 22, 'Environmental cleanup campaign', 49, '2023-12-07', 'Accepted'),
(50, 146, 'Educational outreach programs', 50, '2024-01-13', 'Rejected'),
(51, 481, 'Habitat restoration projects', 51, '2024-01-21', 'Rejected'),
(52, 391, 'Educational outreach programs', 52, '2024-02-14', 'Pending'),
(53, 82, 'Species monitoring initiatives', 53, '2024-03-04', 'Accepted'),
(54, 476, 'Habitat restoration projects', 54, '2024-02-09', 'Accepted'),
(55, 246, 'Educational outreach programs', 55, '2023-12-30', 'Rejected'),
(56, 163, 'Wildlife conservation workshop', 56, '2024-03-17', 'Pending'),
(57, 422, 'Habitat restoration projects', 57, '2024-03-16', 'Rejected'),
(58, 434, 'Species monitoring initiatives', 58, '2023-12-07', 'Accepted'),
(59, 62, 'Species monitoring initiatives', 59, '2023-12-22', 'Accepted'),
(60, 286, 'Educational outreach programs', 60, '2024-02-18', 'Accepted'),
(61, 25, 'Wildlife conservation workshop', 61, '2023-12-15', 'Accepted'),
(62, 415, 'Species monitoring initiatives', 62, '2024-03-21', 'Accepted'),
(63, 132, 'Wildlife conservation workshop', 63, '2024-02-10', 'Rejected'),
(64, 484, 'Species monitoring initiatives', 64, '2024-02-08', 'Rejected'),
(65, 211, 'Species monitoring initiatives', 65, '2023-12-12', 'Rejected'),
(66, 256, 'Educational outreach programs', 66, '2023-12-20', 'Pending'),
(67, 154, 'Environmental cleanup campaign', 67, '2024-03-01', 'Accepted'),
(68, 283, 'Habitat restoration projects', 68, '2024-01-22', 'Rejected'),
(69, 120, 'Environmental cleanup campaign', 69, '2023-12-04', 'Pending'),
(70, 72, 'Species monitoring initiatives', 70, '2024-02-14', 'Rejected'),
(71, 26, 'Species monitoring initiatives', 71, '2023-12-31', 'Pending'),
(72, 143, 'Habitat restoration projects', 72, '2024-02-25', 'Accepted'),
(73, 271, 'Environmental cleanup campaign', 73, '2024-02-11', 'Accepted'),
(74, 360, 'Environmental cleanup campaign', 74, '2023-12-05', 'Accepted'),
(75, 75, 'Educational outreach programs', 75, '2024-03-24', 'Rejected'),
(76, 198, 'Environmental cleanup campaign', 76, '2023-12-16', 'Rejected'),
(77, 237, 'Wildlife conservation workshop', 77, '2024-03-24', 'Rejected'),
(78, 73, 'Species monitoring initiatives', 78, '2024-01-08', 'Rejected'),
(79, 413, 'Educational outreach programs', 79, '2023-12-06', 'Rejected'),
(80, 336, 'Species monitoring initiatives', 80, '2024-01-20', 'Pending'),
(81, 411, 'Wildlife conservation workshop', 81, '2023-12-26', 'Pending'),
(82, 187, 'Habitat restoration projects', 82, '2024-02-12', 'Accepted'),
(83, 312, 'Educational outreach programs', 83, '2023-12-17', 'Accepted'),
(84, 217, 'Habitat restoration projects', 84, '2024-02-15', 'Accepted'),
(85, 310, 'Species monitoring initiatives', 85, '2023-12-27', 'Accepted'),
(86, 177, 'Environmental cleanup campaign', 86, '2023-12-05', 'Pending'),
(87, 203, 'Habitat restoration projects', 87, '2024-01-20', 'Rejected'),
(88, 173, 'Wildlife conservation workshop', 88, '2024-02-23', 'Pending'),
(89, 73, 'Educational outreach programs', 89, '2024-01-12', 'Rejected'),
(90, 448, 'Habitat restoration projects', 90, '2023-12-04', 'Accepted'),
(91, 218, 'Educational outreach programs', 91, '2024-03-05', 'Accepted'),
(92, 16, 'Educational outreach programs', 92, '2024-01-16', 'Rejected'),
(93, 277, 'Wildlife conservation workshop', 93, '2024-03-18', 'Accepted'),
(94, 438, 'Species monitoring initiatives', 94, '2023-12-09', 'Accepted'),
(95, 50, 'Educational outreach programs', 95, '2024-01-05', 'Pending'),
(96, 80, 'Educational outreach programs', 96, '2024-01-09', 'Pending'),
(97, 401, 'Educational outreach programs', 97, '2024-01-29', 'Accepted'),
(98, 145, 'Environmental cleanup campaign', 98, '2023-12-14', 'Pending'),
(99, 348, 'Wildlife conservation workshop', 99, '2024-03-19', 'Accepted'),
(100, 328, 'Species monitoring initiatives', 100, '2024-01-19', 'Pending'),
(107, 1, 'Environmental Conservation Fundraiser', 118, '2024-02-05', 'Pending'),
(112, 1, 'ARS Tutorial materials', 0, '2024-02-18', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `CommentID` int(10) NOT NULL,
  `Content` longtext NOT NULL,
  `PostID` int(10) NOT NULL,
  `MemberID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`CommentID`, `Content`, `PostID`, `MemberID`) VALUES
(1, 'Nice to hear that!', 2, 1),
(2, 'Great!', 2, 1),
(6, 'Thanks for your sharing!', 3, 1),
(8, 'Thanks for your support!', 2, 1),
(9, 'Found it useful...', 3, 1),
(10, 'Thank you for sharing!', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `crowdsourcing_form`
--

CREATE TABLE `crowdsourcing_form` (
  `Crowdsourcing_FormID` int(10) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Overview` text DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Submission_Details` text DEFAULT NULL,
  `MemberID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crowdsourcing_form`
--

INSERT INTO `crowdsourcing_form` (`Crowdsourcing_FormID`, `Title`, `Description`, `Overview`, `Type`, `Submission_Details`, `MemberID`) VALUES
(1, 'Greening Our City Streets', '\"Greening Our City Streets\" seeks to address the lack of green space in urban environments and promote nature-based solutions to urban challenges. By strategically planting trees and vegetation along streets, we can provide shade, reduce air pollution, and create more inviting pedestrian environments. This project encourages collaboration between local governments, community organizations, and residents to identify suitable planting sites, select appropriate species, and ensure the long-term maintenance of urban greenery.', 'This project aims to transform urban streetscapes into vibrant green corridors by planting trees, shrubs, and native vegetation along sidewalks, roadways, and public spaces. By increasing greenery in urban areas, we can mitigate the heat island effect, improve air quality, and enhance the overall livability of our cities.', 'Project', 'To participate in \"Greening Our City Streets,\" submit your ideas for potential planting locations, species selection, and maintenance strategies. Whether you\'re a resident with a favorite street in need of greenery or a landscape architect with expertise in urban greening, your input is valuable in shaping this initiative.', 1),
(2, 'Community Gardens for Sustainable Living', '\"Community Gardens for Sustainable Living\" recognizes the importance of local food production and community engagement in building resilient, healthy communities. By establishing community-managed gardens, we can promote food sovereignty, reduce food miles, and foster a sense of belonging among residents. This project encourages collaboration between local governments, community organizations, and residents to identify suitable garden locations, design inclusive and accessible spaces, and implement educational programs on gardening, nutrition, and environmental stewardship.', '\"Community Gardens for Sustainable Living\" aims to establish community-managed gardens in urban neighborhoods, providing residents with access to fresh produce, green space, and opportunities for outdoor recreation. By promoting urban agriculture and community engagement, this project seeks to foster connections between people and nature while promoting sustainable food production practices.', 'Urban Greening', 'Submit your ideas for potential community garden sites, garden design concepts, and programming suggestions to support community involvement and education. Whether you\'re a gardener with a green thumb or a community organizer passionate about food security, your ideas can help create thriving community gardens that benefit residents and the environment.', 1),
(3, 'Waterway Cleanup and Restoration', '\"Waterway Cleanup and Restoration\" recognizes the importance of clean and healthy waterways for the well-being of both people and wildlife. By mobilizing community volunteers and implementing targeted pollution prevention measures, we can reduce litter, debris, and chemical pollutants entering urban waterways. This project encourages collaboration between local governments, environmental organizations, businesses, and residents to organize cleanup events, implement green infrastructure projects, and restore riparian habitats to create thriving urban waterways that benefit everyone.', '\"Waterway Cleanup and Restoration\" aims to restore and revitalize urban waterways by organizing community cleanup events, implementing pollution prevention measures, and restoring natural habitats along rivers, streams, and canals. By addressing pollution sources and restoring aquatic ecosystems, this project seeks to improve water quality, enhance biodiversity, and create healthier, more resilient urban watersheds.', 'Clean-up', 'Share your ideas for organizing cleanup events, implementing pollution reduction strategies, and restoring riparian habitats to improve the health and resilience of urban waterways. Whether you\'re a concerned citizen, a local environmental organization, or a government agency, your contributions can help make a difference in restoring and protecting urban water resources.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `DonationID` int(10) NOT NULL,
  `DateTime` datetime(6) DEFAULT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `Donation_Method` varchar(20) DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `MemberID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`DonationID`, `DateTime`, `Amount`, `Donation_Method`, `Type`, `MemberID`) VALUES
(1, '2024-02-11 22:48:22.000000', 100.00, 'Debit/Credit Card', 'one-time', 1),
(2, '2024-02-11 22:50:57.000000', 200.00, 'Debit/Credit Card', 'one-time', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `EventID` int(10) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `Start_Date` date DEFAULT NULL,
  `Duration` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventID`, `Title`, `Description`, `Start_Date`, `Duration`) VALUES
(1, 'Workshop: Introduction to Urban Gardening', 'Join us for a hands-on workshop where you will learn the basics of urban gardening, including plant selection, soil preparation, and container gardening techniques. Whether you have a small balcony or a rooftop terrace, discover how to create your own green oasis in the city!', '2024-02-07', 3),
(2, 'Event: Community Tree Planting Day', 'Help us make a positive impact on our local environment by participating in our community tree planting event. Bring your family and friends to plant native trees and shrubs, enhancing biodiversity, improving air quality, and creating habitat for wildlife in our urban landscape.', '2024-02-22', 5),
(3, 'Workshop: Composting with GreenUnity', 'Learn how to turn your kitchen scraps and yard waste into nutrient-rich compost for your garden! Our composting workshop will cover compost bin selection, composting techniques, and troubleshooting common composting problems. Reduce waste, enrich your soil, and cultivate a healthier planet.', '2024-01-01', 7),
(4, 'Event: Birdwatching Excursion', 'Join us for a guided birdwatching excursion to explore the diverse avian species that call our urban environment home. Led by experienced birdwatchers, this outing provides an opportunity to observe and learn about local bird populations while enjoying the beauty of nature in the city.', '2024-02-03', 3),
(5, 'Event: Nature Photography Walk', 'Grab your camera and join us for a nature photography walk to capture the beauty of our local parks and green spaces. Led by a professional photographer, this outing provides tips and techniques for capturing stunning images of landscapes, wildlife, and plant life in urban environments.', '2024-02-28', 1),
(6, 'Workshop: Green Roof Installation', 'Explore the innovative world of green roofs with a guided tour of green roof installations in our city. Learn about the environmental benefits of green roofs, such as stormwater management, energy savings, and urban heat island mitigation, while experiencing their beauty firsthand.', '2024-02-20', 2),
(7, 'Event: Park Cleanup and Picnic', 'Join us for a day of community service and outdoor fun with a park cleanup followed by a picnic. Help us keep our local parks clean and green by collecting litter, weeding flower beds, and planting native species. Then, relax and enjoy a picnic lunch surrounded by nature.', '2024-02-29', 1),
(8, 'Event: Environmental Film Screening Series', 'Join us for series of thought-provoking film screenings exploring environmental issues and solutions. From documentaries on climate change and environmental justice to inspiring stories of grassroots activism and conservation success stories, our film series sparks meaningful conversations and inspires action for positive change.', '2024-03-21', 3),
(9, 'Protecting Our Planet Symposiu', 'Ut labore et dolore magna aliqua', '2023-10-05', 6),
(10, 'Saving Endangered Species Work', 'Lorem ipsum dolor sit amet', '2023-07-22', 2),
(14, 'Environmental Awareness Summit', 'Sed do eiusmod tempor incididunt', '2023-07-31', 3),
(111, 'Sustainable Habitat Conference', 'Consectetur adipiscing elit', '2023-08-14', 10),
(113, 'Sustainable Habitat Conference', 'Ut enim ad minim veniam', '2023-05-02', 18),
(114, 'Protecting Our Planet Symposiu', 'Consectetur adipiscing elit', '2023-07-27', 13),
(129, 'Sustainable Habitat Conference', 'Ut enim ad minim veniam', '2023-08-16', 16),
(130, 'Sustainable Habitat Conference', 'Consectetur adipiscing elit', '2023-07-11', 9),
(132, 'Sustainable Habitat Conference', 'Consectetur adipiscing elit', '2023-03-18', 15),
(140, 'Sustainable Habitat Conference', 'Sed do eiusmod tempor incididunt', '2023-11-25', 18),
(143, 'Protecting Our Planet Symposiu', 'Sed do eiusmod tempor incididunt', '2023-04-06', 2),
(144, 'Event: Wildlife Conservation Gala', 'Join us for an enchanting evening dedicated to the preservation of our planet\'s precious wildlife at the annual Wildlife Conservation Gala.\r\n\r\nStep into a world of elegance and purpose as we gather at [venue] on [date] to celebrate the beauty of our natural world and to support the vital efforts of wildlife conservation.\r\n\r\nGuests will be treated to an unforgettable experience, beginning with a cocktail reception amidst stunning displays of wildlife photography and art, showcasing the splendor and diversity of Earth\'s creatures.\r\n\r\nAs the evening unfolds, indulge in a gourmet dinner meticulously crafted from sustainable, locally-sourced ingredients, paired with fine wines that highlight the richness of our ecosystems.\r\n\r\nBe inspired by captivating keynote speakers and conservation experts who will share their insights and stories, shedding light on the challenges facing our wildlife and the innovative solutions being implemented to protect and preserve them for future generations.\r\n\r\nThroughout the night, bid on exclusive auction items, including unique wildlife encounters, luxury travel experiences, and exquisite artworks, with all proceeds directly benefiting wildlife conservation initiatives around the globe.\r\n\r\nAnd as the night draws to a close, dance the night away under the stars, knowing that your support has made a tangible difference in safeguarding the world\'s most vulnerable species.', '2024-02-01', 1),
(145, 'Protecting Our Planet Symposiu', 'Lorem ipsum dolor sit amet', '2023-06-12', 3),
(148, 'Event: Sustainable Habitat Conference', 'Lorem ipsum dolor sit amet', '2024-01-09', 8),
(154, 'Protecting Our Planet Symposiu', 'Ut labore et dolore magna aliqua', '2023-05-28', 2),
(155, 'Protecting Our Planet Symposiu', 'Lorem ipsum dolor sit amet', '2023-08-16', 18),
(156, 'Protecting Our Planet Symposiu', 'Ut enim ad minim veniam', '2023-11-22', 6),
(158, 'Environmental Awareness Summit', 'Ut enim ad minim veniam', '2023-05-11', 8),
(159, 'Environmental Awareness Summit', 'Consectetur adipiscing elit', '2023-05-24', 5),
(164, 'Environmental Awareness Summit', 'Ut enim ad minim veniam', '2023-03-26', 7),
(168, 'Protecting Our Planet Symposiu', 'Ut labore et dolore magna aliqua', '2023-06-07', 4),
(169, 'Protecting Our Planet Symposiu', 'Consectetur adipiscing elit', '2023-02-22', 9),
(170, 'Environmental Awareness Summit', 'Ut enim ad minim veniam', '2023-03-16', 2),
(171, 'Protecting Our Planet Symposiu', 'Lorem ipsum dolor sit amet', '2023-11-08', 2),
(175, 'Saving Endangered Species Work', 'Lorem ipsum dolor sit amet', '2023-02-23', 6),
(178, 'Saving Endangered Species Work', 'Sed do eiusmod tempor incididunt', '2023-08-11', 6),
(179, 'Protecting Our Planet Symposiu', 'Consectetur adipiscing elit', '2023-05-05', 17),
(181, 'Saving Endangered Species Work', 'Ut labore et dolore magna aliqua', '2023-02-20', 15),
(182, 'Workshop: Protecting Planet Symposium', 'The Protecting Our Planet Symposium is a gathering of minds dedicated to addressing the pressing environmental challenges facing our world today. Through a series of engaging talks, panel discussions, and interactive workshops, attendees will delve into key themes such as conservation, sustainability, climate change mitigation, and environmental justice.\r\n\r\nOur esteemed lineup of speakers includes leading scientists, policymakers, activists, and community leaders who will share their knowledge, experiences, and visions for a more sustainable and equitable future. From exploring the latest advancements in renewable energy and conservation technologies to examining the intersectionality of environmentalism with social justice issues, the symposium offers a comprehensive and interdisciplinary approach to environmental stewardship.', '2024-01-11', 6),
(184, 'Environmental Awareness Summit', 'Ut labore et dolore magna aliqua', '2023-09-11', 8),
(191, 'Saving Endangered Species Work', 'Ut labore et dolore magna aliqua', '2023-11-01', 2),
(197, 'Environmental Awareness Summit', 'Consectetur adipiscing elit', '2023-12-07', 8),
(198, 'Saving Endangered Species Work', 'Lorem ipsum dolor sit amet', '2023-08-22', 12),
(202, 'Workshop: Alibaba Conservation Talk', 'The Alibaba Conservation Talk is a groundbreaking event dedicated to advancing environmental conservation through technology, innovation, and collaboration. Organized by Alibaba Group, a global leader in e-commerce, cloud computing, and digital innovation, this talk brings together experts, thought leaders, and stakeholders from across the conservation and technology sectors to explore innovative solutions to pressing environmental challenges.', '2023-12-18', 8),
(204, 'dvsdfc', 'drfhgfverd', '2024-01-28', 5);

-- --------------------------------------------------------

--
-- Table structure for table `events_crew_application_form`
--

CREATE TABLE `events_crew_application_form` (
  `Event_Crew_FormID` int(10) NOT NULL,
  `Position` varchar(30) DEFAULT NULL,
  `Availability` varchar(20) DEFAULT NULL,
  `Commitment_Level` int(11) DEFAULT NULL,
  `Work_Preferences` varchar(30) DEFAULT NULL,
  `Reason_of_Application` varchar(50) DEFAULT NULL,
  `Skills` varchar(100) DEFAULT NULL,
  `MemberID` int(10) DEFAULT NULL,
  `EventID` int(10) DEFAULT NULL,
  `AdminID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events_crew_application_form`
--

INSERT INTO `events_crew_application_form` (`Event_Crew_FormID`, `Position`, `Availability`, `Commitment_Level`, `Work_Preferences`, `Reason_of_Application`, `Skills`, `MemberID`, `EventID`, `AdminID`) VALUES
(3, 'Secretary', 'Part-time', 7, 'On-site', 'buyecusdoivhifhc', 'cdbicsjnduivwhdcujdnkcbsndhjvbu', 1, 1, 1),
(6, 'fvdf', 'dvdfbv', 7, 'rgdgh', 'dgdfgdf', 'ghbdfsd', 5, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_rating`
--

CREATE TABLE `feedback_rating` (
  `FeedbackID` int(10) NOT NULL,
  `Date` date DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Status` varchar(15) DEFAULT NULL,
  `MemberID` int(10) DEFAULT NULL,
  `EventID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback_rating`
--

INSERT INTO `feedback_rating` (`FeedbackID`, `Date`, `Description`, `Rating`, `Type`, `Status`, `MemberID`, `EventID`) VALUES
(1, '2024-01-17', 'Nice work. Hope to have this kind of event again. ', 9, 'Compliment', 'Success', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `impact_report`
--

CREATE TABLE `impact_report` (
  `Impact_Report_ID` int(10) NOT NULL,
  `Report_Name` varchar(255) NOT NULL,
  `Report_FileName` varchar(255) NOT NULL,
  `Report_FileSize` int(11) NOT NULL,
  `Uploaded_Date` date NOT NULL,
  `Downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `impact_report`
--

INSERT INTO `impact_report` (`Impact_Report_ID`, `Report_Name`, `Report_FileName`, `Report_FileSize`, `Uploaded_Date`, `Downloads`) VALUES
(1, 'Q1 2021', 'WQX44mOd.pdf', 77506, '2023-12-07', 0),
(2, 'Q2 2021', 'plUph573.pdf', 68848, '2023-02-25', 0),
(3, 'Q3 2021', 'aAS2ox7t.pdf', 69377, '2024-01-07', 0),
(4, 'Q4 2021', 'Mp07TB5a.pdf', 15405, '2023-05-01', 0),
(5, 'Q1 2022', '8xhHJUp9.pdf', 89499, '2024-01-22', 0),
(6, 'Q2 2022', 'Yog925A4.pdf', 50359, '2023-10-29', 0),
(7, 'Q3 2022', '6720u8W7.pdf', 87465, '2024-01-17', 0),
(8, 'Q4 2022', 'T9BkwprQ.pdf', 64731, '2023-09-28', 0),
(9, 'Q1 2023', 'IG8QQ433.pdf', 16683, '2024-02-04', 0),
(10, 'Q2 2023', '92jDAdwL.pdf', 42933, '2023-11-19', 0),
(11, 'Q3 2023', '8b0vC8sl.pdf', 51863, '2023-10-27', 0),
(12, 'Q4 2023', '7V84V7Fb.pdf', 57826, '2023-05-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `join`
--

CREATE TABLE `join` (
  `JoinID` int(10) NOT NULL,
  `Status` varchar(10) DEFAULT NULL,
  `MemberID` int(10) DEFAULT NULL,
  `EventID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `join`
--

INSERT INTO `join` (`JoinID`, `Status`, `MemberID`, `EventID`) VALUES
(7, 'Success', 1, 3),
(8, 'Success', 1, 1),
(11, 'Success', 1, 4),
(12, 'Success', 1, 2),
(14, 'Success', 4, 8),
(21, 'Success', 5, 144),
(22, 'Success', 5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `LikeID` int(10) NOT NULL,
  `PostID` int(10) NOT NULL,
  `MemberID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`LikeID`, `PostID`, `MemberID`) VALUES
(2, 2, 1),
(3, 3, 1),
(6, 1, 1),
(7, 3, 5),
(8, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `manage_event`
--

CREATE TABLE `manage_event` (
  `ManageID` int(10) NOT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `AdminID` int(10) DEFAULT NULL,
  `EventID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manage_event`
--

INSERT INTO `manage_event` (`ManageID`, `Description`, `AdminID`, `EventID`) VALUES
(1, 'cdgdfgdsfsfrg', 1, 1),
(2, 'To manage environmental film screening series', 1, 8),
(3, 'blablablabla', 1, 202),
(4, 'dcickvszd', 1, 2),
(5, 'ueijokscnxj', 1, 3),
(6, 'rckozcmjzxzc', 1, 4),
(7, 'vfxvlzclzczx', 1, 5),
(8, 'guiepconjcb', 1, 6),
(9, 'fgijsdcmkhzc', 1, 7),
(11, 'drfhgfverd', 1, 204);

-- --------------------------------------------------------

--
-- Table structure for table `manage_project`
--

CREATE TABLE `manage_project` (
  `ManageID` int(10) NOT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `AdminID` int(10) DEFAULT NULL,
  `ProjectID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manage_project`
--

INSERT INTO `manage_project` (`ManageID`, `Description`, `AdminID`, `ProjectID`) VALUES
(1, 'cbiasnjcibfivs', 1, 3),
(2, 'To manage the conservation project in Kuala Lumpur', 1, 1),
(3, 'blablablabla', 1, 201),
(4, 'dhsjcndvsz', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MemberID` int(10) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Date_of_Birth` date DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Occupation` varchar(20) DEFAULT NULL,
  `Contact` varchar(11) DEFAULT NULL,
  `Address` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MemberID`, `Email`, `Password`, `Name`, `Gender`, `Date_of_Birth`, `Age`, `Occupation`, `Contact`, `Address`) VALUES
(1, 'zhijun170300@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'June', 'Female', '2004-03-17', 20, 'student', '0123456789', 'Selangor'),
(4, 'jestinna@gmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba', 'Jestinna', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'jennifer@apu.my', '25d55ad283aa400af464c76d713c07ad', 'Jennifer', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(10) NOT NULL,
  `Order_Date` datetime(6) DEFAULT NULL,
  `Quantity` int(5) NOT NULL,
  `Total_Amount` decimal(10,2) DEFAULT NULL,
  `Shipping_Address` varchar(255) DEFAULT NULL,
  `Remarks` varchar(255) DEFAULT NULL,
  `Payment_Method` varchar(255) DEFAULT NULL,
  `MemberID` int(10) DEFAULT NULL,
  `ProductID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `Order_Date`, `Quantity`, `Total_Amount`, `Shipping_Address`, `Remarks`, `Payment_Method`, `MemberID`, `ProductID`) VALUES
(8, '2024-02-12 08:38:48.000000', 2, 50.00, 'NO 28 JALAN KENANGA\r\nTAMAN BUKIT BELIMBING', '', 'Debit/Credit Card', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `participation`
--

CREATE TABLE `participation` (
  `ParticipationID` int(10) NOT NULL,
  `Status` varchar(15) DEFAULT NULL,
  `MemberID` int(10) DEFAULT NULL,
  `ProjectID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participation`
--

INSERT INTO `participation` (`ParticipationID`, `Status`, `MemberID`, `ProjectID`) VALUES
(1, 'Success', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `PartnerID` int(10) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Company_Name` varchar(30) DEFAULT NULL,
  `Type` varchar(30) DEFAULT NULL,
  `Contact` varchar(11) DEFAULT NULL,
  `Address` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`PartnerID`, `Email`, `Password`, `Company_Name`, `Type`, `Contact`, `Address`) VALUES
(1, 'cgamon0@scribd.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Reilly, Mraz and Hand', 'Manufacturing', '60123431208', '789 Jalan Bukit Bintang'),
(2, 'ehyndes1@dot.gov', '$2a$04$J7gYRK3/soC6pxYoAGG0uO89W9Xisu.r59.W9HDnT2W', 'Jones-Predovic', 'Healthcare', '60123431209', '789 Jalan Bukit Bintang'),
(3, 'ccrippin2@networksolution', '$2a$04$dFyOTp6sUepc2GER4p/R..PbvJTHOj0hseKrER34rYP', 'Hettinger Group', 'Manufacturing', '60123431210', '101 Jalan Raja Chulan'),
(4, 'smcnaught3@java.com', '$2a$04$W4f1wbExIJ3ZlP/k4oRBb.EFF1A7cLTH7VxzCzER5Zd', 'Torp, Prosacco and Bednar', 'Manufacturing', '60123431211', '222 Jalan Imbi'),
(5, 'hplace4@taobao.com', '$2a$04$Wo6IkpKjzQWkqq4TIlNYGuXIu04CgbJeHROZeVCYa34', 'Wuckert LLC', 'Manufacturing', '60123431212', '789 Jalan Bukit Bintang'),
(6, 'bmarciek5@ucoz.com', '$2a$04$AHkLfSJgnt5c/i7kXy7qQuVDf/X7KrAU15H8hjyBL.6', 'Dare Inc', 'Healthcare', '60123431213', '222 Jalan Imbi'),
(7, 'doverland6@google.co.jp', '$2a$04$GbkK0/QxTExSuz/7P6QSl.OHadXJBS/qwUkinUu92qg', 'Hettinger, Hettinger and Beaha', 'Retail', '60123431214', '456 Jalan Tun Razak'),
(8, 'ebatting7@who.int', '$2a$04$s6H2NQjZGZg9Hehd4OivdugezTF2KpUBroWsurCrkJH', 'Jacobs-Lehner', 'Manufacturing', '60123431215', '123 Jalan Ampang'),
(9, 'erubie8@army.mil', '$2a$04$F.SHw.MZe.Cc2JeQcfNdY..FisRX8I13um0N92ne19m', 'Kshlerin-Mraz', 'Retail', '60123431216', '456 Jalan Tun Razak'),
(10, 'gpavese9@usgs.gov', '$2a$04$5lrcOePyuVVdKtc4oKxJPefYj3Cw9.rQAqLngv6LAvx', 'Klocko and Sons', 'Technology', '60123431217', '789 Jalan Bukit Bintang'),
(11, 'mstoecka@businesswire.com', '$2a$04$Crcu.igmCNZMiv0pABZPSeATNFknOXL4Afs5.ghGo8Q', 'Ortiz and Sons', 'Healthcare', '60123431218', '101 Jalan Raja Chulan'),
(12, 'gmckinlayb@feedburner.com', '$2a$04$P6t9zO/PHZ2hDCjf14q6oOs9ie4tSGeuGg3Qt6A2fsk', 'Hartmann Group', 'Manufacturing', '60123431219', '101 Jalan Raja Chulan'),
(13, 'iobradanec@shutterfly.com', '$2a$04$Jp1Dz.QAa2cUr3cAcq3cLeIV2BsyMwklTDvvA33vftI', 'Bednar, Rempel and Windler', 'Finance', '60123431220', '222 Jalan Imbi'),
(14, 'mhickissond@ask.com', '$2a$04$Qcs10YLrnh6znk2J06TxSOP.83PtkVQmEAytiOlmxS0', 'Spinka-Breitenberg', 'Technology', '60123431221', '456 Jalan Tun Razak'),
(15, 'dtammadgee@miitbeian.gov.', '$2a$04$3LT05282uwkUIwxNwwQyN.0av60TjPcaarOff7d6pzA', 'Pouros-MacGyver', 'Technology', '60123431222', '101 Jalan Raja Chulan'),
(16, 'lmeierf@bloomberg.com', '$2a$04$S8.HnNpmShCroMnU2pe9ae5bSf1GK1R0ibqQUXmMd9N', 'Okuneva Inc', 'Finance', '60123431223', '123 Jalan Ampang'),
(17, 'hwarrackg@un.org', '$2a$04$Xeh7lh.nHLXag2NaINId9OELL0XXmz7skyss0k4tyPJ', 'Effertz-Bailey', 'Technology', '60123431224', '101 Jalan Raja Chulan'),
(18, 'pbentinckh@bizjournals.co', '$2a$04$0ZXPh9/VDH4iNheMoLTbr.yUP3p0uPaNh4u/BUTN1iX', 'Hansen, Kiehn and Kautzer', 'Retail', '60123431225', '456 Jalan Tun Razak'),
(19, 'jcoakeri@mysql.com', '$2a$04$2NQTCFD69tpxjmLg.2.PE.mO/DX.EuPt2BYR70/BRU5', 'O\'Kon Inc', 'Technology', '60123431226', '101 Jalan Raja Chulan'),
(20, 'sgrisedalej@cbsnews.com', '$2a$04$FeN6uz6q9rToSDkqs4GJKeyUFfos.j1jZrBAeb5wCSE', 'Mills, Herzog and Bednar', 'Technology', '60123431227', '101 Jalan Raja Chulan'),
(21, 'awindlessk@ehow.com', '$2a$04$tDpWrFlndiyZV20GiuLCau8579SyzX40JzDzH7dL1so', 'Bayer, O\'Conner and Hackett', 'Healthcare', '60123431228', '222 Jalan Imbi'),
(22, 'lpetaschl@pinterest.com', '$2a$04$gYlvVcAwrEVvuEnSfpUzN.Xn8zcB7qdys9wa1BjU3T4', 'Kilback, Jones and Hammes', 'Technology', '60123431229', '456 Jalan Tun Razak'),
(23, 'kmedleym@hubpages.com', '$2a$04$36sngZsxyelHDMLsaR9F2uLjNQ2yCR1qrtt9w8AVB.V', 'Haag-Littel', 'Retail', '60123431230', '222 Jalan Imbi'),
(24, 'bscamwelln@imdb.com', '$2a$04$dINLJe0PNi8KN3W10fhOqOQn8E6vSBLFb36TrpnIj6z', 'Connelly, Kiehn and Nienow', 'Finance', '60123431231', '222 Jalan Imbi'),
(25, 'bcroixo@gizmodo.com', '$2a$04$oVr3B6lIFh6nA1VgXkBHR.77Z0.xU6Q/a8H02zp8/xb', 'Powlowski Inc', 'Technology', '60123431232', '123 Jalan Ampang'),
(26, 'veltonep@go.com', '$2a$04$K7S97G5gp72wBdJ5AQdnPeoqdPdj3U0oD7rxSy/rCv2', 'Klocko, Ledner and Keebler', 'Finance', '60123431233', '456 Jalan Tun Razak'),
(27, 'srootsq@yellowbook.com', '$2a$04$95AsvgtWIEvVaGPBOVP2rOjof9o2UpWQ4Md4i./1e5H', 'Ziemann, Volkman and Rippin', 'Manufacturing', '60123431234', '456 Jalan Tun Razak'),
(28, 'rkwietakr@parallels.com', '$2a$04$WLJqklZUakRcGzPv7DuOIub2CLcPR/uvMyT.IXJ61BS', 'Bartell, Grimes and Lueilwitz', 'Manufacturing', '60123431235', '456 Jalan Tun Razak'),
(29, 'msouthcombs@smh.com.au', '$2a$04$g9iqShFEFjlfOtrTxByWleNLsfEe8AaJMEu4FXgeqfi', 'Beier LLC', 'Retail', '60123431236', '456 Jalan Tun Razak'),
(30, 'sblamirest@guardian.co.uk', '$2a$04$ePgnQn7z2H788HJ73i.4kO5oAioZLKkj/gljOV4WwQq', 'Dooley Inc', 'Retail', '60123431237', '456 Jalan Tun Razak'),
(31, 'gharcaseu@acquirethisname', '$2a$04$B/8o6x5QauMIcewb8RO2tuV0bU9yJ4svVnH1PjsqoRy', 'Cormier and Sons', 'Technology', '60123431238', '123 Jalan Ampang'),
(32, 'jcrumptonv@themeforest.ne', '$2a$04$KqR0UBYnf.oT0T5DfWUL1uJKfJFDP9Vssjhjzjapc77', 'Schaefer Inc', 'Technology', '60123431239', '456 Jalan Tun Razak'),
(33, 'atillsw@cocolog-nifty.com', '$2a$04$qpnt0yS96SJi3K9ZV8czDeV5CQJ7fakeVbdEzmRTeWM', 'Harris Group', 'Manufacturing', '60123431240', '101 Jalan Raja Chulan'),
(34, 'pcuolahanx@wikispaces.com', '$2a$04$uX1vN5/dWTArXtBT9BDz9e6p.kvQF8JLFF/hGMs7Wpw', 'Gulgowski Group', 'Manufacturing', '60123431241', '101 Jalan Raja Chulan'),
(35, 'crotheray@mashable.com', '$2a$04$gnhDLEInyC.5bTP4.Fhj9uzI7U0clCFYkXvpVKs52WK', 'Barrows Group', 'Finance', '60123431242', '789 Jalan Bukit Bintang'),
(36, 'gseedhousez@gov.uk', '$2a$04$JTytf9QPcoiy6FyN05YwOevJmiH080hP4MdeIHpSP4N', 'Klocko-Beahan', 'Technology', '60123431243', '456 Jalan Tun Razak'),
(37, 'thutten10@godaddy.com', '$2a$04$NUM44LqnYbxIw.3UcRxVNeYPmOgNckx9lKXqLLTY7Ne', 'Von and Sons', 'Retail', '60123431244', '789 Jalan Bukit Bintang'),
(38, 'dvanlint11@paginegialle.i', '$2a$04$6PlWXovtgxoN4ZByglyoG.A/5B9i3B4ztQ4Sir/LMnO', 'Torp-Bogisich', 'Healthcare', '60123431245', '123 Jalan Ampang'),
(39, 'tgiblin12@360.cn', '$2a$04$ZLXiTtEkrpIfyV8a0o4xZuRb4bJFTChDaiTogJaxL4j', 'Williamson-Ferry', 'Technology', '60123431246', '222 Jalan Imbi'),
(40, 'kstrotton13@uiuc.edu', '$2a$04$k1idN1Ydv7tGbri2fEoUquCJzPuCW7rdM77FCmrYzs3', 'Crona-Ondricka', 'Finance', '60123431247', '456 Jalan Tun Razak'),
(41, 'flicciardo14@spiegel.de', '$2a$04$0D2TKKn/ogs3VJfxqqMFy.10aigi7UkF9MNduEy1Yq4', 'Fadel-Wuckert', 'Manufacturing', '60123431248', '456 Jalan Tun Razak'),
(42, 'arubinfeld15@miitbeian.go', '$2a$04$JOJ.n8NloM/RoQxFwhScY.s2.8WadW6cfiuOLnWt1Qc', 'Ernser and Sons', 'Finance', '60123431249', '789 Jalan Bukit Bintang'),
(43, 'cgoldsworthy16@webs.com', '$2a$04$lvhC/t0JT7lvWf26UEhauOOEARpeyiivwKMlgOiUbbA', 'Lind-Connelly', 'Retail', '60123431250', '123 Jalan Ampang'),
(44, 'halpin17@angelfire.com', '$2a$04$pFZ2TY9LolihblKmF4mHm.AOztIcZbaDCLUeVhyBIou', 'Gerlach, Emard and Moore', 'Finance', '60123431251', '123 Jalan Ampang'),
(45, 'cjakubovits18@edublogs.or', '$2a$04$wj32yl8uBrX7Vb5jILbDl.svWuC38AhZKpW8le1vCI0', 'King and Sons', 'Retail', '60123431252', '123 Jalan Ampang'),
(46, 'cwittleton19@sciencedirec', '$2a$04$EHEvrc5JOUWox6HAMz6I5eoTRtPHA/Dw4zBqI5m6DCX', 'Gibson Group', 'Healthcare', '60123431253', '456 Jalan Tun Razak'),
(47, 'aquincey1a@aboutads.info', '$2a$04$GvpxhUEptYeWoVVObgOaNOqOnF/8CwGH93M3lsprvPZ', 'Towne Group', 'Technology', '60123431254', '456 Jalan Tun Razak'),
(48, 'elilion1b@ted.com', '$2a$04$26aa/E4T4XOJTr7gW1rzi.HbY1UTOBh2HzKKS7t9tti', 'Stracke, Bogan and Mosciski', 'Healthcare', '60123431255', '222 Jalan Imbi'),
(49, 'egossage1c@va.gov', '$2a$04$3OyXsoNYUMOMZ.CkOv/0NeNeWcUv8yRF1lWWHLt/E5R', 'Gleason-Wiza', 'Retail', '60123431256', '101 Jalan Raja Chulan'),
(50, 'awayne1d@buzzfeed.com', '$2a$04$XEhe5oMg6519VltSI90nfeNKe9sqIUb3jhqco9rAhdN', 'Murazik-Gutkowski', 'Manufacturing', '60123431257', '789 Jalan Bukit Bintang'),
(51, 'aleighton1e@europa.eu', '$2a$04$voLDD5G88tsjVxmh2B0O7ecXE4EfBwSCRLTNDFgrVOJ', 'Kerluke, Satterfield and Turne', 'Technology', '60123431258', '101 Jalan Raja Chulan'),
(52, 'gfradson1f@biblegateway.c', '$2a$04$19BGo9lhkq8R86IWKe6UN.x/bZJiwCsZmnHdNy/LoNa', 'Jaskolski-Baumbach', 'Manufacturing', '60123431259', '789 Jalan Bukit Bintang'),
(53, 'rluberto1g@nytimes.com', '$2a$04$XAlKI17PdY51xk3ZzDVzqeR6bAlEZMrOxzfZ8gb1sPl', 'Pagac-Hintz', 'Finance', '60123431260', '456 Jalan Tun Razak'),
(54, 'sbottomer1h@shinystat.com', '$2a$04$U6jRfBYq4MpvBXMzJ17fEOSvinjXGQKcIEgdFFDlyhq', 'Vandervort, Walter and Becker', 'Manufacturing', '60123431261', '789 Jalan Bukit Bintang'),
(55, 'aallardyce1i@privacy.gov.', '$2a$04$OWPjFJBTUyctRWvHJXCzjekGszQM5F3vzit0CBBQsDR', 'Funk Group', 'Technology', '60123431262', '456 Jalan Tun Razak'),
(56, 'hsutherington1j@networkso', '$2a$04$x3zpFaGBdLzCq49.LpIq1eTM5PzgaHJaabJCkSjTOP6', 'Braun-Kautzer', 'Manufacturing', '60123431263', '123 Jalan Ampang'),
(57, 'dskeene1k@twitpic.com', '$2a$04$I8KM0eIGGzcw9sa.y8LR3.04ouTpIfRge2AO8Bw2m6I', 'Turner, Wisoky and Oberbrunner', 'Manufacturing', '60123431264', '123 Jalan Ampang'),
(58, 'bblaxter1l@fema.gov', '$2a$04$chfxoZjhM6hpzxnC6HFER./ciMQ0lUOlYuAzqDFOZKU', 'Bartell, Huels and Kihn', 'Retail', '60123431265', '123 Jalan Ampang'),
(59, 'aferrieri1m@ucoz.com', '$2a$04$XRSBMHQ3OKQUnX3aGZylAubKTKm1aOwKNUiiORICYOt', 'Yundt Inc', 'Technology', '60123431266', '789 Jalan Bukit Bintang'),
(60, 'rkillshaw1n@ucla.edu', '$2a$04$CrkvC8XbJ7yzFsBNNHSnS./HFxTGgwkxmfOZz.wIjy2', 'Cummings Inc', 'Technology', '60123431267', '123 Jalan Ampang'),
(61, 'ocrolly1o@theguardian.com', '$2a$04$ugHLhkK3dzWqnLvqYcMLwu2Dx7FV0RFDlZwTTgpuyQV', 'Dickens-Turcotte', 'Technology', '60123431268', '789 Jalan Bukit Bintang'),
(62, 'ngleaves1p@loc.gov', '$2a$04$LXIQsEmXanRpa22yWPJkPusMdce2qLuHFwqs.1cWqS9', 'Green LLC', 'Healthcare', '60123431269', '101 Jalan Raja Chulan'),
(63, 'hmcaloren1q@kickstarter.c', '$2a$04$TGLJbRWXc2DCln.o1FyiYOSVAHqQA4wwAgnRMJolfzY', 'Ryan LLC', 'Healthcare', '60123431270', '101 Jalan Raja Chulan'),
(64, 'lchavey1r@statcounter.com', '$2a$04$fi6pUh9aDeDBbY4Ga1yKXOd0T16EN8cmRorhOow/C/L', 'Medhurst, McKenzie and Will', 'Technology', '60123431271', '222 Jalan Imbi'),
(65, 'mmaps1s@npr.org', '$2a$04$DfJuNGSaVW3DbGWpPYoP9enlWIYYc/Lofr60tGul7nz', 'Mueller and Sons', 'Technology', '60123431272', '456 Jalan Tun Razak'),
(66, 'rdulinty1t@fda.gov', '$2a$04$9Pl0/f8omkuSa8FpPKkPlOR.eiE2dRkZ59q.3LwUnXN', 'Herman, Lockman and D\'Amore', 'Retail', '60123431273', '456 Jalan Tun Razak'),
(67, 'lgregorace1u@theatlantic.', '$2a$04$SCws7RN4xcutyl0V3JqPyOgr93NM6Qb2XR2KQRRR5FZ', 'Feil, Reynolds and McKenzie', 'Finance', '60123431274', '789 Jalan Bukit Bintang'),
(68, 'mmilner1v@apple.com', '$2a$04$ZdJgwvV9ZuOWu.OBqs4QZORqyCG798MDRpq.oQo8uRZ', 'Okuneva, Hyatt and Pagac', 'Healthcare', '60123431275', '456 Jalan Tun Razak'),
(69, 'epolgreen1w@constantconta', '$2a$04$CP.nqjjcZpaWOEAtHtjh2OwI8sc.iqKirAu1XB6pbbd', 'Frami Inc', 'Manufacturing', '60123431276', '123 Jalan Ampang'),
(70, 'tnormant1x@soundcloud.com', '$2a$04$2WGZfwEBoCq7pHEHznRG9.SmpD29tSEJtsNx6fRdqO9', 'Feeney, Schmidt and Berge', 'Manufacturing', '60123431277', '222 Jalan Imbi'),
(71, 'rneller1y@unc.edu', '$2a$04$br4ercd.Kmszq9EmZIhRa.zKdka42W0HjCRsXeL38Jl', 'Olson-Ullrich', 'Healthcare', '60123431278', '789 Jalan Bukit Bintang'),
(72, 'dpiens1z@issuu.com', '$2a$04$o/vXstX9ciBWJ/ftb5b1geLuoZq11aEymSHyGLMU94J', 'Bartoletti-Auer', 'Healthcare', '60123431279', '222 Jalan Imbi'),
(73, 'gbarbary20@drupal.org', '$2a$04$92VD9zcOoLVq79Y6TJKieuw4Ixmw8HfNHzqlQtUbZ/n', 'Bartell-Zemlak', 'Healthcare', '60123431280', '789 Jalan Bukit Bintang'),
(74, 'mverden21@discovery.com', '$2a$04$qhRaLB3bsMi7HjUKD4wD4OK2o9tylFnBWhRo6qEdpR4', 'Labadie-Miller', 'Retail', '60123431281', '789 Jalan Bukit Bintang'),
(75, 'eledur22@usa.gov', '$2a$04$9G8tUHjaqYchpd9SGpMCrePum4lmItAtzRoQ4GQSTkx', 'Brakus-Fay', 'Retail', '60123431282', '456 Jalan Tun Razak'),
(76, 'vbishop23@prlog.org', '$2a$04$YDEcMlwDAMI6d1vkVMxXF.79BLJ5W0TDQSqZs8d/Xrg', 'Vandervort-Greenholt', 'Technology', '60123431283', '101 Jalan Raja Chulan'),
(77, 'rpitsall24@indiatimes.com', '$2a$04$bIGOncTdYAi31GxsqlKE7.ERVNg8Tt3wmDvBwfKpJ2g', 'Sporer Group', 'Finance', '60123431284', '101 Jalan Raja Chulan'),
(78, 'vallardyce25@nps.gov', '$2a$04$zrY6wwWJFcek8AeGLkdOpeCM3VutjpGXESmAYI23t4K', 'Keeling, Klocko and Lockman', 'Finance', '60123431285', '123 Jalan Ampang'),
(79, 'lodell26@ebay.com', '$2a$04$GVveXcygq8/VTedDShch6uC3mU8WiqeettBi9a39EK.', 'Sipes, Cruickshank and Walsh', 'Technology', '60123431286', '123 Jalan Ampang'),
(80, 'msimond27@yolasite.com', '$2a$04$8itPGD5DQDhmlQQD6KlLQ.iR4ZNaij0H7/yWCP0N5X6', 'Stracke-Herzog', 'Healthcare', '60123431287', '123 Jalan Ampang'),
(81, 'ncollinson28@columbia.edu', '$2a$04$iUdeaCEddFB5GnWDlxYbveCDbrrgQPXv2rJnKVLVHiA', 'Murray, Wiza and Stark', 'Technology', '60123431288', '123 Jalan Ampang'),
(82, 'jparkins29@de.vu', '$2a$04$mzgg5yyPsJPJOBSxU9K2zuco2nQtKL.0T06weFy/EWA', 'Hilll-Waters', 'Manufacturing', '60123431289', '101 Jalan Raja Chulan'),
(83, 'egoly2a@squarespace.com', '$2a$04$ycEiNRtUwKe5/WoW0GxSEecYU/9IQ/5XF9lMGyy3zYe', 'Torphy, Gleichner and Kunze', 'Technology', '60123431290', '456 Jalan Tun Razak'),
(84, 'cbelison2b@tinypic.com', '$2a$04$EukBPeTV3XKp0c6UwUoCa.ttv6CMYvb1jQm/Bq4m0NJ', 'Shanahan, Bins and Leffler', 'Retail', '60123431291', '789 Jalan Bukit Bintang'),
(85, 'greynoollds2c@redcross.or', '$2a$04$5mSW5Oy21c/Jq4Pq/bbvqONf1QULWHfndpT6TVeX/2o', 'Wiza, Hagenes and Braun', 'Finance', '60123431292', '456 Jalan Tun Razak'),
(86, 'nreavey2d@nps.gov', '$2a$04$aZXy57QZP05SQisXSujkd.KKZWlQSyhbT9gzyVQ2ziv', 'Runolfsdottir-Kuhlman', 'Finance', '60123431293', '222 Jalan Imbi'),
(87, 'ieccleston2e@youtube.com', '$2a$04$29nrTwOjtwzX3CXWo.PJYuDD6W8MJbAu2PZvID1DqEd', 'Rolfson-Kuhlman', 'Finance', '60123431294', '222 Jalan Imbi'),
(88, 'dcran2f@nps.gov', '$2a$04$jMhQ92CJYwod8Wnl.yLMm.saKf4lywNW3Oe/3GZA5dk', 'Flatley and Sons', 'Healthcare', '60123431295', '101 Jalan Raja Chulan'),
(89, 'bgives2g@marriott.com', '$2a$04$NBCxULrDoB4Uo89QByY.RuPg8cgQxur5evVZp5nwChy', 'Goodwin and Sons', 'Healthcare', '60123431296', '789 Jalan Bukit Bintang'),
(90, 'bstrode2h@mit.edu', '$2a$04$7w9dbVoOnUy3n81TrPzLC.o9.udFb6jjCNTD9Si1GCK', 'Leuschke Inc', 'Manufacturing', '60123431297', '123 Jalan Ampang'),
(91, 'treddington2i@lycos.com', '$2a$04$P1TFkeoaOmDWIFV2e2iDk..4fOPOW38QXirmnC7MdXH', 'Predovic, Boyer and Langworth', 'Technology', '60123431298', '789 Jalan Bukit Bintang'),
(92, 'cjonczyk2j@123-reg.co.uk', '$2a$04$Yjs5VVcQhEhVsH7dQPGCtunoRpQ594uc4/OgydTQSRb', 'Hayes, Mayer and Maggio', 'Retail', '60123431299', '456 Jalan Tun Razak'),
(93, 'gogormley2k@google.de', '$2a$04$AELUxFwvYlK.8UdaXr9Dd.pr83ri23qvQIGh2HYCyPx', 'Wuckert LLC', 'Retail', '60123431300', '222 Jalan Imbi'),
(94, 'fmclinden2l@tinyurl.com', '$2a$04$65RWccSEZ.e.qXLcr7kiJ.TlNzTjW.Mm5gUsG1kXEpR', 'Kirlin LLC', 'Finance', '60123431301', '123 Jalan Ampang'),
(95, 'pextil2m@phpbb.com', '$2a$04$yHGRR/vsBUuuv5GV7iXqJOyce3YgfmXUKthIvOl7yWM', 'Medhurst, Moen and Considine', 'Retail', '60123431302', '222 Jalan Imbi'),
(96, 'sclausewitz2n@sun.com', '$2a$04$72c0AFbrTJV7Duoxa/FH/.fKMRmqlEG9U5SApjTXIay', 'Langosh, Daugherty and Feest', 'Retail', '60123431303', '789 Jalan Bukit Bintang'),
(97, 'dhultberg2o@phoca.cz', '$2a$04$NYWjl7AY4pZCf5l7rZ1DyeCv2NrmpuJ7tAocveLHKuR', 'Dickinson-Hartmann', 'Finance', '60123431304', '222 Jalan Imbi'),
(98, 'khadley2p@mapquest.com', '$2a$04$09IB44rYJXll1orWASNJi.gvojb2/HOlTV7a.5k.whI', 'Hilll, Pouros and Huel', 'Finance', '60123431305', '789 Jalan Bukit Bintang'),
(99, 'cfishby2q@simplemachines.', '$2a$04$JFDwyQJy9KkH7P.WkpcqU.7nZY1cFSmj3WhBObrFR/v', 'Cronin, Kuhic and Wisozk', 'Manufacturing', '60123431306', '101 Jalan Raja Chulan'),
(100, 'tkebbell2r@ca.gov', '$2a$04$CysfJEOxEVkjv7yjwnht3eaGmlQg7X4y2cGRbS1HB/7', 'Schulist-Zulauf', 'Finance', '60123431307', '456 Jalan Tun Razak'),
(101, 'jmcalpin2s@cnn.com', '$2a$04$MizOaS5eiyP8Au7lE/URAuLvbY2ChwCLbO37CTnAs2b', 'Sauer, Roberts and Will', 'Technology', '60123431308', '101 Jalan Raja Chulan'),
(102, 'gdempster2t@vimeo.com', '$2a$04$ApkNomxn8tIcZCF/.NA7De4IYw3YwWprO8Y0nI7NSCX', 'Ruecker LLC', 'Retail', '60123431309', '123 Jalan Ampang'),
(103, 'bdemange2u@vkontakte.ru', '$2a$04$5migy5oweXKw/PWz31xfAe9t1Ho9TOGIGmmy7aYNDNF', 'Hegmann-Stanton', 'Healthcare', '60123431310', '222 Jalan Imbi'),
(104, 'bputton2v@123-reg.co.uk', '$2a$04$Y3Sem0hT1DrHtNzpG/1S.uaZh4mhcgaYPZSoW2Bka1u', 'Herzog, Davis and Dibbert', 'Finance', '60123431311', '123 Jalan Ampang'),
(105, 'lwheaton2w@rambler.ru', '$2a$04$Tij//bo4P7YRWiIegH7bHeHn8fUNP8ptzuNynTt9oRF', 'Dibbert and Sons', 'Finance', '60123431312', '123 Jalan Ampang'),
(106, 'cmowen2x@clickbank.net', '$2a$04$oCOKinqYLHSBJ6mRnM7o/udV2gCzh2mMeLw9CMmF0MQ', 'Muller and Sons', 'Technology', '60123431313', '222 Jalan Imbi'),
(107, 'dkneel2y@newyorker.com', '$2a$04$9lWkA4DMfOUTFG/yA55ZZeFiBc2JxTzzuaSLeh5waT4', 'Stanton, Fisher and Parisian', 'Technology', '60123431314', '101 Jalan Raja Chulan'),
(108, 'mbenninger2z@de.vu', '$2a$04$BnpqanPOekjjSaSrliJhKeDJJIahr19QP.CMeGewE5w', 'Dicki-Crona', 'Manufacturing', '60123431315', '222 Jalan Imbi'),
(109, 'cmcgauhy30@nba.com', '$2a$04$dJHcsKZQxCOMKw5/./riZuoi4D90LjGgeWAmGZZj.ca', 'Toy-Veum', 'Healthcare', '60123431316', '222 Jalan Imbi'),
(110, 'mmelmar31@msn.com', '$2a$04$FH1GRBiwtrcYqPLPcxMbou7ayPFx40F4tDoNfkuGR9U', 'Nicolas Group', 'Retail', '60123431317', '222 Jalan Imbi'),
(111, 'jmullinger32@wikispaces.c', '$2a$04$SpzmPvuV6qNqlN8SZC58meGPRMrYMQFuADUWaXzSIWa', 'Gibson and Sons', 'Healthcare', '60123431318', '789 Jalan Bukit Bintang'),
(112, 'cstracey33@springer.com', '$2a$04$knhrTROcLuHWxY6AxZtNxeg6jrTZDI/9G6TTD/Brj.C', 'Reilly-Kessler', 'Finance', '60123431319', '456 Jalan Tun Razak'),
(113, 'fsappell34@geocities.jp', '$2a$04$KBcLhTlNZALnCykAm7ZT9.snacviZ4O6dR1jDdHp9iF', 'Schuppe and Sons', 'Manufacturing', '60123431320', '789 Jalan Bukit Bintang'),
(114, 'fdeerr35@shareasale.com', '$2a$04$Uae3uPJUgob56Oj29.ZJk.lEpWi5T7AP.Uq7N7g9W3m', 'Reilly, Schultz and Schaefer', 'Finance', '60123431321', '222 Jalan Imbi'),
(115, 'gprangle36@cornell.edu', '$2a$04$SVBsm.x/rwH2UlSXDN0a6uEKHlVaJSBXT1pv2zKG9Dz', 'Kassulke-Howell', 'Manufacturing', '60123431322', '789 Jalan Bukit Bintang'),
(116, 'dwillmore37@fastcompany.c', '$2a$04$ho/013klUyfpgmsoGMbE/eLv3XvSu9eU.wMTZCeTb8j', 'Kihn LLC', 'Healthcare', '60123431323', '101 Jalan Raja Chulan'),
(117, 'wtheodoris38@economist.co', '$2a$04$bOoFw.5vZuWa32CiunOXxOzAk/UejfPjzqH43uSiqaY', 'Rippin Group', 'Manufacturing', '60123431324', '456 Jalan Tun Razak'),
(118, 'jstledger39@i2i.jp', '$2a$04$VazVuf/O1K27MRQvednmY.UXFX6i0s.EX6qSfAS3Vif', 'Simonis Inc', 'Finance', '60123431325', '101 Jalan Raja Chulan'),
(119, 'mkillner3a@nytimes.com', '$2a$04$KcPt2vnshIdlar0XlTCrj.2HXdZfPw/0SC5N92O0Wbc', 'Fahey, Bechtelar and Rowe', 'Finance', '60123431326', '222 Jalan Imbi'),
(120, 'estedson3b@msu.edu', '$2a$04$DRLQ8JkCacMpW7E8n9TYMedp/QB7A1pBjKTnhn3KMSI', 'Kunze-Donnelly', 'Technology', '60123431327', '456 Jalan Tun Razak'),
(121, 'gajean3c@techcrunch.com', '$2a$04$YKJ/VSyUZHypNo2If.Vahu.lNLVExikQ5WZt33wrzH9', 'Welch-Conroy', 'Finance', '60123431328', '789 Jalan Bukit Bintang'),
(122, 'hbitten3d@nifty.com', '$2a$04$GYbdS7rCPK8sZNoV6Io.tenIXI0jt.aMtqFitAcrxRx', 'Stiedemann, Bailey and Bradtke', 'Technology', '60123431329', '222 Jalan Imbi'),
(123, 'mrein3e@tiny.cc', '$2a$04$TyM7L6yjg.KwuTKD9rslQeFMHwF/S3o6gRhZpvBJWxr', 'Schuster, Tromp and Von', 'Retail', '60123431330', '456 Jalan Tun Razak'),
(124, 'jdomico3f@spotify.com', '$2a$04$CkBkRulTrbmeZUN.z2KBf.S/sBewqy3x.X0V5SuCFlP', 'Kuvalis, Stokes and Rodriguez', 'Manufacturing', '60123431331', '789 Jalan Bukit Bintang'),
(125, 'wainsbury3g@tinypic.com', '$2a$04$5BQjAFrbu.GIPH.JW1RgB.qoCEHKARHUkuPNbGYzYj1', 'Toy, Frami and Kuhic', 'Technology', '60123431332', '456 Jalan Tun Razak'),
(126, 'dlofty3h@dropbox.com', '$2a$04$ZUfPNk.VEPewmgq0PYY8bes666MsYkX5fJI//Lao7lQ', 'Legros-Kassulke', 'Finance', '60123431333', '222 Jalan Imbi'),
(127, 'mmathen3i@google.com.hk', '$2a$04$nGQDWTd/k/FIZwGu0kT7EessDhrOc8mvQdf1lDdcT3l', 'Koch Group', 'Healthcare', '60123431334', '222 Jalan Imbi'),
(128, 'afaircliffe3j@ehow.com', '$2a$04$a0RPOhcYC6AfsMOiz7IzEuuTa8d3WSMsysL03XIKS/s', 'Wintheiser-Franecki', 'Retail', '60123431335', '123 Jalan Ampang'),
(129, 'jsondland3k@reuters.com', '$2a$04$F30RwSSUyvjlmjMSJ2Dpned4dKvyK./UPtC49JrsSxx', 'Little, Schoen and Lakin', 'Technology', '60123431336', '101 Jalan Raja Chulan'),
(130, 'rtumilson3l@elpais.com', '$2a$04$04t2FuZhzuyXulQ.A8eOQ.8t0oc2T/ObVHCkQcVO65n', 'Jerde LLC', 'Finance', '60123431337', '789 Jalan Bukit Bintang'),
(131, 'chowling3m@ox.ac.uk', '$2a$04$0RVxp/oHpSYvKS6qvMlDj.zC.jKhjvRqBBjqsvdXG9L', 'Emmerich-Orn', 'Retail', '60123431338', '789 Jalan Bukit Bintang'),
(132, 'llyptrade3n@cdbaby.com', '$2a$04$TAA0NFfPBAzGHQd7Djjc0.A0nHFIUDlN5d9Pe9Juu/J', 'Halvorson-Kling', 'Technology', '60123431339', '222 Jalan Imbi'),
(133, 'ereany3o@hibu.com', '$2a$04$MY5qcBuQHeFam7lwToyrHe/h46bXXsY.0kvLyytIxqE', 'Gutmann-Mosciski', 'Technology', '60123431340', '222 Jalan Imbi'),
(134, 'cmeeron3p@pagesperso-oran', '$2a$04$Z1vTTVwGUecY7i4cuy99ZuzUT5mG.APnEomf/OhdGzG', 'Berge-Runolfsdottir', 'Finance', '60123431341', '456 Jalan Tun Razak'),
(135, 'ukidson3q@taobao.com', '$2a$04$UjBZxH89ovtHvvLcwwZ9ieY.8fOsOOOPh/YaVK4A/5G', 'Treutel, Metz and Block', 'Retail', '60123431342', '456 Jalan Tun Razak'),
(136, 'hlevay3r@goo.gl', '$2a$04$.FVmIxNxkIoqM/F5UZYTNuHoFqziTdTT6muBu1sqsj7', 'McClure, Kunde and Lemke', 'Technology', '60123431343', '101 Jalan Raja Chulan'),
(137, 'cmagarrell3s@yale.edu', '$2a$04$ba1VBppqK3CvTekgyfK9cujqrthpPjHkGblWA.Bzjn/', 'Cruickshank-Dickens', 'Finance', '60123431344', '456 Jalan Tun Razak'),
(138, 'byukhov3t@umn.edu', '$2a$04$OQQ3dOueLM6G6U0E73iZDupqpkbf/ecKwKxDvwbGlRf', 'Little, Nader and Hegmann', 'Healthcare', '60123431345', '123 Jalan Ampang'),
(139, 'jmarczyk3u@marriott.com', '$2a$04$Id77CUwP4fyfLSB2DPJFbuSElAlLHJa.Lb6AJXOve0F', 'Murray Inc', 'Technology', '60123431346', '101 Jalan Raja Chulan'),
(140, 'lturnpenny3v@slashdot.org', '$2a$04$8V.4q.KfynNyMiJZ70Wvb.ZwPqZqbGjdd9KY9Fz7rna', 'Rippin LLC', 'Manufacturing', '60123431347', '789 Jalan Bukit Bintang'),
(141, 'gjeandot3w@meetup.com', '$2a$04$Q4lnZG/4Zp6T0bfQeM0bLOE9FwZpJVcWMuBOWhmGws.', 'Kuhlman Group', 'Finance', '60123431348', '456 Jalan Tun Razak'),
(142, 'nfilasov3x@ow.ly', '$2a$04$MOABw0ZZ1h5xQFIPs8hUSOjO1d/aghBmrhqWYcMrEpe', 'Smitham-Emard', 'Healthcare', '60123431349', '456 Jalan Tun Razak'),
(143, 'mkopecka3y@chronoengine.c', '$2a$04$f0XEbtPwsyxLurI.yEESNeCG2Lhp3Hd8lizJAq4.W/U', 'Borer-Wehner', 'Manufacturing', '60123431350', '789 Jalan Bukit Bintang'),
(144, 'lpopelay3z@google.nl', '$2a$04$xA3ZaXTDCCZXNow8sDzd1eYdhV2uCPpW6ClSP3nr.qq', 'Baumbach, Prohaska and McGlynn', 'Technology', '60123431351', '222 Jalan Imbi'),
(145, 'stiron40@wordpress.org', '$2a$04$txlnCzl4kJ7gz2Tcz4hpXePRv6AMXPk/6LU4Ye3AYAe', 'Borer, Fritsch and Morissette', 'Technology', '60123431352', '789 Jalan Bukit Bintang'),
(146, 'aollerenshaw41@jugem.jp', '$2a$04$U5hBKXMWpFWBMiCcVCT0Hei4s8TPifnkzI2gIUBbvjL', 'Fay-Berge', 'Finance', '60123431353', '789 Jalan Bukit Bintang'),
(147, 'cbucksey42@nsw.gov.au', '$2a$04$ZUTukgBcjTor8nUQaOh8F.oVnRDxzt1FYAaqlnffcgJ', 'Homenick, Hirthe and Hessel', 'Finance', '60123431354', '101 Jalan Raja Chulan'),
(148, 'sscoular43@nbcnews.com', '$2a$04$g6Xr2fGrHX7IEWwMW5ciW.4Et4eqcMJbV35CHS5NAuu', 'Borer Group', 'Healthcare', '60123431355', '789 Jalan Bukit Bintang'),
(149, 'mcapoun44@paginegialle.it', '$2a$04$e/zoQlcxemr4/wc3siI3AOlCB2Efp1Y5wDJlpShpM/m', 'Lynch LLC', 'Manufacturing', '60123431356', '222 Jalan Imbi'),
(150, 'yturbard45@boston.com', '$2a$04$nCokPGLKkA1.LscdfH3cbOjsiOLI15Tgf6eZIyc/MH7', 'Howell, Hermiston and Tillman', 'Retail', '60123431357', '123 Jalan Ampang'),
(151, 'cbrundall46@chicagotribun', '$2a$04$kTBaO3qWuFbDCM3xJEOeVO.AzHFZwYXrhOnO2Hp8qh8', 'Grimes Inc', 'Healthcare', '60123431358', '101 Jalan Raja Chulan'),
(152, 'jlaurent47@paypal.com', '$2a$04$XsoZzsAqQnrwad2YPQRnZewLLZVRT8s/qdoOTHkDpJp', 'Schinner-Lesch', 'Manufacturing', '60123431359', '222 Jalan Imbi'),
(153, 'kcranny48@usnews.com', '$2a$04$V0N6sotApcHXRPqH0Oc3IuzI4cQZfOQlkmYUR1IJXUp', 'Torp-Schmeler', 'Retail', '60123431360', '789 Jalan Bukit Bintang'),
(154, 'hhardwick49@angelfire.com', '$2a$04$a8y4suvdN819MbnZ3xmMDuxFxgkm96i2nYFqUUCd.kc', 'Heller and Sons', 'Retail', '60123431361', '123 Jalan Ampang'),
(155, 'lbalderston4a@list-manage', '$2a$04$b5SskIDdcrWTqIeNc3dsae2/X82adEFvgzgUlO9TEQo', 'Collier-Douglas', 'Finance', '60123431362', '101 Jalan Raja Chulan'),
(156, 'nbrisson4b@gravatar.com', '$2a$04$GCbh0IupQ12/YHsOnNLPqe5iZDeMBcmhY9SLUy4gQEv', 'Morar LLC', 'Healthcare', '60123431363', '789 Jalan Bukit Bintang'),
(157, 'cdjurisic4c@hud.gov', '$2a$04$aQns9mujcTLs/Bt3awibwerI9Zv7i.GiqPWuojGxPVT', 'Parisian-Murray', 'Technology', '60123431364', '123 Jalan Ampang'),
(158, 'bbeddin4d@oakley.com', '$2a$04$JQlWkI1nYyE54MxfQ17K4.DVmBoLgfSwTAMyfrVyFS2', 'Ritchie, Walsh and Hamill', 'Manufacturing', '60123431365', '101 Jalan Raja Chulan'),
(159, 'dpavese4e@nyu.edu', '$2a$04$taWzeMzP.xbog2KBdWOHGOAkNv0bKOg1khH95xrk/7D', 'DuBuque-Rutherford', 'Healthcare', '60123431366', '789 Jalan Bukit Bintang'),
(160, 'erobelet4f@phoca.cz', '$2a$04$KkxpNS/jasM9Jrwng4IkoOJZKcuKbLAkA3wG89gXOry', 'Kozey, Rippin and Miller', 'Finance', '60123431367', '456 Jalan Tun Razak'),
(161, 'dmilbourn4g@de.vu', '$2a$04$jYWoFvJRh5iKqfQAVjbk/.lR3zWSXpX0ZUYU0KgmDgF', 'Schinner-Miller', 'Technology', '60123431368', '456 Jalan Tun Razak'),
(162, 'bpieche4h@zimbio.com', '$2a$04$mdwfptseS9YHBF1katBIp.OMGTNUiS4P.g9inRnmY4P', 'Erdman, Larson and Harris', 'Technology', '60123431369', '101 Jalan Raja Chulan'),
(163, 'cmasterson4i@pagesperso-o', '$2a$04$HLh17avfRvsgjUJlmUkveeOAcrcKCWUZAmqKJe9.9eR', 'Labadie Inc', 'Retail', '60123431370', '123 Jalan Ampang'),
(164, 'abreffit4j@networkadverti', '$2a$04$VGpBdR/9pHCuZKpng6fcWuzN01ozNgE17jZHF9G4Gl7', 'Wiegand, Rau and Douglas', 'Technology', '60123431371', '101 Jalan Raja Chulan'),
(165, 'tlyosik4k@unblog.fr', '$2a$04$2hLpQWCoKqnqXzoxxw3ehOngEzxydz/jeKqFinEWNyX', 'Hirthe-Harris', 'Manufacturing', '60123431372', '123 Jalan Ampang'),
(166, 'bthorneloe4l@infoseek.co.', '$2a$04$7Uuf.eWzeFKPfEWctFg4hObz4zOkx.uN45ogmoGfe6T', 'Durgan-Maggio', 'Retail', '60123431373', '101 Jalan Raja Chulan'),
(167, 'tgarrad4m@ovh.net', '$2a$04$0309HwIlGo1LxsyEm9FABe.FSlh8nltBKCmGdi6JdHg', 'Spinka Group', 'Healthcare', '60123431374', '789 Jalan Bukit Bintang'),
(168, 'blaurenson4n@google.pl', '$2a$04$phfO8KFYBhd9uIhTTq0VEe27Diu2Svo/gRNfbgBtkOW', 'Turcotte LLC', 'Technology', '60123431375', '456 Jalan Tun Razak'),
(169, 'bgarrould4o@webs.com', '$2a$04$vKULQDu6FluilD5Zh3KwvOGnge1qllQRl2sUiK0Ptxp', 'Bednar Group', 'Finance', '60123431376', '101 Jalan Raja Chulan'),
(170, 'lrepper4p@vistaprint.com', '$2a$04$gKIj/zUxTBnpB9Hfz1.sp.jr/NuBtecYSXuUFaSMJwd', 'Davis LLC', 'Manufacturing', '60123431377', '123 Jalan Ampang'),
(171, 'shands4q@elegantthemes.co', '$2a$04$I3v8fbpWuOAdkrehZvzCAeIv0JsR0Eym.rnHWPbRQgY', 'Veum and Sons', 'Retail', '60123431378', '222 Jalan Imbi'),
(172, 'abircher4r@ebay.co.uk', '$2a$04$AK74rQwbD1DLEwh12HV7Guwnu43mKeZUo37yMCWDo8Q', 'Reichel, Orn and Friesen', 'Finance', '60123431379', '123 Jalan Ampang'),
(173, 'ksandes4s@ucoz.com', '$2a$04$dYfg/Uj2ctE0I3jr7CLtPeCGt.mETRfSnqSXcMQoEjY', 'Larson Group', 'Retail', '60123431380', '101 Jalan Raja Chulan'),
(174, 'mcamin4t@icq.com', '$2a$04$F36D6XdqakcSFaiG8VC1Be2QqhYxOMay2CNn1o4pSiR', 'Gulgowski-Torp', 'Healthcare', '60123431381', '789 Jalan Bukit Bintang'),
(175, 'drapps4u@dailymotion.com', '$2a$04$jDbTIkc/pKX5BU9ddxwtJOqVavVj/FzhSwpoTgWWwI6', 'Konopelski-Raynor', 'Healthcare', '60123431382', '123 Jalan Ampang'),
(176, 'kcamlin4v@ucla.edu', '$2a$04$pFHRtKDInNwzPadRKLVrR.bV0f2XTgrN0LurNB89ovP', 'Von, Muller and Hayes', 'Retail', '60123431383', '123 Jalan Ampang'),
(177, 'bduncklee4w@infoseek.co.j', '$2a$04$PsWGTx/uVYx0UtEpi8Bpr.e8pivOY8W8qFVshpguSna', 'Skiles, Williamson and Macejko', 'Healthcare', '60123431384', '456 Jalan Tun Razak'),
(178, 'nmcbeth4x@seesaa.net', '$2a$04$DMe33YeteHQCPiEwIavgdOCJ5aM41A.oCpHK0ZUYHGH', 'Leuschke-Schuster', 'Retail', '60123431385', '101 Jalan Raja Chulan'),
(179, 'leffemy4y@yandex.ru', '$2a$04$TVLV1bf5dPdRgG5eA4NZReFP8vMeyaJzGLDK2i33.5s', 'Schumm, Ziemann and Schoen', 'Retail', '60123431386', '789 Jalan Bukit Bintang'),
(180, 'lcanham4z@craigslist.org', '$2a$04$glj4OYgdufZYAZPQpu7s4OWqNkQtdTT4CwayU.n3HK9', 'Hermann, Bauch and Schuster', 'Finance', '60123431387', '123 Jalan Ampang'),
(181, 'rstruss50@businesswire.co', '$2a$04$k2gyhwZ/g2oumHG5c1p2rue1QJqvtjqdqH0mBmL3n2L', 'Bashirian-Weissnat', 'Retail', '60123431388', '123 Jalan Ampang'),
(182, 'dwoollcott51@scientificam', '$2a$04$0x5te.WUdMkrw58yAOXptOE4FVUlbH8WkzvFC2qE1wB', 'Ondricka, Gulgowski and Klocko', 'Healthcare', '60123431389', '789 Jalan Bukit Bintang'),
(183, 'agiscken52@storify.com', '$2a$04$nmo/ZyYDZXGRGfPXIL8EquM.HYD.s/x3UVnIIfwW1p/', 'Stroman and Sons', 'Retail', '60123431390', '456 Jalan Tun Razak'),
(184, 'abrotherton53@imageshack.', '$2a$04$a6NEhfqpY9drVC4WYeAwh.pPuZs91Fhesv3Om4OCaeo', 'Mraz-Pagac', 'Finance', '60123431391', '123 Jalan Ampang'),
(185, 'swakeman54@ovh.net', '$2a$04$9hu9TAitQw8Iih1DwKCWjOV12.mtg6pgFGou0/dV2N0', 'Boehm, Harvey and Shanahan', 'Manufacturing', '60123431392', '222 Jalan Imbi'),
(186, 'rhabbergham55@kickstarter', '$2a$04$aiD4JABp7oq3UGgwhe34lOnOAh4bPaazOhEKbnl13sJ', 'Huels, Stroman and Jones', 'Healthcare', '60123431393', '123 Jalan Ampang'),
(187, 'mheenan56@prweb.com', '$2a$04$GjrfnTzZl44vOUCu5dHzXOfUMHpgxo5yLQniACMNqrX', 'Borer, Deckow and Rippin', 'Healthcare', '60123431394', '789 Jalan Bukit Bintang'),
(188, 'rpritchitt57@goodreads.co', '$2a$04$smoyHNASvoZna.nzsLPkY.vFlJDQ4w21UJsvzI4mWq6', 'Graham, Crooks and Wisoky', 'Healthcare', '60123431395', '123 Jalan Ampang'),
(189, 'rgillion58@guardian.co.uk', '$2a$04$prwkVr/ArOfBwUlyRLS/EeCphe3/n.GCDOjwd89WsJc', 'Green LLC', 'Healthcare', '60123431396', '222 Jalan Imbi'),
(190, 'khallward59@nytimes.com', '$2a$04$nZhv9osskxupqQLyFDwIhec1sxkmXUmOaTp5VSuw6M2', 'White, Walker and Dicki', 'Technology', '60123431397', '789 Jalan Bukit Bintang'),
(191, 'rcawsby5a@rediff.com', '$2a$04$N.wGeAKfMVdVvR1H90368OU2c8Pi3UQkJ3lpCbe16s2', 'Armstrong-Koepp', 'Retail', '60123431398', '101 Jalan Raja Chulan'),
(192, 'lallatt5b@prnewswire.com', '$2a$04$9B0cexrYCjrte4wnSKUdAOijTOjTDS1/.wWKsKyXwJj', 'Kling-Will', 'Technology', '60123431399', '789 Jalan Bukit Bintang'),
(193, 'abann5c@prlog.org', '$2a$04$w8myjYamCJtKSEW8uh8/dO.jBtgYu0pPSeG6q2USf3.', 'Hartmann Group', 'Finance', '60123431400', '456 Jalan Tun Razak'),
(194, 'shinnerk5d@tamu.edu', '$2a$04$shHqjsVn04XPnNOEUr3MkO6d8ZCUGIVLk8jNt/xKSEl', 'Wiza, Wintheiser and Kassulke', 'Technology', '60123431401', '123 Jalan Ampang'),
(195, 'jpoolman5e@nhs.uk', '$2a$04$3iQ8MCHs5wRtvrKhhxNIa.jYFvKf3mIPjjSlzVbf5ry', 'Champlin, Torphy and Kunde', 'Finance', '60123431402', '456 Jalan Tun Razak'),
(196, 'dleivers5f@utexas.edu', '$2a$04$tFiDpWGa1nnPtk3dQv540Odbt32nPqLQl36Fvur4UCn', 'Oberbrunner, Skiles and Jones', 'Technology', '60123431403', '101 Jalan Raja Chulan'),
(197, 'dbeddoes5g@joomla.org', '$2a$04$Iqw5ZAQFoJV29K7wKqHTyuxEG13huKlWy1oniNaFRod', 'Bailey-Reynolds', 'Manufacturing', '60123431404', '123 Jalan Ampang'),
(198, 'dnosworthy5h@nhs.uk', '$2a$04$h2ypXBaBD0AOxMu7IKId1ehlSloRyJ1Rri0tCUZPcXc', 'Howell Group', 'Healthcare', '60123431405', '123 Jalan Ampang'),
(199, 'dconsadine5i@boston.com', '$2a$04$u5a5jLtRpGjGSZK6KuKW6Oq3QXAry2xYgDuL4XBxTSs', 'Okuneva-Hammes', 'Technology', '60123431406', '789 Jalan Bukit Bintang'),
(200, 'ndurbyn5j@globo.com', '$2a$04$iu6Pqm1pz93reqIEz6bBeu1JnGq.A5YSnb446HAGQ9T', 'Osinski-Abernathy', 'Technology', '60123431407', '456 Jalan Tun Razak'),
(201, 'cblasl5k@wufoo.com', '$2a$04$wbjlQ2AeSO39V4nq5fLQl.pYBwjwTGe/uFJ1zrnj6gu', 'Satterfield LLC', 'Retail', '60123431408', '101 Jalan Raja Chulan'),
(202, 'gwaghorne5l@miitbeian.gov', '$2a$04$PK5VqpuGUnKC7L7ksXkkD.z/n3T.Bc01l.X5rwDDM6w', 'Schultz-Gleason', 'Healthcare', '60123431409', '789 Jalan Bukit Bintang'),
(203, 'arosedale5m@ibm.com', '$2a$04$4cpcCAT/SCrlFEfC1LnZ0.V6xP//C2sSWENcxsYGOGY', 'Hackett, Wilderman and Wolff', 'Technology', '60123431410', '101 Jalan Raja Chulan'),
(204, 'eromayn5n@tuttocitta.it', '$2a$04$x0L6zJkXw3xoFWo7ZIZ3AuI0.J63G0TJlD1gM3bEO4j', 'Mills Group', 'Finance', '60123431411', '101 Jalan Raja Chulan'),
(205, 'omckinney5o@rediff.com', '$2a$04$gr3XiWBYaQk8QCeTm8z9teLiG7Q2Lf0yJ/C44pjcQvj', 'Kuvalis-Bechtelar', 'Healthcare', '60123431412', '123 Jalan Ampang'),
(206, 'cbehnke5p@ehow.com', '$2a$04$xqMUQ.ehDqhOiO6IGiUjR.JlEviASYzKVRrXNPRr9BF', 'Block LLC', 'Retail', '60123431413', '789 Jalan Bukit Bintang'),
(207, 'dyu5q@webs.com', '$2a$04$I0xP8Rz8ifTyNF1K96diH.RAmGxVgrsEpdZ909Wg6Fd', 'Kihn LLC', 'Retail', '60123431414', '789 Jalan Bukit Bintang'),
(208, 'mvanschafflaer5r@zimbio.c', '$2a$04$mcIPzEG8AwO9Lk7KZ39JJuPVptRyk1F.FdyCRW5WcmB', 'Ritchie, Bechtelar and Marks', 'Finance', '60123431415', '789 Jalan Bukit Bintang'),
(209, 'hdechastelain5s@aol.com', '$2a$04$i4VgWoDgjjRKZRaByx/s7u/KeyxSRB/wJMK9WUHhm1a', 'Daniel, Trantow and Lueilwitz', 'Healthcare', '60123431416', '123 Jalan Ampang'),
(210, 'cfourcade5t@ed.gov', '$2a$04$teVtXCxsK7YawW3TlLqufekKhsvPPODCyPEaVKy5CZv', 'Renner, Nader and Krajcik', 'Retail', '60123431417', '456 Jalan Tun Razak'),
(211, 'mchessum5u@yolasite.com', '$2a$04$e3brIcVyk92uG0PxaXwrceycDiKH/GXdhLUdSAYXbxM', 'Wolf and Sons', 'Manufacturing', '60123431418', '123 Jalan Ampang'),
(212, 'afennick5v@nationalgeogra', '$2a$04$rgP7uKyfEwAMhm7z0aprCOaHRNwQNt.wgyOGc1UURuh', 'Buckridge, Turner and Dibbert', 'Healthcare', '60123431419', '789 Jalan Bukit Bintang'),
(213, 'shayfield5w@surveymonkey.', '$2a$04$xVqckZmSRX9RgCDOsaVEXu3cX1/QDGcPqBVwDfrMFtu', 'Langworth LLC', 'Finance', '60123431420', '101 Jalan Raja Chulan'),
(214, 'dlooney5x@epa.gov', '$2a$04$/SgzfYAvkFNo5YCBlltlJubx9WXCKk6mcaFWJ.lh0ed', 'Keeling Inc', 'Manufacturing', '60123431421', '123 Jalan Ampang'),
(215, 'jsmorfit5y@hao123.com', '$2a$04$t8Fhmf1cgHjyZb9d8b701OSYURhteexmTevmkAJcE6K', 'O\'Kon and Sons', 'Manufacturing', '60123431422', '789 Jalan Bukit Bintang'),
(216, 'mbardill5z@rediff.com', '$2a$04$KymbXZmcYfhh2x7dS.9eMe7wh0wZjaA8pK7WTizFx99', 'Conroy Group', 'Retail', '60123431423', '456 Jalan Tun Razak'),
(217, 'jrapelli60@whitehouse.gov', '$2a$04$OvmNn3uze2idYcn8MO4pVu4GUN.s3iY8U/Ne1aiZ7m0', 'Vandervort, Lueilwitz and Grad', 'Healthcare', '60123431424', '101 Jalan Raja Chulan'),
(218, 'awestcott61@mapy.cz', '$2a$04$SGW9VpXkQcvLDKqsmCe2YOtzRz0LVaWaW1xK5tJCmC0', 'Gottlieb, Kuhic and Nicolas', 'Finance', '60123431425', '222 Jalan Imbi'),
(219, 'rkenryd62@comsenz.com', '$2a$04$LJTMqSUlrCY.eTU57yUJW.1YOECmKLjPCGZgCW956LB', 'Schulist, Dickinson and Ferry', 'Technology', '60123431426', '789 Jalan Bukit Bintang'),
(220, 'calvarado63@princeton.edu', '$2a$04$anVpXSeFjCc9IuUBnvDO7us3X.FSXMQXgMp/V085bsO', 'Morar and Sons', 'Finance', '60123431427', '101 Jalan Raja Chulan'),
(221, 'zpauley64@oakley.com', '$2a$04$Ur5SUwdPhSgBQ99fQxneWuI1dgoDbFt3rFYNvrhUHiZ', 'Corwin, Halvorson and Grady', 'Finance', '60123431428', '789 Jalan Bukit Bintang'),
(222, 'rgammell65@addtoany.com', '$2a$04$7snA54iGYQEBM95nXJHum.LR9oR8oaUBAshYUM.4F07', 'Gutkowski, Jacobs and Fadel', 'Manufacturing', '60123431429', '789 Jalan Bukit Bintang'),
(223, 'erawet66@wikimedia.org', '$2a$04$Jq3zzNNtpsYxgP8ftXDAPuxMMKXTtK76ZwM8d5UlQEi', 'Davis, Koepp and Runolfsson', 'Retail', '60123431430', '222 Jalan Imbi'),
(224, 'tpotteridge67@earthlink.n', '$2a$04$ESIODd5eK8.gOeIX52QNN.7rQELpBxS1DJFLVGdB38K', 'Schmidt LLC', 'Manufacturing', '60123431431', '456 Jalan Tun Razak'),
(225, 'mheadings68@behance.net', '$2a$04$Br3R3YR.MPdgkiMZxTvfmOhYZ8OIWwPXrpxdkrJSRi4', 'Wyman, Kessler and O\'Hara', 'Technology', '60123431432', '789 Jalan Bukit Bintang'),
(226, 'mnigh69@livejournal.com', '$2a$04$thsmlSeqqm4srEMgb83Khuqysda/CVccqnLF9jP5cCc', 'Prohaska, Kertzmann and Wyman', 'Healthcare', '60123431433', '789 Jalan Bukit Bintang'),
(227, 'dkerby6a@ebay.co.uk', '$2a$04$XeUzLUP63SqvcNIqXKj5WeNq7WYWAJjlask6gGyHoRk', 'Robel, McKenzie and Turner', 'Retail', '60123431434', '456 Jalan Tun Razak'),
(228, 'jlemasney6b@dagondesign.c', '$2a$04$V86Zl7Ba5ai35eAkcuxljutQTmX7bPIyU8dzelFzCru', 'Osinski-McDermott', 'Retail', '60123431435', '222 Jalan Imbi'),
(229, 'dfarnes6c@globo.com', '$2a$04$2Jm8I6ySndZVeuGfMCbeRu6zed/HDXqYH0KFJoS5tE5', 'Conn, Baumbach and Rohan', 'Technology', '60123431436', '222 Jalan Imbi'),
(230, 'qletchford6d@wired.com', '$2a$04$vPVTFvCbxZQ9muc.rxUTlOyW27EI5QpVgVmFeCs/siD', 'Sawayn, Leuschke and Prosacco', 'Healthcare', '60123431437', '789 Jalan Bukit Bintang'),
(231, 'tdelhanty6e@friendfeed.co', '$2a$04$Y7aaBQVzvjeynmFjVk/Iu.X181MnrvRBHXY7D2cko8R', 'Kiehn and Sons', 'Finance', '60123431438', '123 Jalan Ampang'),
(232, 'bcahalin6f@mapy.cz', '$2a$04$oB9P1TcyHDe6F2WP0KUSueDfWapK/jYi.Klg3/CLifU', 'Swaniawski, Rolfson and Larkin', 'Technology', '60123431439', '222 Jalan Imbi'),
(233, 'gmelrose6g@cyberchimps.co', '$2a$04$HuQ0mkaKODwHlIUmqYFf..aDZ3EfGhM4Uz695rsXipS', 'Bruen Inc', 'Healthcare', '60123431440', '101 Jalan Raja Chulan'),
(234, 'dlefevre6h@privacy.gov.au', '$2a$04$oowIBkKV4X94Cki/yfCOlef1hQaLrytxehcvd5ykcoh', 'Cronin-Aufderhar', 'Manufacturing', '60123431441', '789 Jalan Bukit Bintang'),
(235, 'cmoohan6i@google.com', '$2a$04$9UyzRnyF2xgbhZbp5CxOVul8elGaSv01I5Q0ATCmloU', 'Marquardt-Schultz', 'Retail', '60123431442', '123 Jalan Ampang'),
(236, 'bscottrell6j@miibeian.gov', '$2a$04$oAXbOaahAL9crLgDgHXenuw0zMPvvlPOhERb.SAW5YR', 'Robel-Kub', 'Manufacturing', '60123431443', '789 Jalan Bukit Bintang'),
(237, 'gkidston6k@vimeo.com', '$2a$04$dKrfbppXkgzDM13GS/FDpe89VqAkiinz3.D8tgIa6Yj', 'Carroll-Effertz', 'Finance', '60123431444', '456 Jalan Tun Razak'),
(238, 'kmocher6l@yahoo.co.jp', '$2a$04$TK9j6pZ.l1pq6/eQBBFSuupmMNbASopZNlTvRtRcTs7', 'Graham, Klein and Torphy', 'Finance', '60123431445', '456 Jalan Tun Razak'),
(239, 'gcoase6m@hhs.gov', '$2a$04$YpvkAoe5b22NYOsLVaerB.mpTnvlOZyOhwSB/HPrQ1u', 'Rath Inc', 'Manufacturing', '60123431446', '123 Jalan Ampang'),
(240, 'lschulken6n@si.edu', '$2a$04$Y/amKxhpYmRCH2JNfigACehgwFAx39d4QCNXL1nM88x', 'Morar Inc', 'Retail', '60123431447', '101 Jalan Raja Chulan'),
(241, 'louldcott6o@chicagotribun', '$2a$04$oLM68Bm.51krnjhGKW2HCeMfxHt2T2/Dve/AnQldusg', 'Jakubowski-Raynor', 'Retail', '60123431448', '789 Jalan Bukit Bintang'),
(242, 'cpitson6p@paginegialle.it', '$2a$04$NAZqvt0jnZN.03hcTWyMPe3HvoETsaS7cTecqM4n3NB', 'Thompson-Hudson', 'Healthcare', '60123431449', '789 Jalan Bukit Bintang'),
(243, 'zhalford6q@issuu.com', '$2a$04$YTNhq6tPr.S18hvrZj072O0W8vrtoDa7H1RHTyvTlEW', 'Murphy LLC', 'Manufacturing', '60123431450', '789 Jalan Bukit Bintang'),
(244, 'hhinchshaw6r@tinyurl.com', '$2a$04$FlKRZoFNungk9v4gEmSVxOUQel4kUIIk3IK1iwriUwn', 'Thompson and Sons', 'Healthcare', '60123431451', '789 Jalan Bukit Bintang'),
(245, 'ahasnney6s@microsoft.com', '$2a$04$ZOUUaTG.YcZYBT7PpxsIdOWOz71aruqTdY39Br4jUyE', 'Collins, Purdy and Dooley', 'Healthcare', '60123431452', '101 Jalan Raja Chulan'),
(246, 'cdrewitt6t@posterous.com', '$2a$04$H8/BI0q2IklTvFoN6dboYeK9PaDm3Dc9.XGqlY.g8bP', 'Kohler, Flatley and Thompson', 'Finance', '60123431453', '123 Jalan Ampang'),
(247, 'rcorck6u@spiegel.de', '$2a$04$7TexAB6Cx4P.z0ISKv/4PeQysBMYMwcYbDAWzQT7/9E', 'Morissette, Langworth and Jast', 'Finance', '60123431454', '123 Jalan Ampang'),
(248, 'rloveday6v@nhs.uk', '$2a$04$hPQqmOfSVCmhrc1uk9Nd7u03dRzRbuiHEvHFNH0RvKO', 'Huels Inc', 'Retail', '60123431455', '222 Jalan Imbi'),
(249, 'vwholesworth6w@ocn.ne.jp', '$2a$04$BxFJePSvEuA0W/eRuUoXIOHLsBm4/V2.DInNsjHUAX6', 'Beatty LLC', 'Retail', '60123431456', '789 Jalan Bukit Bintang'),
(250, 'amccard6x@bloglovin.com', '$2a$04$l7uhLp3gJ7CwkcJgetG.8./6lIDxqqyLQ3WsNEtWepC', 'Shanahan-Deckow', 'Technology', '60123431457', '123 Jalan Ampang'),
(251, 'wolney6y@time.com', '$2a$04$lxslVEaMkn7hQiQxIFb1PeDnBaOavkcQbF5By5KR7FC', 'Wuckert, Simonis and Koss', 'Retail', '60123431458', '789 Jalan Bukit Bintang'),
(252, 'jgariff6z@jimdo.com', '$2a$04$HyQOwI9KzFz4vyVgOD.1W.39UhvOLi2oFTmKpg2EEak', 'Zboncak, Batz and Dooley', 'Technology', '60123431459', '789 Jalan Bukit Bintang'),
(253, 'rpenrith70@opera.com', '$2a$04$4Xc2cjoBdWmzFmiXKQ8tceZV2z8oeykQhi5bDwwosPH', 'Russel Group', 'Healthcare', '60123431460', '456 Jalan Tun Razak'),
(254, 'jgallafant71@pcworld.com', '$2a$04$Ip6I9m/JpvGHD30JTmrgiOKjf4glJhbCrqY3Yq29opC', 'Sporer and Sons', 'Technology', '60123431461', '789 Jalan Bukit Bintang'),
(255, 'mbruton72@china.com.cn', '$2a$04$BATHC6EHiUrVX4qAxF.yuekIPh/VbTEVWHpbdQ.wTQB', 'Olson-Steuber', 'Finance', '60123431462', '123 Jalan Ampang'),
(256, 'lclem73@oaic.gov.au', '$2a$04$g2sfVEa8V88QId5OBI/asuFulP/AupL4W.KilBj2Qy9', 'Brown-Torp', 'Retail', '60123431463', '456 Jalan Tun Razak'),
(257, 'eprangle74@canalblog.com', '$2a$04$kUWE1sE3JbnVaU4inI/2U.6l7nRkPxPE/1WU5Ii4EC7', 'Rogahn Group', 'Healthcare', '60123431464', '222 Jalan Imbi'),
(258, 'cvalentine75@statcounter.', '$2a$04$1b/yPg37qg5eTlZLiqcg6ux2LTaJc84G9bxcaV3pTLa', 'Jacobs-Dickinson', 'Retail', '60123431465', '123 Jalan Ampang'),
(259, 'cdametti76@wix.com', '$2a$04$QWfJQJhKBKHEmw6JX44D9ONAUOknPamgHMtDCoHvEup', 'Bashirian, D\'Amore and Little', 'Technology', '60123431466', '456 Jalan Tun Razak'),
(260, 'rczyz77@webeden.co.uk', '$2a$04$GG7YI5IvI61n4Gt0JJzYv.XBpPyyiLdNgodckcHQga.', 'Kutch, Steuber and Brakus', 'Healthcare', '60123431467', '789 Jalan Bukit Bintang'),
(261, 'oswindells78@netlog.com', '$2a$04$Xp2ZU2xA5EMW3/IgnQk9CO2RQCfEGtA5rtK.xiJxRNi', 'Macejkovic-Bernier', 'Retail', '60123431468', '222 Jalan Imbi'),
(262, 'hmaplestone79@opera.com', '$2a$04$Gx79Evo9DDELnxTU0q.XNuTEKv96/ibuj.dgDIV8Y2v', 'Morissette, Collier and Frami', 'Retail', '60123431469', '222 Jalan Imbi'),
(263, 'svirgo7a@example.com', '$2a$04$NJjDq5T5MeQac8cocmH4FOyQZXnf931k.afT5u8sp4k', 'Berge-Lindgren', 'Finance', '60123431470', '456 Jalan Tun Razak'),
(264, 'lpidgeon7b@scientificamer', '$2a$04$3L8WJ.rsCB8/q0KhJwrP5eOy.H8JbZdrDTOWhz/2vSN', 'Stokes LLC', 'Technology', '60123431471', '222 Jalan Imbi'),
(265, 'marsey7c@jimdo.com', '$2a$04$LguGwUFrIlT9oqVAoycdTuwFHWADXWTk2q1XLH6PYvd', 'Bradtke, Schumm and Huels', 'Retail', '60123431472', '789 Jalan Bukit Bintang'),
(266, 'tbovey7d@networksolutions', '$2a$04$Gsydpa8mcBPVEfd58v1XUOXEZaXDanX98woz/6RFZj3', 'Greenfelder LLC', 'Technology', '60123431473', '222 Jalan Imbi'),
(267, 'ppowlesland7e@addtoany.co', '$2a$04$dn/ilWoBxW5MAtTTFzAKm.TAPdRRymGshai4hcgPkmn', 'Hilpert-Pfeffer', 'Healthcare', '60123431474', '123 Jalan Ampang'),
(268, 'dpayn7f@statcounter.com', '$2a$04$jKJJf1mPNAcX3tbqoQOTzOMQPraexSu9NuNtlRAKEqI', 'Sipes, Haley and Kerluke', 'Finance', '60123431475', '123 Jalan Ampang'),
(269, 'ssteuart7g@topsy.com', '$2a$04$kPEue9uoRGAGH7wyDYdDdepTtIJoKMHzrTesAfjfXpm', 'Feil-Heaney', 'Technology', '60123431476', '456 Jalan Tun Razak'),
(270, 'snoquet7h@irs.gov', '$2a$04$Lj1odoJcI8s5hqtUkq0ilesol70qpb7uNK5cP6B.IkK', 'McLaughlin, Hessel and Welch', 'Healthcare', '60123431477', '222 Jalan Imbi'),
(271, 'wwaadenburg7i@arizona.edu', '$2a$04$rJbAucNziT34zJ5ox29HZOlTwSJtkLsz4zhJvJk.Lz4', 'Ernser-Hayes', 'Healthcare', '60123431478', '123 Jalan Ampang'),
(272, 'ccaulfield7j@cmu.edu', '$2a$04$TJQtHFwNVQQB3N2hNBazZuq5FKekEUPq9eiOVz6sC9/', 'Brakus Inc', 'Technology', '60123431479', '456 Jalan Tun Razak'),
(273, 'lloines7k@yolasite.com', '$2a$04$XFwFQDjS53XVEdBTr1EYqOzmzI20ehtwID4ZrfoRQYE', 'Romaguera-Larkin', 'Technology', '60123431480', '222 Jalan Imbi'),
(274, 'jcharle7l@is.gd', '$2a$04$yw3FfioVdOocV3sGAlw/iuYZVUXlSZWJBLX4ZV3VFmi', 'Armstrong and Sons', 'Healthcare', '60123431481', '222 Jalan Imbi'),
(275, 'fhoward7m@scientificameri', '$2a$04$VYklo0Qi2UV898xYs./1s.XHCeVLQMPzpWdYWfotFNO', 'Mohr Inc', 'Retail', '60123431482', '789 Jalan Bukit Bintang'),
(276, 'cduggan7n@state.gov', '$2a$04$0.YApTFOK/Sbrn8urHFcse8U/Z1XCpAcmofObwJ0AyZ', 'Halvorson-Armstrong', 'Technology', '60123431483', '222 Jalan Imbi'),
(277, 'mboules7o@dion.ne.jp', '$2a$04$pwIaAYn2VrH/WhvJsVs1hOwa9XFB8/gMYtG.TcVqQqo', 'Towne, Hermiston and Willms', 'Manufacturing', '60123431484', '222 Jalan Imbi'),
(278, 'nhalbert7p@sohu.com', '$2a$04$7yJJ.aJfZYmCcpxQO0lb4.62JsoLaYgJCfgP3uE5PB6', 'Oberbrunner, Muller and Fritsc', 'Retail', '60123431485', '789 Jalan Bukit Bintang'),
(279, 'jdenford7q@google.ca', '$2a$04$71FspTVwwIoMaOOjGDD4Puvf8u20k7YKNxxlsKxir.y', 'Schulist Inc', 'Retail', '60123431486', '101 Jalan Raja Chulan'),
(280, 'ltumilson7r@marketwatch.c', '$2a$04$WNSGeHq7N8parMo5P0Z5LOktIh85L6ELTK21qaxTVq2', 'Reichel-Funk', 'Technology', '60123431487', '222 Jalan Imbi'),
(281, 'jpedrocchi7s@go.com', '$2a$04$gxcXyX/V1DYyjZEl1Gal5ulX8.08vauF5hHMviD0BuB', 'Stehr Group', 'Retail', '60123431488', '456 Jalan Tun Razak'),
(282, 'bdolle7t@soundcloud.com', '$2a$04$rvzQcT5JQVpnnrSPTs/dYOpxXuApgH.3iTN/3JCqBdo', 'Fisher and Sons', 'Technology', '60123431489', '456 Jalan Tun Razak'),
(283, 'rbeig7u@huffingtonpost.co', '$2a$04$9h308XBh5R7gyOFaok1TjOQKOBHxHuLock5cahcp9xV', 'Casper, Nikolaus and Gibson', 'Finance', '60123431490', '123 Jalan Ampang'),
(284, 'ntander7v@twitpic.com', '$2a$04$nm64wQN6FG9.veeOcv/mtOJHe63XgVbCf1Tz0wieixf', 'Baumbach LLC', 'Finance', '60123431491', '789 Jalan Bukit Bintang'),
(285, 'mlackemann7w@so-net.ne.jp', '$2a$04$bB3WsU/OJ/PXUcPW9MUIiOoPvFOM4AzSfPgUSbsrOvR', 'Ferry, Johns and Adams', 'Healthcare', '60123431492', '222 Jalan Imbi'),
(286, 'dtomik7x@home.pl', '$2a$04$fIjBcycjJnXHl36orsVwXeaswWso/z0oEw7Oml1yvIR', 'Cummings-Schaefer', 'Retail', '60123431493', '222 Jalan Imbi'),
(287, 'hbrolechan7y@answers.com', '$2a$04$T2VdVgAybtBBOZKs6wiiYOsVRHg.fR7F5QY66rQjmax', 'Hane-Satterfield', 'Retail', '60123431494', '222 Jalan Imbi'),
(288, 'bkollaschek7z@java.com', '$2a$04$QoumCipG5ahEUtGsI.vx.erqF/ORZ8PUKUmI3H.S6xp', 'Mueller Inc', 'Healthcare', '60123431495', '101 Jalan Raja Chulan'),
(289, 'tmalicki80@yandex.ru', '$2a$04$A6YmVAJl.h1HG8pqmOYvqeEbg4P1yjW8qMpGDcIlnMc', 'Runolfsson, Murazik and Satter', 'Healthcare', '60123431496', '123 Jalan Ampang'),
(290, 'adomelow81@dmoz.org', '$2a$04$fCdQQZNZihZWJDpYvXDx9uWBiktc6.G/avuXQSq3kop', 'McLaughlin, Connelly and Wolff', 'Retail', '60123431497', '101 Jalan Raja Chulan'),
(291, 'gwhal82@qq.com', '$2a$04$0DXHrj9W4./xrSZPZ8EYk.tzQcyiRYkxaJxEgH.wDsE', 'Stehr LLC', 'Finance', '60123431498', '101 Jalan Raja Chulan'),
(292, 'sgreggor83@creativecommon', '$2a$04$zpbsaoSg/lvz4tPy5LAxmu57ogFmnWlNfXCu6r4SSIl', 'Veum-Borer', 'Manufacturing', '60123431499', '101 Jalan Raja Chulan'),
(293, 'kprisk84@xinhuanet.com', '$2a$04$ggs2Ar7VH6hIG9bkXUsPDuQijqRIxzIStYmsBJVg5fO', 'Stehr, Mills and Schimmel', 'Retail', '60123431500', '456 Jalan Tun Razak'),
(294, 'jposten85@census.gov', '$2a$04$Q19RuE5lcxLXp6cJV0GikOxov.nKAJYuKkaip8mhB.1', 'Klein-Maggio', 'Manufacturing', '60123431501', '222 Jalan Imbi'),
(295, 'scopper86@1und1.de', '$2a$04$lX7/yCaOv3lHWalTmB9gUOfZXoGHheKpjHUyTMpUHnZ', 'Mayer, Lindgren and Kozey', 'Retail', '60123431502', '101 Jalan Raja Chulan'),
(296, 'gscown87@youtu.be', '$2a$04$DdBpvHS.FHNf8XbTr5Xv2uuyDBWh0/AFDT/eq/KobnV', 'Turcotte and Sons', 'Technology', '60123431503', '123 Jalan Ampang'),
(297, 'sgrelik88@paypal.com', '$2a$04$K7z93NPjbXEGFm6BShwqhO/.PlRXJQsg2WRB4.VXpGK', 'Grimes-Bartell', 'Retail', '60123431504', '101 Jalan Raja Chulan'),
(298, 'smarkwelley89@umich.edu', '$2a$04$qc1s9xa7eE0pyx9/Ns/3AeCbHcEPsMOPfS5.l0vE8pW', 'Durgan, Crona and Leffler', 'Retail', '60123431505', '456 Jalan Tun Razak'),
(299, 'mhounsham8a@craigslist.or', '$2a$04$W59zjR9PaPCWM2Yu7c62eeAbaUrayBEkySbMfc1H/.p', 'Kautzer-Heller', 'Technology', '60123431506', '123 Jalan Ampang'),
(300, 'siacofo8b@wunderground.co', '$2a$04$MA4J/QPL52Wsbc7KOhzgreuJk.s267p2bdtcYOEMYaz', 'Rice, Koch and Farrell', 'Manufacturing', '60123431507', '222 Jalan Imbi'),
(301, 'glockless8c@hexun.com', '$2a$04$V1m6bs7EtTEICw5UPEaRruJWdvE.WUXggqUFYBRLxk9', 'Ankunding, Quitzon and Schroed', 'Finance', '60123431508', '101 Jalan Raja Chulan'),
(302, 'gbrookton8d@twitpic.com', '$2a$04$kCq5EE4wn9zj0Z2I09EwP.JPlT/91YwpOMpiSp7kEgW', 'Klocko, Franecki and Jacobson', 'Retail', '60123431509', '101 Jalan Raja Chulan'),
(303, 'triglar8e@utexas.edu', '$2a$04$Xmnh/CJFfwDSjcCdqNVHfuF2YaPC3TtJtR646nYddMh', 'Dibbert, Douglas and Lesch', 'Healthcare', '60123431510', '222 Jalan Imbi'),
(304, 'bheak8f@ca.gov', '$2a$04$l08Ea1z6yAovYH0Ft4kZh.7DOuTgstMwjLHwiQBFbC3', 'West Inc', 'Finance', '60123431511', '456 Jalan Tun Razak'),
(305, 'mgianninotti8g@csmonitor.', '$2a$04$lFP4C.n7e8mDohUAhzcqIuLVgpmSmUEQtM5yXta3Cw1', 'Wisozk-Moen', 'Healthcare', '60123431512', '123 Jalan Ampang'),
(306, 'cmain8h@addtoany.com', '$2a$04$Mo1XRaC6H8Wsw7nIGdxjRevWc.5uBor5CLkGUTcy8DX', 'Donnelly-Boyer', 'Healthcare', '60123431513', '123 Jalan Ampang'),
(307, 'mtuxell8i@amazon.de', '$2a$04$NmL0xernzrtQY6v6pInd3eRlceVW3H0Vo1HWNVPL60l', 'Bechtelar Group', 'Healthcare', '60123431514', '101 Jalan Raja Chulan'),
(308, 'nhoward8j@mtv.com', '$2a$04$ZyRoxEVmIWa9HO7MvyTHyuCwR1wiCTLQRBNW78nJDYB', 'Pouros, Bednar and Becker', 'Manufacturing', '60123431515', '789 Jalan Bukit Bintang'),
(309, 'bdevonside8k@huffingtonpo', '$2a$04$jkgsZKs.R.A07MojpdZcg.oE4/MVsr28Rdhq.bms2nf', 'Gibson-Pfannerstill', 'Retail', '60123431516', '222 Jalan Imbi'),
(310, 'mdanford8l@wiley.com', '$2a$04$zbP12ohBKPMO9lrHurFSA.zi/fs1y1avqdRIIFU2VDU', 'Hettinger, Schinner and Medhur', 'Healthcare', '60123431517', '101 Jalan Raja Chulan'),
(311, 'jpaice8m@tumblr.com', '$2a$04$lRHeVK8uWA3kJBIZ.WJ0EOOgtZ6OcncTGbbt1EqWu1E', 'Hoppe-Crooks', 'Technology', '60123431518', '123 Jalan Ampang'),
(312, 'tcassely8n@tuttocitta.it', '$2a$04$XGzG66Q8pjQYvj0vOOQf1euZ2YlDXsIW6FU2qslcoCw', 'Langworth LLC', 'Technology', '60123431519', '123 Jalan Ampang'),
(313, 'cwickersley8o@csmonitor.c', '$2a$04$e.QeNFM5qvTJHt7xdCza2.5z1lH7U8ME0Ec1CJWtlyX', 'Purdy, Senger and Schneider', 'Technology', '60123431520', '456 Jalan Tun Razak'),
(314, 'gminchell8p@tumblr.com', '$2a$04$ibL6vY17Pdnw.AopBslgHudercbukWeImbKkjZeAngh', 'King and Sons', 'Finance', '60123431521', '101 Jalan Raja Chulan'),
(315, 'cfurber8q@irs.gov', '$2a$04$Rj6dktvKYL1Kzi03iuvlLeRJGEEmAxoqrZLbd5/IWKF', 'Metz, Kuvalis and Gislason', 'Finance', '60123431522', '222 Jalan Imbi'),
(316, 'tmerrin8r@google.ru', '$2a$04$5dADWZcDVVGQOBYkl8A4t.jmUuhIw6UHu4gWDz0nNxf', 'Jenkins Group', 'Manufacturing', '60123431523', '456 Jalan Tun Razak'),
(317, 'acadwaladr8s@ted.com', '$2a$04$Ub0IWdZc5a38DB62WyjYVO87ldhe1gzvISgBke9ZhZI', 'Howe and Sons', 'Finance', '60123431524', '123 Jalan Ampang'),
(318, 'dwoodage8t@ifeng.com', '$2a$04$mCl28wSwzpZco721ABbbQOTLaR//ffUdXpPgvzzI6ut', 'Berge, Heaney and Mosciski', 'Finance', '60123431525', '101 Jalan Raja Chulan');
INSERT INTO `partner` (`PartnerID`, `Email`, `Password`, `Company_Name`, `Type`, `Contact`, `Address`) VALUES
(319, 'sbeddows8u@irs.gov', '$2a$04$K2L5QDVX00rcqWRaZsDa5e7dpYeuueUlYCBYDqPPUxY', 'Cremin-King', 'Manufacturing', '60123431526', '123 Jalan Ampang'),
(320, 'csailer8v@europa.eu', '$2a$04$yw0LS3Q94u88JRYohiHmbOigi2a9t.SzaQ0IJ86mlqm', 'Weimann-Tromp', 'Technology', '60123431527', '222 Jalan Imbi'),
(321, 'meckh8w@rediff.com', '$2a$04$pTbDNIdz1DLgVsg37u/8lOsBPH9uYQIFoi2stVOt2tU', 'Gleichner-Shanahan', 'Healthcare', '60123431528', '222 Jalan Imbi'),
(322, 'dinglefield8x@vimeo.com', '$2a$04$bC/XT6wL7NlkeytkIvgKD.W.wN1oA5OUM0tbliHbr2c', 'Johns, Olson and Hettinger', 'Technology', '60123431529', '222 Jalan Imbi'),
(323, 'fhunton8y@dyndns.org', '$2a$04$Gh2grdP7CRqnOZwVaEu3rOZ4EqKREoV8jvI2VW6MdfF', 'Johns LLC', 'Finance', '60123431530', '123 Jalan Ampang'),
(324, 'cmcfall8z@prweb.com', '$2a$04$11vfKv/yMeJHVfYTsqDRtugCW.TfV0zAqQlvRdQkxrd', 'Beer Group', 'Retail', '60123431531', '101 Jalan Raja Chulan'),
(325, 'cproschek90@merriam-webst', '$2a$04$J/rUqJPuBvQknoMGGyhByu.4uKKHLMSbgZOn.uXNthQ', 'Stokes-Little', 'Technology', '60123431532', '456 Jalan Tun Razak'),
(326, 'jturbitt91@posterous.com', '$2a$04$aqZ1HDm5xYAAQJktavXS.eaAtnSXE7OjMtGkXT4V3mD', 'Johnson, Reilly and Littel', 'Retail', '60123431533', '789 Jalan Bukit Bintang'),
(327, 'rpettko92@sourceforge.net', '$2a$04$oa9lsAg5.KeKtddjNXq2ieCEPDrPTEt/22VuslChRoU', 'Bradtke, Zemlak and Cartwright', 'Healthcare', '60123431534', '101 Jalan Raja Chulan'),
(328, 'elindsell93@sourceforge.n', '$2a$04$zkwa23Z1LszJc8pWNXGh9uKYUkCF0dpzPNEq0cE9VD1', 'Harvey LLC', 'Retail', '60123431535', '456 Jalan Tun Razak'),
(329, 'gsweetzer94@eventbrite.co', '$2a$04$sOvB1LanZwwlPJSxzIWJAOX5UudCm9NoOveNLIxQNOx', 'Smith-Kutch', 'Technology', '60123431536', '101 Jalan Raja Chulan'),
(330, 'gbingall95@scientificamer', '$2a$04$ilLFw2pNOsj9fUDBXiqsrug8TIL0zAIxOqE.aAp9Oga', 'Crooks Group', 'Finance', '60123431537', '456 Jalan Tun Razak'),
(331, 'egrey96@unicef.org', '$2a$04$bSUUppIVYJ6FK5A8duHZ9eV5ULVVA2aGRurjoo26Ipb', 'Schaefer-Torp', 'Retail', '60123431538', '222 Jalan Imbi'),
(332, 'cmcdowell97@last.fm', '$2a$04$MIxF8ZPjfn3SLFJB/OvNrOq3P2bw8TS0J2MHevVn63/', 'Goldner-Grady', 'Finance', '60123431539', '123 Jalan Ampang'),
(333, 'kmcadam98@oracle.com', '$2a$04$Ez4aDJji5VD9Vv7T0Aw.LevZZn.fSN4jVUtnKUD8lY7', 'Leffler, Beahan and Deckow', 'Technology', '60123431540', '123 Jalan Ampang'),
(334, 'rdepinna99@shop-pro.jp', '$2a$04$6/7yjoPFNI9Fghx5qrtoiOVh6RbyY3qBGthxv.gj835', 'Ratke-Grady', 'Manufacturing', '60123431541', '789 Jalan Bukit Bintang'),
(335, 'bworland9a@parallels.com', '$2a$04$0PYzh64GcvTAUDx9gd3KrunZBSwpGdVWM.SK0s80WYB', 'Altenwerth and Sons', 'Manufacturing', '60123431542', '789 Jalan Bukit Bintang'),
(336, 'ljewsbury9b@sina.com.cn', '$2a$04$9EktQPPGpraPEZKnl/oWXuJ88pURBprqhvBMdqf75Lf', 'Adams, Wolf and Rempel', 'Healthcare', '60123431543', '789 Jalan Bukit Bintang'),
(337, 'jhuck9c@moonfruit.com', '$2a$04$Qi.ybXfF.k9v1/Ujvc1NpOUMpRognB1ssUw2Gjl5150', 'Spinka and Sons', 'Finance', '60123431544', '222 Jalan Imbi'),
(338, 'hallon9d@wp.com', '$2a$04$5WL9AcBfbtDviVnAH8tOEutIIVWLKaxEny06eh2PZqR', 'Fisher-Keeling', 'Healthcare', '60123431545', '456 Jalan Tun Razak'),
(339, 'mrearie9e@technorati.com', '$2a$04$neoIFALF77gP0mt56PtQwuV5hfxnlKksw/nvQH3kbcg', 'Connelly, Schamberger and Absh', 'Healthcare', '60123431546', '456 Jalan Tun Razak'),
(340, 'cmacvean9f@wix.com', '$2a$04$K9eCGGgTfp.SnUucsubwg.GfNEXzq0.rJPlEEslAjNV', 'Upton-Fritsch', 'Technology', '60123431547', '456 Jalan Tun Razak'),
(341, 'rcuerda9g@auda.org.au', '$2a$04$wJXJPaWkv4Tzr12xcNCJF.LM3cTOR/XR56s3qWOdcbG', 'Hartmann-Durgan', 'Manufacturing', '60123431548', '123 Jalan Ampang'),
(342, 'largente9h@friendfeed.com', '$2a$04$zZFcYjZtd7/LbYvBztkN6ORNrDjFi9CdISZHEtOeJac', 'Nitzsche-Runolfsdottir', 'Technology', '60123431549', '456 Jalan Tun Razak'),
(343, 'kmoysey9i@xinhuanet.com', '$2a$04$CdPlMOtYKtZVueUV2zkG3Ob9KivTPtTZzDxU1igLkLm', 'Rath-Hodkiewicz', 'Technology', '60123431550', '222 Jalan Imbi'),
(344, 'decles9j@alibaba.com', '$2a$04$WIoK0LcmZrAbImj0eHfWeeqaDyTTxfbHA.XaPIQq0SP', 'Wiegand-Herman', 'Manufacturing', '60123431551', '789 Jalan Bukit Bintang'),
(345, 'weilhersen9k@theatlantic.', '$2a$04$vaLd/QlDD.v0nwDOl8e1t.34BoJdqqWGjDOYS8vCdAD', 'Okuneva, Russel and Luettgen', 'Healthcare', '60123431552', '123 Jalan Ampang'),
(346, 'bgregh9l@com.com', '$2a$04$3n6CbD4keSCv67Em.IRzVO5VrjZOwMhfONUeV1rDlpq', 'Armstrong, Sanford and D\'Amore', 'Technology', '60123431553', '456 Jalan Tun Razak'),
(347, 'bciccottio9m@altervista.o', '$2a$04$qL35XnTu4BQwZVPMDPkVBuk606fvosyeF.L0cOilTqm', 'Cormier, Murazik and Bins', 'Finance', '60123431554', '101 Jalan Raja Chulan'),
(348, 'lmackill9n@homestead.com', '$2a$04$7.2BNfr9fsboXaDbuTKI2.ueTaZ5a8pLwOkm1.1/qr6', 'Quitzon-Hane', 'Manufacturing', '60123431555', '789 Jalan Bukit Bintang'),
(349, 'pkrolman9o@prlog.org', '$2a$04$dT1Qg5868J2uxaH5Y/ONQO8t7yFelRJMclW3YKjidDt', 'Torphy, Padberg and Green', 'Retail', '60123431556', '456 Jalan Tun Razak'),
(350, 'nlangsbury9p@shutterfly.c', '$2a$04$SXwyyBsGGkmC2l5Ixo0adeLQK2IMwb2pkyDbFaFZfcn', 'Hyatt Inc', 'Healthcare', '60123431557', '101 Jalan Raja Chulan'),
(351, 'ujervis9q@furl.net', '$2a$04$uZ/5hRzMYci4.0P6/vmpceXK/ZURihVffZCgR8DPmzF', 'Leannon, Wilkinson and Towne', 'Finance', '60123431558', '222 Jalan Imbi'),
(352, 'mtammadge9r@wsj.com', '$2a$04$4LfKu9W20ZuY2eMu5RVDO.T5UwwT3LKT/6mgmUz4D56', 'Hagenes, Barton and Blanda', 'Healthcare', '60123431559', '101 Jalan Raja Chulan'),
(353, 'acandwell9s@apple.com', '$2a$04$n/2gfxDzXxvF1IyFIeAXteKk7jxr2uO2idCKxBkAaiE', 'Will Inc', 'Manufacturing', '60123431560', '123 Jalan Ampang'),
(354, 'bcalderbank9t@sphinn.com', '$2a$04$kC4ANd83ieSYFYesoUCKFOQ3sgPqD08Jkl4NW16cUz7', 'Hudson LLC', 'Finance', '60123431561', '222 Jalan Imbi'),
(355, 'iweond9u@census.gov', '$2a$04$t9r42BmvnBmkcR1topZV0egLU.eEqfjnXKfU1gjwB2C', 'Nicolas, Herman and Kemmer', 'Retail', '60123431562', '789 Jalan Bukit Bintang'),
(356, 'zedmett9v@bbc.co.uk', '$2a$04$p9lEnBOLoy7nJU8fIYOzvOLvpzCgvYz2zs99PBz/KWq', 'Klein, Rutherford and Reynolds', 'Retail', '60123431563', '123 Jalan Ampang'),
(357, 'wlehrer9w@t.co', '$2a$04$xME64evti2LmqJSGasvLk.adn367VoLbAJTfgpTuC3L', 'Hammes-Parisian', 'Healthcare', '60123431564', '789 Jalan Bukit Bintang'),
(358, 'bchazier9x@sitemeter.com', '$2a$04$t6tBoKBxoyWhzz64WBV1eeiUFOZ/UWMk4xi6ii00tog', 'Smitham-Hermiston', 'Finance', '60123431565', '456 Jalan Tun Razak'),
(359, 'wcolquete9y@digg.com', '$2a$04$E/GoM4EAkVTQDaDhL.aS5OLidMZzNmbfSv2R/CiarkD', 'Stokes-Kautzer', 'Manufacturing', '60123431566', '456 Jalan Tun Razak'),
(360, 'ktomini9z@timesonline.co.', '$2a$04$/8BvOmgbaWfNulIFZwkI.u3wRusrNRaLyWcPeYDJ.Uy', 'Lebsack, Rempel and Osinski', 'Finance', '60123431567', '123 Jalan Ampang'),
(361, 'dkorejsa0@xing.com', '$2a$04$9iGcyOVcmxbuteOYdccom.NXoCGTUV/tMS19HIGpZX9', 'Schimmel, O\'Kon and Luettgen', 'Technology', '60123431568', '222 Jalan Imbi'),
(362, 'mleninga1@ca.gov', '$2a$04$VPWmUgnzQ0x9dF8QTOE3o.W9N.qfqpvqxteBS0Y7Sp5', 'Marquardt LLC', 'Manufacturing', '60123431569', '789 Jalan Bukit Bintang'),
(363, 'cshakespeara2@surveymonke', '$2a$04$hG.UYokt0q.Xp5tUOtbHW.0OYMr2e4WDT61xkE3mSmM', 'Gusikowski LLC', 'Healthcare', '60123431570', '222 Jalan Imbi'),
(364, 'temberya3@google.com.hk', '$2a$04$JVwLeF8AyRnwF9xmqRY6Ke.6oNTuWCo30NcN3MikdJH', 'Price, Schamberger and Swift', 'Manufacturing', '60123431571', '101 Jalan Raja Chulan'),
(365, 'ametschkea4@oakley.com', '$2a$04$ttOgVqP0.jHGTK7btziGWesgj/RiPLSVB8vR3..llkG', 'Muller, Fahey and Wiza', 'Healthcare', '60123431572', '123 Jalan Ampang'),
(366, 'ihalfacrea5@amazon.co.jp', '$2a$04$EZXuzCCIU/o6FmQ3VM1YUOsT8Vb9xdIhPtMHlgPqqFL', 'Cronin and Sons', 'Healthcare', '60123431573', '456 Jalan Tun Razak'),
(367, 'cbolera6@geocities.com', '$2a$04$Sd/e.6J52WOe06DEPBCWkunekIaru7x98BzamaGhPhb', 'Conn and Sons', 'Healthcare', '60123431574', '101 Jalan Raja Chulan'),
(368, 'scasassaa7@adobe.com', '$2a$04$m7vcrNWo5Z1fzLQYVZEeT.Qve/VZBJuxOWwJ5/voZ4G', 'Schulist LLC', 'Retail', '60123431575', '123 Jalan Ampang'),
(369, 'dbruslea8@addthis.com', '$2a$04$oDrasepOcb3thPlkTBzQVuyo9Q58i5dyLH5mNQAduae', 'Wilderman, Conroy and Rippin', 'Retail', '60123431576', '789 Jalan Bukit Bintang'),
(370, 'kpigneya9@dailymotion.com', '$2a$04$EyuaIDRCSt6TgQYAvibdieptU5UdVgzhI2Or1mCEXnp', 'Bailey-Schuster', 'Finance', '60123431577', '789 Jalan Bukit Bintang'),
(371, 'tbowlandsaa@time.com', '$2a$04$6ZybqOIQ4U6dKyvZgFW8y.pn.Y5fb91a4II0fKM6v50', 'Cruickshank-Wisozk', 'Technology', '60123431578', '456 Jalan Tun Razak'),
(372, 'jroffeab@naver.com', '$2a$04$leuEeUiQjwiz1nK/U6x2m.0fFcTBMaTG6Z6302uAHMa', 'Orn and Sons', 'Manufacturing', '60123431579', '222 Jalan Imbi'),
(373, 'rmudieac@boston.com', '$2a$04$Eot6Pz/GzSiFK75wGXhwF.ZNHa4/1kujv67KajkiKhS', 'Mraz Inc', 'Retail', '60123431580', '123 Jalan Ampang'),
(374, 'bbartosiakad@blogs.com', '$2a$04$tv2YB8TYfOUmyAj464Zy2e2WWnUOjSN6wcLjd/7GaU/', 'Kutch, Rath and Terry', 'Healthcare', '60123431581', '222 Jalan Imbi'),
(375, 'wostrichae@google.fr', '$2a$04$NwLcrbYVIEAoqNGik5aTO.w6xpIf9sunLz9M/5c31OB', 'Emard LLC', 'Manufacturing', '60123431582', '101 Jalan Raja Chulan'),
(376, 'ccollicottaf@mapy.cz', '$2a$04$YPg5DhuO246yLujDmgnxAezq38ZMWU6v3cnCzM2PBOh', 'Glover-Schuppe', 'Retail', '60123431583', '456 Jalan Tun Razak'),
(377, 'bbulgerag@virginia.edu', '$2a$04$R1JCUwNtMF8cPB5Wpuot1OMdr5r3Wq8LPkkceB6hLkx', 'Wisoky-Dibbert', 'Technology', '60123431584', '123 Jalan Ampang'),
(378, 'adigginsonah@seesaa.net', '$2a$04$1T772KV098K4n93EtRszAOvssDQXrXtpOLNEBugZwSU', 'Herzog LLC', 'Manufacturing', '60123431585', '456 Jalan Tun Razak'),
(379, 'somanai@yahoo.com', '$2a$04$6LK6j1E36XGqmZ0XVNs5D.dcb5njm6jN.oYjwZRH.7H', 'Huels-Rippin', 'Healthcare', '60123431586', '456 Jalan Tun Razak'),
(380, 'risseleeaj@baidu.com', '$2a$04$/AxrWtxMB//7mXuBCsXvvug3Z/04A2OQ7DJwiOmre3T', 'Mohr, Cummerata and Reilly', 'Finance', '60123431587', '101 Jalan Raja Chulan'),
(381, 'mcrinageak@newsvine.com', '$2a$04$evvn8WtBDhLtXNPXSczNeu/aX8lPsbELR41GfhLyDe9', 'Botsford Group', 'Healthcare', '60123431588', '789 Jalan Bukit Bintang'),
(382, 'oklambtal@nyu.edu', '$2a$04$fLG2G2z9lXWosfDrWTUmwOUqBESrSz7tH2HLtZML/TW', 'Langosh, Nikolaus and Glover', 'Healthcare', '60123431589', '456 Jalan Tun Razak'),
(383, 'bhaggerstonam@domainmarke', '$2a$04$PR28E73lljLofqDvpBnqr.G9fkv8kz6XWo5k1V6PZQr', 'Cassin Inc', 'Finance', '60123431590', '456 Jalan Tun Razak'),
(384, 'truncimanan@ox.ac.uk', '$2a$04$cPB2atY2Hw76h9EHrMvua.hpKvNrM54g/Q8tAHJaG79', 'Bergnaum, Carroll and Moen', 'Technology', '60123431591', '456 Jalan Tun Razak'),
(385, 'gbrownjohnao@ed.gov', '$2a$04$dBnHpruyG6qyJQLW/R9y0.Cp2HL8Szu9GlBAFmRgw64', 'Haag-Murphy', 'Technology', '60123431592', '789 Jalan Bukit Bintang'),
(386, 'ndanielskiap@domainmarket', '$2a$04$jZsd5a7WymjpOS2woyjQjOql2ePbSaVTaZvHoapvC1c', 'O\'Reilly, Skiles and Considine', 'Retail', '60123431593', '789 Jalan Bukit Bintang'),
(387, 'tantoniakaq@google.es', '$2a$04$wkLrM/NJ/xy/lxnOlG3xwu19RUFLCWm73Dy7m2xjZr0', 'Bernhard Group', 'Manufacturing', '60123431594', '789 Jalan Bukit Bintang'),
(388, 'hmcwhannelar@wired.com', '$2a$04$7a0ZY5J1OOIZ/gaJwc70kOXOKBktx0a8taAgWOXQdJg', 'Hilll and Sons', 'Manufacturing', '60123431595', '222 Jalan Imbi'),
(389, 'abereclothas@php.net', '$2a$04$FhKw5fR00qMghD2vh8QyjeldLKOgilylzuIQ/Y5Ok1I', 'Bartell-Ruecker', 'Healthcare', '60123431596', '456 Jalan Tun Razak'),
(390, 'egoburnat@ning.com', '$2a$04$yvPUpxgiARD9piOjWzlQQOZhIZGWW9Y3OXrbRHn.2Ky', 'Greenholt-Upton', 'Healthcare', '60123431597', '101 Jalan Raja Chulan'),
(391, 'magerau@weibo.com', '$2a$04$b8Ud1Xx0VX61/fjT/lsF1.ojHdx.h1k9usokJ0L36Gu', 'Kozey-Herzog', 'Finance', '60123431598', '456 Jalan Tun Razak'),
(392, 'bscotchmoorav@salon.com', '$2a$04$E2uc4DjdD0TUnth0UHoKROh5uylfx1bqcr2BuMEyMPX', 'Murray-Cremin', 'Healthcare', '60123431599', '222 Jalan Imbi'),
(393, 'alaslettaw@nymag.com', '$2a$04$/NePbbsSXJ5svvoC16rmIebhgqZB8NaHUeVQp5/hXTy', 'Langosh Group', 'Technology', '60123431600', '101 Jalan Raja Chulan'),
(394, 'mchessax@oaic.gov.au', '$2a$04$pD4NZvIaIX1WwAhnpLBE6eWl4yFxT/FGECciU9buExi', 'Mills-Tromp', 'Retail', '60123431601', '222 Jalan Imbi'),
(395, 'ehansillay@sun.com', '$2a$04$LdQ1wu/AKF9Oh00STsB49usMeZHTvkkaZgseAQMosJO', 'Gutmann and Sons', 'Manufacturing', '60123431602', '789 Jalan Bukit Bintang'),
(396, 'cmallanaz@gnu.org', '$2a$04$vtEe9muc6ydPh04Xm3QxieGvFOI5MUaEyUAa37MOpme', 'Spencer, Dicki and Baumbach', 'Healthcare', '60123431603', '123 Jalan Ampang'),
(397, 'rgairb0@altervista.org', '$2a$04$P/gr7tY2lhLMX1UsKU3gZOcBi46Vi56YSwj/u/hwmmn', 'Langosh-Paucek', 'Retail', '60123431604', '123 Jalan Ampang'),
(398, 'rhaquinb1@pcworld.com', '$2a$04$oJnMolhiUHwULorWlKhI/ObXyIo1wB1IOM2gjrKCbnP', 'Adams, Medhurst and Green', 'Manufacturing', '60123431605', '789 Jalan Bukit Bintang'),
(399, 'mfairlambb2@fastcompany.c', '$2a$04$u1NcJne33dvx7C4KkYpyFuQ3.X0HDtodoWJD2q2uW0B', 'Okuneva-Rolfson', 'Technology', '60123431606', '123 Jalan Ampang'),
(400, 'jzimmermanb3@archive.org', '$2a$04$/60Ckzlsp54NpMHVx2s.4ebjQkNmfoAeUerJsjo4q7V', 'Sporer-Brown', 'Healthcare', '60123431607', '789 Jalan Bukit Bintang'),
(401, 'vbauchopb4@cbc.ca', '$2a$04$mwtIdp1CXPpR24NgOwQaVemkOLwdkreEjStrTjoXsYP', 'Hodkiewicz, Kuvalis and Pfanne', 'Healthcare', '60123431608', '789 Jalan Bukit Bintang'),
(402, 'lvonsalzbergb5@weibo.com', '$2a$04$XBLGZRnbHzIh/2o2QdH1ju.ThtVGUVBxqwnudECT1xA', 'Bogisich, Metz and Jenkins', 'Finance', '60123431609', '222 Jalan Imbi'),
(403, 'rmainstonb6@unc.edu', '$2a$04$t4N8nYHjt2RqaVVBXY4n/OAs7zroP0JYUkBv7vonrs.', 'Mayert-Wehner', 'Finance', '60123431610', '123 Jalan Ampang'),
(404, 'ashadfourthb7@mozilla.com', '$2a$04$nNEaN6xmq5tlS7vCMbfU4ObnvMaMgMhfIHvT3k/IL1n', 'Hirthe, Baumbach and Murazik', 'Manufacturing', '60123431611', '123 Jalan Ampang'),
(405, 'rsimmellb8@shop-pro.jp', '$2a$04$41oHmBM7gNcRo8HDOq5JUu9VAZcIDalXolXg3wyqZ3l', 'Tillman Inc', 'Retail', '60123431612', '789 Jalan Bukit Bintang'),
(406, 'hdeinertb9@wiley.com', '$2a$04$KYB5qALcVU/TJ9lzs77tX.FA9lV9jVQuHz.jIeDAnCN', 'Gulgowski Group', 'Finance', '60123431613', '101 Jalan Raja Chulan'),
(407, 'pwydba@comcast.net', '$2a$04$u4Km/LTBZMgrrI/h.LWirO0JhXL2tRYxWkDk2GdP76L', 'Reichert, Hackett and Robel', 'Retail', '60123431614', '101 Jalan Raja Chulan'),
(408, 'hsudronbb@virginia.edu', '$2a$04$ZYNaEFRMlx1pN42RHDHB5elx1XxdK8ktj3bGVsNywpp', 'Bruen-Pfeffer', 'Technology', '60123431615', '123 Jalan Ampang'),
(409, 'lguilloneaubc@hexun.com', '$2a$04$U4LPl0d/eCWLkMYjbLi7mesJSZpCBtHUgZ84s8yMK2a', 'Walsh-Hermann', 'Finance', '60123431616', '123 Jalan Ampang'),
(410, 'avondrysbd@cbslocal.com', '$2a$04$/iGIugfFOr5alDsUn9ZMhOxnOzgLk8dvCQ3/mRJLUwJ', 'Anderson-Kuhic', 'Manufacturing', '60123431617', '222 Jalan Imbi'),
(411, 'nbanhambe@google.ru', '$2a$04$ENdsKvHq1KijylMdcSgfLOTeea.ZzAnXSbx7q74zbWj', 'Kub Inc', 'Manufacturing', '60123431618', '222 Jalan Imbi'),
(412, 'wmarchmentbf@nba.com', '$2a$04$p430gb0QMOEgdLDAwN6ryuNO2cMeunh.G9Ice4NSLLc', 'Hodkiewicz-Littel', 'Manufacturing', '60123431619', '789 Jalan Bukit Bintang'),
(413, 'bgillogleybg@zimbio.com', '$2a$04$zj4tpVxatBe6X/TJFzP8FenLZloCjcr5LUIqsKXPgp4', 'Fadel-Hirthe', 'Healthcare', '60123431620', '456 Jalan Tun Razak'),
(414, 'tledamunbh@ow.ly', '$2a$04$A6zVSyFE4NH59tQzs2MCzuow/fA4HR.wm9eTC9Xlxof', 'Russel-Armstrong', 'Retail', '60123431621', '789 Jalan Bukit Bintang'),
(415, 'ccreusbi@hhs.gov', '$2a$04$LaIWyRVZHWVSBhB4qPglPOOT.XmxRAnmUwbTF4.ReHg', 'Boyer-Zboncak', 'Technology', '60123431622', '222 Jalan Imbi'),
(416, 'gcastledinebj@bloomberg.c', '$2a$04$GpJxmodpZwZypgoD3.3y9OQv0AlJ6HcVVj19QLPAAp/', 'Grimes Group', 'Retail', '60123431623', '789 Jalan Bukit Bintang'),
(417, 'jvannarbk@bbb.org', '$2a$04$6tVG8Gpykh82zFvBq3EVoO8e2XcvQMfv9gzjaAwfpu6', 'Fay, Koelpin and Weber', 'Technology', '60123431624', '789 Jalan Bukit Bintang'),
(418, 'amorbeybl@free.fr', '$2a$04$JwE73Cuu0/NGUxRnjS47pOl4GLpJp6qhSxZhJfSyDQ3', 'Powlowski-Hettinger', 'Healthcare', '60123431625', '101 Jalan Raja Chulan'),
(419, 'cdearlovebm@apple.com', '$2a$04$K3GS1HNSx8V4A52DzATTC.BkPXb1elScc6UYG/VqcNc', 'Runolfsdottir LLC', 'Manufacturing', '60123431626', '101 Jalan Raja Chulan'),
(420, 'ajoskovitchbn@amazon.com', '$2a$04$52gO/WMplcsJDJTCH8qGJOWHnVOTqnBY3hEsNoShPJO', 'Veum-O\'Hara', 'Retail', '60123431627', '123 Jalan Ampang'),
(421, 'clievesleybo@washington.e', '$2a$04$m9lckUr1kEhJZn6bjt3uMu0V2DpcTxehTVrxFzzxke1', 'Reinger Group', 'Finance', '60123431628', '123 Jalan Ampang'),
(422, 'sloftusbp@eepurl.com', '$2a$04$DkIa2SeOFJvt/h4x5s4ZC.A.a.KL0VoUMbFbdFFVam7', 'Lockman, Williamson and Jenkin', 'Finance', '60123431629', '123 Jalan Ampang'),
(423, 'stomblingbq@gnu.org', '$2a$04$ejDGQi2rx1F.Jibt3s/QfOnL3UYHx/TpTzvKDohxicc', 'Mann-Hahn', 'Healthcare', '60123431630', '101 Jalan Raja Chulan'),
(424, 'rtextonbr@sina.com.cn', '$2a$04$fj6.bK8ev/kSEbUJS2s.AeFkVNdSvF3jhnloX5L2zhX', 'Treutel, Hagenes and Hilpert', 'Finance', '60123431631', '123 Jalan Ampang'),
(425, 'negdalbs@usa.gov', '$2a$04$.L3nXD8SRxVCSk3.cUR48exWA6W0eBGul3oIR1i1gfI', 'Wilkinson, O\'Conner and Hand', 'Manufacturing', '60123431632', '101 Jalan Raja Chulan'),
(426, 'mlonginabt@ucoz.com', '$2a$04$fOIHOLgp8f/sK/OjLfqaiuzghiYUz7SxFC0R2lx4DKb', 'Doyle, Corkery and Emmerich', 'Technology', '60123431633', '456 Jalan Tun Razak'),
(427, 'dbrownscombebu@csmonitor.', '$2a$04$LScemrq9v5.acETqbAzz8uvAJjZf8ffRNrjHitRY0OC', 'Dach-Lowe', 'Healthcare', '60123431634', '222 Jalan Imbi'),
(428, 'jhagwoodbv@java.com', '$2a$04$JoXN6wjk.oJ67jc2w24l9OyOfHVdPzNBW2KSLEBiCbM', 'Bergnaum, Schuster and Botsfor', 'Technology', '60123431635', '123 Jalan Ampang'),
(429, 'prycebw@netlog.com', '$2a$04$9VhPQ2PcUP7ejG8ipYRLxu.FDyDf0NhFMG84XFaVj7c', 'Schoen-Russel', 'Manufacturing', '60123431636', '101 Jalan Raja Chulan'),
(430, 'acuniambx@hao123.com', '$2a$04$u0bU8siFf7DNwIkAfnWl5ebBVIjfVa2Xp8QXq/W9fF6', 'Hermiston and Sons', 'Retail', '60123431637', '101 Jalan Raja Chulan'),
(431, 'gphairby@ihg.com', '$2a$04$MkEhOX7BBlEfSYwtq8wr9O5pqemPp6rZwtRHhqlVDis', 'Schimmel, Wisozk and Schumm', 'Healthcare', '60123431638', '789 Jalan Bukit Bintang'),
(432, 'bmacybz@prnewswire.com', '$2a$04$3hM88NcajLqZgBxNQ3.wAuOqyI9DKa7QcEFNQmkXziI', 'Labadie, Kuhlman and Wehner', 'Finance', '60123431639', '789 Jalan Bukit Bintang'),
(433, 'lrawlesc0@comsenz.com', '$2a$04$/s6dHSWYU2iWvmfVFKG.POudavhdzgSRe8RWnODJuav', 'Breitenberg LLC', 'Retail', '60123431640', '101 Jalan Raja Chulan'),
(434, 'grembaudc1@purevolume.com', '$2a$04$eTRSmPbxa71H3uG81wfiyOA7VAREPYTCzVBja74Wy7j', 'Block Inc', 'Technology', '60123431641', '222 Jalan Imbi'),
(435, 'afairhamc2@t.co', '$2a$04$QcbBaEv9R1M207R6Egqz5uJKQNtX1LeGNrabSRR.NNo', 'Reichert Inc', 'Retail', '60123431642', '222 Jalan Imbi'),
(436, 'cclayworthc3@prweb.com', '$2a$04$4LU9QQYYavhlI/ocZVD/b.fGtRpsEaddZkFCAJ/CDjX', 'O\'Kon, Hills and Ryan', 'Manufacturing', '60123431643', '101 Jalan Raja Chulan'),
(437, 'ljillissc4@myspace.com', '$2a$04$wT8kiRbQdLaL0o2UlRYmyO5ftjYRmMEkdBqYnNgGDmz', 'Kihn-Tromp', 'Manufacturing', '60123431644', '222 Jalan Imbi'),
(438, 'abischoffc5@surveymonkey.', '$2a$04$UP7cPET1pdeGyaI6MB0Q4OGdEM0N4uDyLNjR3V2sgfq', 'Moore, Ortiz and Prohaska', 'Technology', '60123431645', '123 Jalan Ampang'),
(439, 'npinnerec6@thetimes.co.uk', '$2a$04$Lcg7mYLianm3sGOi0BLACOQNRDIl1pk2rU1H//1RiMe', 'Hilpert-Robel', 'Technology', '60123431646', '101 Jalan Raja Chulan'),
(440, 'tyeac7@barnesandnoble.com', '$2a$04$kAagJqtxhX5Rfz0jKzRJYevS7grHcRLvpKJIKBb6Tvn', 'Johnston-Lockman', 'Finance', '60123431647', '789 Jalan Bukit Bintang'),
(441, 'adudgeonc8@1und1.de', '$2a$04$lNcvWQcHw4kgEW9TRHMrv.6chub4m9cpFGQWBfGxBZN', 'Parisian Inc', 'Technology', '60123431648', '123 Jalan Ampang'),
(442, 'dstewartsonc9@typepad.com', '$2a$04$KlJJxSabmN4sMiqJBfaojeqS3wgxOnxbmFSOgkcFhHx', 'Kub-Blick', 'Healthcare', '60123431649', '789 Jalan Bukit Bintang'),
(443, 'kocurranca@indiatimes.com', '$2a$04$Dzf3ayNkX4HYkabWBKynceQNLeHH9zirOssU.31lamC', 'Barrows LLC', 'Technology', '60123431650', '456 Jalan Tun Razak'),
(444, 'hgoadbycb@amazon.co.uk', '$2a$04$UHKTJZagHcfQ2FjyHakDb.xtYhZp6B5pL11zHF/ybz1', 'Gottlieb and Sons', 'Retail', '60123431651', '101 Jalan Raja Chulan'),
(445, 'saugustincc@un.org', '$2a$04$QbkxSeX4vq.ctmu1VrAmDuRG77QNs39jO5kMs4eB1Ui', 'Metz Group', 'Finance', '60123431652', '123 Jalan Ampang'),
(446, 'esausmancd@qq.com', '$2a$04$50blTy8.8iQB0/KVmrKnGeJlS08nY9ZI8KVd80b2I2r', 'Harber-Botsford', 'Retail', '60123431653', '123 Jalan Ampang'),
(447, 'dfrohockce@wikimedia.org', '$2a$04$fHMOE1CJhCmEsaoi/TvnMODO/JdJYFNFhUa2ijLb.V5', 'Bergnaum, Hyatt and Kris', 'Finance', '60123431654', '789 Jalan Bukit Bintang'),
(448, 'bgemellicf@ustream.tv', '$2a$04$RGUZ49N.SF7NKmU3NO5xoe8OG12iUuoroKmChyY9TUF', 'Torphy, Witting and Mayer', 'Technology', '60123431655', '101 Jalan Raja Chulan'),
(449, 'elauritsencg@jiathis.com', '$2a$04$CCvq4Hl4pZvjRVhvaLADk.KTa9sP8d9TVOmQRdKUuUh', 'Huels-Jakubowski', 'Retail', '60123431656', '123 Jalan Ampang'),
(450, 'jfoskench@moonfruit.com', '$2a$04$voFQz4qHL.V5SlwVhoEwTezAaDFzcNt/VmKW4MtsH9t', 'Lowe Inc', 'Technology', '60123431657', '101 Jalan Raja Chulan'),
(451, 'mpeirpointci@mozilla.com', '$2a$04$t82fqukLAQRg8RnKVPCIQeg9dbpdpd6zQER8p6HjyWQ', 'Rutherford-Breitenberg', 'Finance', '60123431658', '222 Jalan Imbi'),
(452, 'rreycj@nationalgeographic', '$2a$04$TWAF7glaHnwX6QvRCI.9leSZz6oirfSo/FMD9sOTz5z', 'Swaniawski Inc', 'Retail', '60123431659', '101 Jalan Raja Chulan'),
(453, 'hmcluckyck@tuttocitta.it', '$2a$04$zWzJJSJfjBOMnPLZN4CzdeXGFJiupIzUHGjOCGUp1Ql', 'Hintz and Sons', 'Finance', '60123431660', '789 Jalan Bukit Bintang'),
(454, 'ejerattcl@washington.edu', '$2a$04$2apJ1E.8zZaY5gpWJPdeIuDIWxkqwUEKpDjUH7Hirqk', 'Altenwerth, Wintheiser and Cas', 'Manufacturing', '60123431661', '222 Jalan Imbi'),
(455, 'vprattingtoncm@slideshare', '$2a$04$4Bkd3BPGNL3S7/hOR/hrveBqRYyAZI9bo2sSbo9OYeX', 'Pollich, Anderson and Stiedema', 'Technology', '60123431662', '222 Jalan Imbi'),
(456, 'npertcn@indiegogo.com', '$2a$04$079bhwMOaKMFqHAZlV8dEOdwG7TrYUWG17Np1jkrOQv', 'Wunsch, Batz and Herman', 'Technology', '60123431663', '123 Jalan Ampang'),
(457, 'pmanchettco@europa.eu', '$2a$04$TI2nfvLS8be4VsLpqQoDm.lLEWjA/6h5NWKTrkWbmTT', 'Ondricka-Rath', 'Technology', '60123431664', '456 Jalan Tun Razak'),
(458, 'wseekingcp@gnu.org', '$2a$04$neGgTp3tDx4ih.SnLM1rjOwzRlnz4QcSgFRr7euBw27', 'Rolfson, Kuhlman and Emmerich', 'Manufacturing', '60123431665', '123 Jalan Ampang'),
(459, 'gwillanscq@apple.com', '$2a$04$LRgPOfq29.d8ahWAV29/NOejkFuKvPd4BNICgem596L', 'Herzog, Pfeffer and Jaskolski', 'Technology', '60123431666', '101 Jalan Raja Chulan'),
(460, 'jbrimicombecr@live.com', '$2a$04$xMNvKtmXb6ZsF3gX0nkTdewsBQPaZ.Y8yx1FrOhNacZ', 'Wilderman, Labadie and Grant', 'Technology', '60123431667', '456 Jalan Tun Razak'),
(461, 'zfitzsymonscs@quantcast.c', '$2a$04$5ZlxL3XcdEp8ptdBj0/fy.FTQskXAD7BcLDezpJt7Wo', 'O\'Connell LLC', 'Technology', '60123431668', '123 Jalan Ampang'),
(462, 'bbudgeyct@aol.com', '$2a$04$c9LXQDYm3B8lSGBf0Tqe9eY/R.PMcQY0MqXix9IpAtG', 'Pfeffer-Boyer', 'Finance', '60123431669', '101 Jalan Raja Chulan'),
(463, 'worviscu@amazon.de', '$2a$04$QMBbMH4F.YMSRjhsbl04XeK3NcOM3q2xrfwwSlMSWWX', 'Runte Group', 'Technology', '60123431670', '222 Jalan Imbi'),
(464, 'ssuthworthcv@wired.com', '$2a$04$YSGHrWZQjOtnOl2xV7G0suEuml939V4QnaKamasBbOo', 'Blick-Zieme', 'Finance', '60123431671', '222 Jalan Imbi'),
(465, 'jedmundscw@privacy.gov.au', '$2a$04$uB/vsxPdo9KFg5h0wdN/r.U2lKdv3RnstTl1mO6H6Nl', 'Brakus-Yundt', 'Manufacturing', '60123431672', '101 Jalan Raja Chulan'),
(466, 'lsheardscx@cam.ac.uk', '$2a$04$auvC5vWMH/jJXLyrbKIVdu7auoUeXURBLqlxgXc0fZu', 'Watsica Group', 'Manufacturing', '60123431673', '456 Jalan Tun Razak'),
(467, 'achesshyrecy@ask.com', '$2a$04$me4CfIFwqhKKJaFgY2AIBeTURXugMJq42Q/mlwa8yZz', 'MacGyver and Sons', 'Manufacturing', '60123431674', '222 Jalan Imbi'),
(468, 'rmanningcz@timesonline.co', '$2a$04$iXbJk7OeC4DCi6HDucN74OTI/.5w9Np9nK/5iixgCzF', 'White, Kunze and Bartoletti', 'Healthcare', '60123431675', '123 Jalan Ampang'),
(469, 'harnleyd0@biglobe.ne.jp', '$2a$04$W2YU/CE..bR.4/h6GLaHoOQqyK6ssxbR.NfauoSvIIf', 'Daniel-Kuhic', 'Healthcare', '60123431676', '222 Jalan Imbi'),
(470, 'bmcmillamd1@google.pl', '$2a$04$QlSjf64hQXGP0.fkdcnMBuZhXhEonBC1n.bbheHH.oX', 'O\'Kon-Hayes', 'Retail', '60123431677', '123 Jalan Ampang'),
(471, 'ssherburnd2@ebay.com', '$2a$04$efeGr7JJHUHJnzHJ6JL.meNf/XTvc427LAC2qoqCQrY', 'Hettinger, Stehr and Shields', 'Manufacturing', '60123431678', '101 Jalan Raja Chulan'),
(472, 'amackailed3@usatoday.com', '$2a$04$.n9TcvCPdBsgYDb1PgyY0.ttYy9yCqWDSmmBz3oDXqr', 'Hartmann and Sons', 'Retail', '60123431679', '123 Jalan Ampang'),
(473, 'kdouched4@xing.com', '$2a$04$8FsMsLgN6AWLht9J4ksoy.sD4zXCr771nhy.VoCT8nl', 'Kerluke-O\'Kon', 'Finance', '60123431680', '789 Jalan Bukit Bintang'),
(474, 'bboyfordd5@ebay.com', '$2a$04$NRjVlbTjFAxCQZI4WZ4GaOEtPO3mOnzURUtGNW4UJyT', 'Hammes Inc', 'Technology', '60123431681', '123 Jalan Ampang'),
(475, 'bbonicellid6@smh.com.au', '$2a$04$CvYSCtSDAwFF1JGCLqOiL.wLa2YUTin0dnLl.A07jH2', 'Gibson LLC', 'Technology', '60123431682', '123 Jalan Ampang'),
(476, 'adeavesd7@adobe.com', '$2a$04$MCvV2DIvg1uZYcibGeWKVOnfFRG27d84tRwoKnnDtGC', 'Schoen, Lowe and Skiles', 'Technology', '60123431683', '222 Jalan Imbi'),
(477, 'lmaccumeskeyd8@canalblog.', '$2a$04$2bQRkHBgFnIvx99Th80H2OSlfK7k/VFO8Yk891cGKPn', 'Marquardt Group', 'Technology', '60123431684', '123 Jalan Ampang'),
(478, 'mcaselickd9@over-blog.com', '$2a$04$ZWs2lKR4MimuTNEkNb8C3uUZ5SJvM6PRuhfrwpXzxfq', 'Bashirian-Torp', 'Technology', '60123431685', '222 Jalan Imbi'),
(479, 'bkrysztowczykda@cargocoll', '$2a$04$S6XsgtxZc/qUf04jCFrgv.aJzgHsGIWtvOlpngRWRQj', 'Huel LLC', 'Technology', '60123431686', '789 Jalan Bukit Bintang'),
(480, 'tredborndb@gravatar.com', '$2a$04$diIJoU8NZkGl3rAcBvxMoulCEbzRkfd6DXIR/KqzNsf', 'Wolf-Luettgen', 'Healthcare', '60123431687', '789 Jalan Bukit Bintang'),
(481, 'cgiffkinsdc@baidu.com', '$2a$04$ljKoqC0x.6WvIDpKp3Keaem/201/rCImpKBDWJOlcFt', 'Brakus, Gottlieb and Kiehn', 'Finance', '60123431688', '456 Jalan Tun Razak'),
(482, 'kcoppockdd@weather.com', '$2a$04$yd5BQ8OSY.4iTUDcO9/yfuENEwVOjxaHX27MtjeovMd', 'Herzog-Runolfsson', 'Technology', '60123431689', '456 Jalan Tun Razak'),
(483, 'kpercyde@paypal.com', '$2a$04$d8c7JMF7C0aIOnW0pNcbE.lA085ihaU/3LgXEi8zQrs', 'Moen, Hermann and Satterfield', 'Finance', '60123431690', '789 Jalan Bukit Bintang'),
(484, 'jbrownceydf@fotki.com', '$2a$04$kcDb4FEroDl1.wivCBfvCe0LVLRdAemMXMOcHU/uY7g', 'Vandervort Group', 'Healthcare', '60123431691', '222 Jalan Imbi'),
(485, 'dhumblestonedg@fc2.com', '$2a$04$km30u3TkxRNW8qvGNHrAtuv2QobsyJDvkFkXHUSzply', 'King-Lehner', 'Healthcare', '60123431692', '101 Jalan Raja Chulan'),
(486, 'hdawdh@jigsy.com', '$2a$04$6k9YvFuX/G7W9dQ6xQ81FuhH0sPfBtExMGPWWFvsYfd', 'Bartoletti, Yost and Heidenrei', 'Finance', '60123431693', '101 Jalan Raja Chulan'),
(487, 'akempedi@nymag.com', '$2a$04$LdPzlB5wgBjiso9FoHfBpOZHunQvyq9kfeMUxDr7DPZ', 'Reilly, Schuppe and Lynch', 'Technology', '60123431694', '123 Jalan Ampang'),
(488, 'fwarnedj@scientificameric', '$2a$04$xWyEUuvHhyRbqTptXjg/b.CXxxfwxDbU71INdF4/wgX', 'Herman-Gerhold', 'Technology', '60123431695', '456 Jalan Tun Razak'),
(489, 'icohrsdk@w3.org', '$2a$04$I25ESFfZDH99sZob4jJxSO7wQ1vGu93/VOVI/uByhai', 'Kiehn-Beier', 'Healthcare', '60123431696', '123 Jalan Ampang'),
(490, 'hstarrsdl@uiuc.edu', '$2a$04$J491NZ.omhhcIUYb7/tJKujrmxoYQWWmF3O3x8a4a5p', 'Ferry-Collins', 'Retail', '60123431697', '222 Jalan Imbi'),
(491, 'alinguarddm@tripadvisor.c', '$2a$04$bgokNsgJhPc3q1GzoILRg.pkSuaS7WjpCxYtF1dKWY7', 'Jakubowski-Bode', 'Manufacturing', '60123431698', '123 Jalan Ampang'),
(492, 'robroganedn@dailymotion.c', '$2a$04$lOcdp1e.arWOuXhLFdmQBOWSs8seGVeqCVpsSGGDh1k', 'Gutkowski Inc', 'Healthcare', '60123431699', '456 Jalan Tun Razak'),
(493, 'agaido@biglobe.ne.jp', '$2a$04$B4E5hTcj3qNokZVnZVOO8e5F7fzszonuYDnfdu1JyW6', 'Wisozk and Sons', 'Manufacturing', '60123431700', '123 Jalan Ampang'),
(494, 'hpomphreydp@odnoklassniki', '$2a$04$STt4UEdG/XWl78laZujqqeA9wOf7I3/K3fm8aVAYuRy', 'Fadel Inc', 'Finance', '60123431701', '101 Jalan Raja Chulan'),
(495, 'kverrickdq@e-recht24.de', '$2a$04$S4DJpTAFWOtacZ2gG5EHrudSW6wchfhmqat9oIAcLBM', 'Rogahn-Pouros', 'Finance', '60123431702', '789 Jalan Bukit Bintang'),
(496, 'gscarddr@geocities.com', '$2a$04$.wmNPblpkiJGshlbn90s9.K86ojyu82Q2nGSZVPZIR8', 'Hodkiewicz, Gerhold and Romagu', 'Retail', '60123431703', '456 Jalan Tun Razak'),
(497, 'kvynollds@vimeo.com', '$2a$04$XA9Iw7lbua/iRlhyGF7Ehu3y6Tae/PORbkS1fKDz/3N', 'Hodkiewicz-Rodriguez', 'Technology', '60123431704', '101 Jalan Raja Chulan'),
(498, 'draxworthydt@vimeo.com', '$2a$04$sNiqpoziTpLTtJ9Ve6cdyOBltIcVYIOs8EGYyxEDtpy', 'Collier Inc', 'Retail', '60123431705', '101 Jalan Raja Chulan'),
(499, 'kmalickidu@who.int', '$2a$04$Zwn.Z/pgBteAsfiuohvasOvLTb07.aNTu5Jb/XIAsbG', 'Boehm Group', 'Healthcare', '60123431706', '123 Jalan Ampang'),
(500, 'aseilerdv@miitbeian.gov.c', '$2a$04$7Pk0FDAhoCPosUugYAekMua/ZJkQ4LuphgbhmEUtLDE', 'Howell-Schimmel', 'Manufacturing', '60123431707', '789 Jalan Bukit Bintang');

-- --------------------------------------------------------

--
-- Table structure for table `partnership`
--

CREATE TABLE `partnership` (
  `PartnershipID` int(10) NOT NULL,
  `Partnership_Agreement_FileID` int(10) NOT NULL,
  `Agreement_Date` date DEFAULT NULL,
  `PartnerID` int(10) DEFAULT NULL,
  `ProjectID` int(10) NOT NULL,
  `Status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partnership`
--

INSERT INTO `partnership` (`PartnershipID`, `Partnership_Agreement_FileID`, `Agreement_Date`, `PartnerID`, `ProjectID`, `Status`) VALUES
(1, 1, '2023-10-07', 241, 2, 'Completed'),
(2, 2, '2023-12-22', 241, 5, 'Completed'),
(3, 3, '2023-04-17', 86, 7, 'Ongoing'),
(4, 4, '2023-11-28', 281, 8, 'Completed'),
(5, 5, '2023-10-30', 186, 9, 'Ongoing'),
(6, 6, '2024-02-10', 296, 10, 'Completed'),
(7, 7, '2024-01-11', 283, 11, 'Completed'),
(8, 8, '2023-03-29', 235, 13, 'Ongoing'),
(9, 9, '2023-04-28', 120, 15, 'Ongoing'),
(10, 10, '2023-02-20', 22, 16, 'Ongoing'),
(11, 11, '2023-11-18', 169, 17, 'Completed'),
(12, 12, '2024-02-09', 86, 19, 'Completed'),
(13, 13, '2023-09-09', 188, 20, 'Ongoing'),
(14, 14, '2023-06-03', 195, 21, 'Completed'),
(15, 15, '2023-10-06', 131, 23, 'Completed'),
(16, 16, '2023-03-05', 190, 25, 'Completed'),
(17, 17, '2023-10-14', 274, 26, 'Ongoing'),
(18, 18, '2023-04-22', 92, 27, 'Ongoing'),
(19, 19, '2023-06-03', 66, 29, 'Ongoing'),
(20, 20, '2023-05-02', 37, 30, 'Completed'),
(21, 21, '2023-12-19', 239, 31, 'Ongoing'),
(22, 22, '2023-08-20', 214, 33, 'Ongoing'),
(23, 23, '2023-06-15', 240, 35, 'Ongoing'),
(24, 24, '2023-06-15', 63, 37, 'Ongoing'),
(25, 25, '2023-08-31', 217, 39, 'Ongoing'),
(26, 26, '2023-11-28', 86, 41, 'Ongoing'),
(27, 27, '2024-02-06', 177, 42, 'Completed'),
(28, 28, '2023-03-23', 29, 43, 'Ongoing'),
(29, 29, '2023-09-25', 254, 46, 'Completed'),
(30, 30, '2023-07-08', 219, 47, 'Ongoing'),
(31, 31, '2023-07-19', 241, 50, 'Completed'),
(32, 32, '2023-05-07', 92, 53, 'Ongoing'),
(33, 33, '2023-10-14', 78, 54, 'Completed'),
(34, 34, '2023-03-12', 290, 57, 'Ongoing'),
(35, 35, '2024-01-22', 164, 58, 'Completed'),
(36, 36, '2023-06-16', 296, 58, 'Completed'),
(37, 37, '2023-08-19', 240, 60, 'Completed'),
(38, 38, '2023-10-16', 160, 63, 'Completed'),
(39, 39, '2024-01-14', 187, 64, 'Completed'),
(40, 40, '2023-03-15', 51, 66, 'Ongoing'),
(41, 41, '2023-07-26', 209, 68, 'Ongoing'),
(42, 42, '2023-08-13', 286, 71, 'Ongoing'),
(43, 43, '2023-08-09', 278, 72, 'Completed'),
(44, 44, '2023-12-02', 71, 75, 'Completed'),
(45, 45, '2023-08-10', 66, 77, 'Ongoing'),
(46, 46, '2023-04-15', 71, 78, 'Completed'),
(47, 47, '2023-06-01', 116, 79, 'Ongoing'),
(48, 48, '2023-08-29', 97, 80, 'Completed'),
(49, 49, '2023-12-22', 168, 81, 'Completed'),
(50, 50, '2024-01-02', 228, 82, 'Ongoing'),
(51, 51, '2023-02-21', 158, 83, 'Ongoing'),
(52, 52, '2024-02-03', 172, 84, 'Completed'),
(53, 53, '2023-11-15', 24, 88, 'Completed'),
(54, 54, '2023-09-15', 113, 89, 'Completed'),
(55, 55, '2023-06-17', 268, 91, 'Ongoing'),
(56, 56, '2023-11-26', 228, 92, 'Completed'),
(57, 57, '2023-07-20', 257, 93, 'Ongoing'),
(58, 58, '2023-10-29', 272, 96, 'Completed'),
(59, 59, '2023-09-07', 172, 98, 'Ongoing'),
(60, 60, '2023-06-12', 59, 100, 'Ongoing'),
(61, 61, '2024-01-29', 59, 111, 'Ongoing'),
(62, 62, '2023-08-19', 152, 112, 'Ongoing'),
(63, 63, '2023-09-17', 241, 115, 'Ongoing'),
(64, 64, '2023-12-10', 240, 117, 'Ongoing'),
(65, 65, '2023-06-02', 300, 118, 'Completed'),
(66, 66, '2023-02-28', 130, 119, 'Ongoing'),
(67, 67, '2023-05-18', 193, 121, 'Ongoing'),
(68, 68, '2023-12-02', 119, 122, 'Completed'),
(69, 69, '2023-04-28', 9, 125, 'Ongoing'),
(70, 70, '2023-08-27', 105, 127, 'Ongoing'),
(71, 71, '2023-06-15', 51, 128, 'Completed'),
(72, 72, '2023-06-25', 1, 129, 'Ongoing'),
(73, 73, '2024-01-02', 1, 141, 'Completed'),
(74, 74, '2023-06-04', 191, 144, 'Completed'),
(75, 75, '2023-12-15', 117, 146, 'Ongoing'),
(76, 76, '2023-08-18', 1, 147, 'Completed'),
(77, 77, '2023-11-15', 72, 149, 'Ongoing'),
(78, 78, '2023-03-01', 230, 150, 'Ongoing'),
(79, 79, '2023-12-07', 190, 153, 'Completed'),
(80, 80, '2024-01-12', 38, 154, 'Completed'),
(81, 81, '2023-10-11', 270, 155, 'Completed'),
(82, 82, '2023-06-26', 93, 157, 'Completed'),
(83, 83, '2023-05-21', 63, 158, 'Completed'),
(84, 84, '2023-11-28', 267, 162, 'Ongoing'),
(85, 85, '2023-04-30', 203, 163, 'Completed'),
(86, 86, '2023-06-04', 137, 165, 'Completed'),
(87, 87, '2023-09-21', 4, 167, 'Completed'),
(88, 88, '2023-07-05', 155, 168, 'Ongoing'),
(89, 89, '2023-06-12', 212, 169, 'Completed'),
(90, 90, '2023-04-21', 56, 170, 'Ongoing'),
(91, 91, '2023-08-13', 178, 172, 'Completed'),
(92, 92, '2023-09-01', 164, 173, 'Completed'),
(93, 93, '2023-02-09', 266, 175, 'Ongoing'),
(94, 94, '2024-01-05', 28, 176, 'Ongoing'),
(95, 95, '2023-08-30', 139, 179, 'Ongoing'),
(96, 96, '2023-10-26', 92, 180, 'Completed'),
(97, 97, '2023-11-09', 101, 181, 'Completed'),
(98, 98, '2023-07-22', 97, 182, 'Completed'),
(99, 99, '2023-09-05', 262, 184, 'Completed'),
(100, 100, '2024-01-22', 105, 188, 'Ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `partnership_agreement_file`
--

CREATE TABLE `partnership_agreement_file` (
  `Partnership_Agreement_FileID` int(10) NOT NULL,
  `File_Name` varchar(255) NOT NULL,
  `File_Size` int(11) NOT NULL,
  `Downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partnership_agreement_file`
--

INSERT INTO `partnership_agreement_file` (`Partnership_Agreement_FileID`, `File_Name`, `File_Size`, `Downloads`) VALUES
(1, 'pk1hsS8H.pdf', 593980, 0),
(2, 'Nn29a535.pdf', 72859, 0),
(3, 'fs0R7YyQ.pdf', 581562, 0),
(4, 'ZrQMOKIo.pdf', 617201, 0),
(5, 'jAg6071g.pdf', 548988, 0),
(6, '6P0F8Lvz.pdf', 216877, 0),
(7, 'HcQLNca7.pdf', 713168, 0),
(8, '4KD9Vr6O.pdf', 207802, 0),
(9, '72Wc5OvN.pdf', 748395, 0),
(10, '4wPit1u5.pdf', 455177, 0),
(11, '9CH240X7.pdf', 850788, 0),
(12, '1U1W5lIh.pdf', 201354, 0),
(13, 'Qq4b0wTx.pdf', 822693, 0),
(14, '5z9pz8wS.pdf', 618673, 0),
(15, '2jiD47l4.pdf', 898569, 0),
(16, '0ORY3z2q.pdf', 905743, 0),
(17, '30AJR1O5.pdf', 399071, 0),
(18, '1T2Q83Vy.pdf', 749083, 0),
(19, '9dHA3Wpe.pdf', 691307, 0),
(20, 's0A831OQ.pdf', 399636, 0),
(21, 'lAZM7Y62.pdf', 258664, 0),
(22, '73tdl8FM.pdf', 224797, 0),
(23, 'wI03i5d4.pdf', 661035, 0),
(24, '52STjgmd.pdf', 915384, 0),
(25, '0I2mEF3a.pdf', 861292, 0),
(26, 'lM2iCVYB.pdf', 479326, 0),
(27, 'zU034b3s.pdf', 378628, 0),
(28, 'yVMl458m.pdf', 496286, 0),
(29, '6baHjt8E.pdf', 884782, 0),
(30, 'g6zBiq0j.pdf', 875799, 0),
(31, 'aVB48D23.pdf', 707018, 0),
(32, '790xGu5E.pdf', 608140, 0),
(33, 'adH00YLb.pdf', 502818, 0),
(34, '16bgm1m5.pdf', 157232, 0),
(35, 'Wph137IM.pdf', 593023, 0),
(36, 'fpqo18e1.pdf', 887102, 0),
(37, 'A486W461.pdf', 198769, 0),
(38, 'sRYYmxBj.pdf', 222950, 0),
(39, 'PP6O9o3R.pdf', 987016, 0),
(40, '9niTarm9.pdf', 81823, 0),
(41, 'd8LD41pZ.pdf', 240359, 0),
(42, 'oJ1e80qP.pdf', 876971, 0),
(43, 'EI7lFWSO.pdf', 520286, 0),
(44, 'bKKchWR4.pdf', 567946, 0),
(45, 'Z84T2G5K.pdf', 972154, 0),
(46, 'w1YYl6wr.pdf', 129266, 0),
(47, '2lDeQ2qf.pdf', 558006, 0),
(48, '2JFiw735.pdf', 851006, 0),
(49, 'mf3f7LA5.pdf', 262901, 0),
(50, '1P801U75.pdf', 481936, 0),
(51, 'fv60510L.pdf', 552223, 0),
(52, 'n8z0zvQM.pdf', 979582, 0),
(53, 'x7B7mSe7.pdf', 604696, 0),
(54, '8SFbwqs7.pdf', 653161, 0),
(55, 'O8Gm6COl.pdf', 485912, 0),
(56, 'l9gLVCcd.pdf', 246990, 0),
(57, 'UjO39m39.pdf', 599119, 0),
(58, 'AJ61s9Ho.pdf', 100694, 0),
(59, '2rPfdylU.pdf', 970485, 0),
(60, '5566sE1N.pdf', 122982, 0),
(61, '1I6EkaN6.pdf', 554099, 0),
(62, 'TohRigGh.pdf', 191829, 0),
(63, 'lh2ow3CR.pdf', 475678, 0),
(64, 'Jx2xP9Zw.pdf', 221104, 0),
(65, '0sB3am89.pdf', 422693, 0),
(66, 'Cu2uUIfh.pdf', 226101, 0),
(67, '8GoQsl7C.pdf', 295078, 0),
(68, 'fHAAt8cW.pdf', 297732, 0),
(69, 'R62vT6Bk.pdf', 118483, 0),
(70, 'hqAuJ3gY.pdf', 766729, 0),
(71, '81a6eNe4.pdf', 666399, 0),
(72, 'fPaLBA8N.pdf', 80715, 0),
(73, 'E2ve19ye.pdf', 694196, 0),
(74, 'c8Oyk390.pdf', 153160, 0),
(75, 'Rsl7vZtq.pdf', 242816, 0),
(76, '1n4MpuFA.pdf', 548403, 0),
(77, 'XgDDGIIr.pdf', 446667, 0),
(78, 'crekf9sa.pdf', 79305, 0),
(79, 'G58j3Ia0.pdf', 362038, 0),
(80, 'Y1yG3QY6.pdf', 558899, 0),
(81, 'IF4AP6yM.pdf', 711591, 0),
(82, 'DkQ942G5.pdf', 292262, 0),
(83, 'M2x2KmJd.pdf', 911177, 0),
(84, 'M90MOw8s.pdf', 485021, 0),
(85, 'G67wPkJi.pdf', 933444, 0),
(86, 'a3RPhGQS.pdf', 790403, 0),
(87, '5E8a7JIp.pdf', 462200, 0),
(88, '5Ppi255P.pdf', 483003, 0),
(89, 'E9TRZdfs.pdf', 401750, 0),
(90, '6542FVMT.pdf', 100872, 0),
(91, 'nhfhbPC3.pdf', 640190, 0),
(92, 'l8a6vSYq.pdf', 879676, 0),
(93, '2dAv1F54.pdf', 606814, 0),
(94, 'EcdNrIAP.pdf', 271374, 0),
(95, '1UyBhADR.pdf', 411534, 0),
(96, '7sL85v5B.pdf', 146468, 0),
(97, 'v1MCR97W.pdf', 732112, 0),
(98, '7Y418ztT.pdf', 464245, 0),
(99, 'ATmhv0Ot.pdf', 179830, 0),
(100, 'WxZYubYI.pdf', 426388, 0),
(118, 'Reilly, Mraz and Hand Proposal.pdf', 107234, 0);

-- --------------------------------------------------------

--
-- Table structure for table `partner_event`
--

CREATE TABLE `partner_event` (
  `Partner_EventID` int(10) NOT NULL,
  `Partner_Event_ReportID` int(10) NOT NULL,
  `Agreement_Date` date DEFAULT NULL,
  `PartnerID` int(10) NOT NULL,
  `EventID` int(10) NOT NULL,
  `Status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partner_event`
--

INSERT INTO `partner_event` (`Partner_EventID`, `Partner_Event_ReportID`, `Agreement_Date`, `PartnerID`, `EventID`, `Status`) VALUES
(1, 1, '2023-10-07', 1, 2, 'Completed'),
(2, 2, '2023-12-22', 241, 5, 'Completed'),
(3, 3, '2023-04-17', 1, 7, 'Ongoing'),
(4, 4, '2023-11-28', 281, 8, 'Completed'),
(5, 5, '2023-10-30', 186, 9, 'Ongoing'),
(6, 6, '2024-02-10', 1, 10, 'Completed'),
(7, 7, '2024-01-11', 283, 11, 'Completed'),
(8, 8, '2023-03-29', 235, 13, 'Ongoing'),
(9, 9, '2023-04-28', 120, 15, 'Ongoing'),
(10, 10, '2023-02-20', 22, 16, 'Ongoing'),
(11, 11, '2023-11-18', 169, 17, 'Completed'),
(12, 12, '2024-02-09', 86, 19, 'Completed'),
(13, 13, '2023-09-09', 188, 20, 'Ongoing'),
(14, 14, '2023-06-03', 195, 21, 'Completed'),
(15, 15, '2023-10-06', 131, 23, 'Completed'),
(16, 16, '2023-03-05', 190, 25, 'Completed'),
(17, 17, '2023-10-14', 274, 26, 'Ongoing'),
(18, 18, '2023-04-22', 92, 27, 'Ongoing'),
(19, 19, '2023-06-03', 66, 29, 'Ongoing'),
(20, 20, '2023-05-02', 37, 30, 'Completed'),
(21, 21, '2023-12-19', 239, 31, 'Ongoing'),
(22, 22, '2023-08-20', 214, 33, 'Ongoing'),
(23, 23, '2023-06-15', 240, 35, 'Ongoing'),
(24, 24, '2023-06-15', 63, 37, 'Ongoing'),
(25, 25, '2023-08-31', 217, 39, 'Ongoing'),
(26, 26, '2023-11-28', 86, 41, 'Ongoing'),
(27, 27, '2024-02-06', 177, 42, 'Completed'),
(28, 28, '2023-03-23', 29, 43, 'Ongoing'),
(29, 29, '2023-09-25', 254, 46, 'Completed'),
(30, 30, '2023-07-08', 219, 47, 'Ongoing'),
(31, 31, '2023-07-19', 241, 50, 'Completed'),
(32, 32, '2023-05-07', 92, 53, 'Ongoing'),
(33, 33, '2023-10-14', 78, 54, 'Completed'),
(34, 34, '2023-03-12', 290, 57, 'Ongoing'),
(35, 35, '2024-01-22', 164, 58, 'Completed'),
(36, 36, '2023-06-16', 296, 58, 'Completed'),
(37, 37, '2023-08-19', 240, 60, 'Completed'),
(38, 38, '2023-10-16', 160, 63, 'Completed'),
(39, 39, '2024-01-14', 187, 64, 'Completed'),
(40, 40, '2023-03-15', 51, 66, 'Ongoing'),
(41, 41, '2023-07-26', 209, 68, 'Ongoing'),
(42, 42, '2023-08-13', 286, 71, 'Ongoing'),
(43, 43, '2023-08-09', 278, 72, 'Completed'),
(44, 44, '2023-12-02', 71, 75, 'Completed'),
(45, 45, '2023-08-10', 66, 77, 'Ongoing'),
(46, 46, '2023-04-15', 71, 78, 'Completed'),
(47, 47, '2023-06-01', 116, 79, 'Ongoing'),
(48, 48, '2023-08-29', 97, 80, 'Completed'),
(49, 49, '2023-12-22', 168, 81, 'Completed'),
(50, 50, '2024-01-02', 228, 82, 'Ongoing'),
(51, 51, '2023-02-21', 158, 83, 'Ongoing'),
(52, 52, '2024-02-03', 172, 84, 'Completed'),
(53, 53, '2023-11-15', 24, 88, 'Completed'),
(54, 54, '2023-09-15', 113, 89, 'Completed'),
(55, 55, '2023-06-17', 268, 91, 'Ongoing'),
(56, 56, '2023-11-26', 228, 92, 'Completed'),
(57, 57, '2023-07-20', 257, 93, 'Ongoing'),
(58, 58, '2023-10-29', 272, 96, 'Completed'),
(59, 59, '2023-09-07', 172, 98, 'Ongoing'),
(60, 60, '2023-06-12', 59, 100, 'Ongoing'),
(61, 61, '2024-01-29', 59, 111, 'Ongoing'),
(62, 62, '2023-08-19', 152, 112, 'Ongoing'),
(63, 63, '2023-09-17', 241, 115, 'Ongoing'),
(64, 64, '2023-12-10', 240, 117, 'Ongoing'),
(65, 65, '2023-06-02', 300, 118, 'Completed'),
(66, 66, '2023-02-28', 130, 119, 'Ongoing'),
(67, 67, '2023-05-18', 193, 121, 'Ongoing'),
(68, 68, '2023-12-02', 119, 122, 'Completed'),
(69, 69, '2023-04-28', 9, 125, 'Ongoing'),
(70, 70, '2023-08-27', 105, 127, 'Ongoing'),
(71, 71, '2023-06-15', 51, 128, 'Completed'),
(72, 72, '2023-06-25', 3, 129, 'Ongoing'),
(73, 73, '2024-01-02', 23, 141, 'Completed'),
(74, 74, '2023-06-04', 191, 144, 'Completed'),
(75, 75, '2023-12-15', 117, 146, 'Ongoing'),
(76, 76, '2023-08-18', 13, 147, 'Completed'),
(77, 77, '2023-11-15', 72, 149, 'Ongoing'),
(78, 78, '2023-03-01', 230, 150, 'Ongoing'),
(79, 79, '2023-12-07', 190, 153, 'Completed'),
(80, 80, '2024-01-12', 38, 154, 'Completed'),
(81, 81, '2023-10-11', 270, 155, 'Completed'),
(82, 82, '2023-06-26', 93, 157, 'Completed'),
(83, 83, '2023-05-21', 63, 158, 'Completed'),
(84, 84, '2023-11-28', 267, 162, 'Ongoing'),
(85, 85, '2023-04-30', 203, 163, 'Completed'),
(86, 86, '2023-06-04', 137, 165, 'Completed'),
(87, 87, '2023-09-21', 4, 167, 'Completed'),
(88, 88, '2023-07-05', 155, 168, 'Ongoing'),
(89, 89, '2023-06-12', 212, 169, 'Completed'),
(90, 90, '2023-04-21', 56, 170, 'Ongoing'),
(91, 91, '2023-08-13', 178, 172, 'Completed'),
(92, 92, '2023-09-01', 164, 173, 'Completed'),
(93, 93, '2023-02-09', 266, 175, 'Ongoing'),
(94, 94, '2024-01-05', 28, 176, 'Ongoing'),
(95, 95, '2023-08-30', 139, 179, 'Ongoing'),
(96, 96, '2023-10-26', 92, 180, 'Completed'),
(97, 97, '2023-11-09', 101, 181, 'Completed'),
(98, 98, '2023-07-22', 97, 182, 'Completed'),
(99, 99, '2023-09-05', 262, 184, 'Completed'),
(100, 100, '2024-01-22', 105, 188, 'Ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `partner_event_report`
--

CREATE TABLE `partner_event_report` (
  `Partner_Event_ReportID` int(10) NOT NULL,
  `File_Name` varchar(255) NOT NULL,
  `File_Size` int(11) NOT NULL,
  `Downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partner_event_report`
--

INSERT INTO `partner_event_report` (`Partner_Event_ReportID`, `File_Name`, `File_Size`, `Downloads`) VALUES
(1, 'pk1hsS8H.pdf', 593980, 0),
(2, 'Nn29a535.pdf', 72859, 0),
(3, 'fs0R7YyQ.pdf', 581562, 0),
(4, 'ZrQMOKIo.pdf', 617201, 0),
(5, 'jAg6071g.pdf', 548988, 0),
(6, '6P0F8Lvz.pdf', 216877, 0),
(7, 'HcQLNca7.pdf', 713168, 0),
(8, '4KD9Vr6O.pdf', 207802, 0),
(9, '72Wc5OvN.pdf', 748395, 0),
(10, '4wPit1u5.pdf', 455177, 0),
(11, '9CH240X7.pdf', 850788, 0),
(12, '1U1W5lIh.pdf', 201354, 0),
(13, 'Qq4b0wTx.pdf', 822693, 0),
(14, '5z9pz8wS.pdf', 618673, 0),
(15, '2jiD47l4.pdf', 898569, 0),
(16, '0ORY3z2q.pdf', 905743, 0),
(17, '30AJR1O5.pdf', 399071, 0),
(18, '1T2Q83Vy.pdf', 749083, 0),
(19, '9dHA3Wpe.pdf', 691307, 0),
(20, 's0A831OQ.pdf', 399636, 0),
(21, 'lAZM7Y62.pdf', 258664, 0),
(22, '73tdl8FM.pdf', 224797, 0),
(23, 'wI03i5d4.pdf', 661035, 0),
(24, '52STjgmd.pdf', 915384, 0),
(25, '0I2mEF3a.pdf', 861292, 0),
(26, 'lM2iCVYB.pdf', 479326, 0),
(27, 'zU034b3s.pdf', 378628, 0),
(28, 'yVMl458m.pdf', 496286, 0),
(29, '6baHjt8E.pdf', 884782, 0),
(30, 'g6zBiq0j.pdf', 875799, 0),
(31, 'aVB48D23.pdf', 707018, 0),
(32, '790xGu5E.pdf', 608140, 0),
(33, 'adH00YLb.pdf', 502818, 0),
(34, '16bgm1m5.pdf', 157232, 0),
(35, 'Wph137IM.pdf', 593023, 0),
(36, 'fpqo18e1.pdf', 887102, 0),
(37, 'A486W461.pdf', 198769, 0),
(38, 'sRYYmxBj.pdf', 222950, 0),
(39, 'PP6O9o3R.pdf', 987016, 0),
(40, '9niTarm9.pdf', 81823, 0),
(41, 'd8LD41pZ.pdf', 240359, 0),
(42, 'oJ1e80qP.pdf', 876971, 0),
(43, 'EI7lFWSO.pdf', 520286, 0),
(44, 'bKKchWR4.pdf', 567946, 0),
(45, 'Z84T2G5K.pdf', 972154, 0),
(46, 'w1YYl6wr.pdf', 129266, 0),
(47, '2lDeQ2qf.pdf', 558006, 0),
(48, '2JFiw735.pdf', 851006, 0),
(49, 'mf3f7LA5.pdf', 262901, 0),
(50, '1P801U75.pdf', 481936, 0),
(51, 'fv60510L.pdf', 552223, 0),
(52, 'n8z0zvQM.pdf', 979582, 0),
(53, 'x7B7mSe7.pdf', 604696, 0),
(54, '8SFbwqs7.pdf', 653161, 0),
(55, 'O8Gm6COl.pdf', 485912, 0),
(56, 'l9gLVCcd.pdf', 246990, 0),
(57, 'UjO39m39.pdf', 599119, 0),
(58, 'AJ61s9Ho.pdf', 100694, 0),
(59, '2rPfdylU.pdf', 970485, 0),
(60, '5566sE1N.pdf', 122982, 0),
(61, '1I6EkaN6.pdf', 554099, 0),
(62, 'TohRigGh.pdf', 191829, 0),
(63, 'lh2ow3CR.pdf', 475678, 0),
(64, 'Jx2xP9Zw.pdf', 221104, 0),
(65, '0sB3am89.pdf', 422693, 0),
(66, 'Cu2uUIfh.pdf', 226101, 0),
(67, '8GoQsl7C.pdf', 295078, 0),
(68, 'fHAAt8cW.pdf', 297732, 0),
(69, 'R62vT6Bk.pdf', 118483, 0),
(70, 'hqAuJ3gY.pdf', 766729, 0),
(71, '81a6eNe4.pdf', 666399, 0),
(72, 'fPaLBA8N.pdf', 80715, 0),
(73, 'E2ve19ye.pdf', 694196, 0),
(74, 'c8Oyk390.pdf', 153160, 0),
(75, 'Rsl7vZtq.pdf', 242816, 0),
(76, '1n4MpuFA.pdf', 548403, 0),
(77, 'XgDDGIIr.pdf', 446667, 0),
(78, 'crekf9sa.pdf', 79305, 0),
(79, 'G58j3Ia0.pdf', 362038, 0),
(80, 'Y1yG3QY6.pdf', 558899, 0),
(81, 'IF4AP6yM.pdf', 711591, 0),
(82, 'DkQ942G5.pdf', 292262, 0),
(83, 'M2x2KmJd.pdf', 911177, 0),
(84, 'M90MOw8s.pdf', 485021, 0),
(85, 'G67wPkJi.pdf', 933444, 0),
(86, 'a3RPhGQS.pdf', 790403, 0),
(87, '5E8a7JIp.pdf', 462200, 0),
(88, '5Ppi255P.pdf', 483003, 0),
(89, 'E9TRZdfs.pdf', 401750, 0),
(90, '6542FVMT.pdf', 100872, 0),
(91, 'nhfhbPC3.pdf', 640190, 0),
(92, 'l8a6vSYq.pdf', 879676, 0),
(93, '2dAv1F54.pdf', 606814, 0),
(94, 'EcdNrIAP.pdf', 271374, 0),
(95, '1UyBhADR.pdf', 411534, 0),
(96, '7sL85v5B.pdf', 146468, 0),
(97, 'v1MCR97W.pdf', 732112, 0),
(98, '7Y418ztT.pdf', 464245, 0),
(99, 'ATmhv0Ot.pdf', 179830, 0),
(100, 'WxZYubYI.pdf', 426388, 0),
(118, 'Reilly, Mraz and Hand Proposal.pdf', 107234, 0);

-- --------------------------------------------------------

--
-- Table structure for table `partner_feedback`
--

CREATE TABLE `partner_feedback` (
  `Partner_FeedbackID` int(10) NOT NULL,
  `Date` date DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Status` varchar(30) DEFAULT NULL,
  `PartnerID` int(10) DEFAULT NULL,
  `EventID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partner_feedback`
--

INSERT INTO `partner_feedback` (`Partner_FeedbackID`, `Date`, `Description`, `Rating`, `Type`, `Status`, `PartnerID`, `EventID`) VALUES
(1, '2023-03-12', 'The event provided valuable insights and networking opportunities.', 1, 'Compliment', 'Room for Improvement', 92, 94),
(2, '2023-10-18', 'The event venue was not suitable and affected the overall experience.', 7, 'Compliment', 'Room for Improvement', 250, 37),
(3, '2023-07-18', 'The event provided valuable insights and networking opportunities.', 0, 'Suggestion', 'Room for Improvement', 226, 118),
(4, '2023-05-10', 'The event venue was not suitable and affected the overall experience.', 3, 'Suggestion', 'Room for Improvement', 233, 60),
(5, '2023-03-10', 'The speakers were knowledgeable and engaging.', 9, 'Compliment', 'Room for Improvement', 34, 103),
(6, '2023-12-07', 'The event provided valuable insights and networking opportunities.', 9, 'Suggestion', 'Room for Improvement', 356, 182),
(7, '2023-06-02', 'The event did not meet my expectations and was a waste of time.', 4, 'Compliment', 'Success', 491, 75),
(8, '2023-05-14', 'The event provided valuable insights and networking opportunities.', 4, 'Compliment', 'Room for Improvement', 438, 66),
(9, '2024-01-27', 'The event was well-organized and enjoyable.', 0, 'Suggestion', 'Room for Improvement', 298, 70),
(10, '2023-02-27', 'The speakers were knowledgeable and engaging.', 6, 'Compliment', 'Success', 2, 14),
(11, '2023-08-31', 'The event did not meet my expectations and was a waste of time.', 10, 'Suggestion', 'Success', 292, 159),
(12, '2024-01-20', 'The event was well-organized and enjoyable.', 1, 'Suggestion', 'Success', 240, 140),
(13, '2023-08-15', 'The event lacked proper coordination and was disappointing.', 1, 'Suggestion', 'Success', 48, 179),
(14, '2023-11-22', 'The event provided valuable insights and networking opportunities.', 0, 'Suggestion', 'Room for Improvement', 422, 112),
(15, '2023-02-19', 'The event provided valuable insights and networking opportunities.', 8, 'Suggestion', 'Room for Improvement', 136, 57),
(16, '2023-09-12', 'The event provided valuable insights and networking opportunities.', 5, 'Suggestion', 'Room for Improvement', 41, 91),
(17, '2023-03-15', 'The event lacked proper coordination and was disappointing.', 2, 'Suggestion', 'Room for Improvement', 242, 197),
(18, '2024-01-08', 'The event provided valuable insights and networking opportunities.', 6, 'Compliment', 'Success', 168, 70),
(19, '2023-11-07', 'The event venue was not suitable and affected the overall experience.', 10, 'Compliment', 'Room for Improvement', 180, 198),
(20, '2023-10-03', 'The event did not meet my expectations and was a waste of time.', 5, 'Compliment', 'Room for Improvement', 227, 49),
(21, '2023-06-25', 'The event provided valuable insights and networking opportunities.', 6, 'Suggestion', 'Room for Improvement', 221, 141),
(22, '2023-10-18', 'The event venue was not suitable and affected the overall experience.', 3, 'Compliment', 'Success', 160, 50),
(23, '2023-11-14', 'The event lacked proper coordination and was disappointing.', 10, 'Compliment', 'Success', 191, 78),
(24, '2023-04-15', 'The event lacked proper coordination and was disappointing.', 9, 'Suggestion', 'Room for Improvement', 8, 124),
(25, '2023-10-19', 'The event was well-organized and enjoyable.', 4, 'Compliment', 'Room for Improvement', 480, 160),
(26, '2023-06-18', 'The event did not meet my expectations and was a waste of time.', 3, 'Suggestion', 'Success', 154, 123),
(27, '2023-08-01', 'The event lacked proper coordination and was disappointing.', 10, 'Compliment', 'Success', 468, 91),
(28, '2023-11-21', 'The event venue was not suitable and affected the overall experience.', 4, 'Compliment', 'Room for Improvement', 405, 11),
(29, '2023-05-13', 'The event did not meet my expectations and was a waste of time.', 5, 'Suggestion', 'Success', 273, 122),
(30, '2023-04-29', 'The event did not meet my expectations and was a waste of time.', 1, 'Suggestion', 'Room for Improvement', 52, 85),
(31, '2023-09-24', 'The speakers were knowledgeable and engaging.', 8, 'Compliment', 'Success', 72, 129),
(32, '2023-12-17', 'The event provided valuable insights and networking opportunities.', 8, 'Suggestion', 'Success', 16, 170),
(33, '2023-07-14', 'The event did not meet my expectations and was a waste of time.', 2, 'Compliment', 'Success', 53, 110),
(34, '2023-05-17', 'The event provided valuable insights and networking opportunities.', 5, 'Compliment', 'Success', 488, 86),
(35, '2024-02-01', 'The event did not meet my expectations and was a waste of time.', 3, 'Compliment', 'Success', 297, 154),
(36, '2023-03-16', 'The event venue was not suitable and affected the overall experience.', 5, 'Compliment', 'Success', 476, 41),
(37, '2023-09-11', 'The event provided valuable insights and networking opportunities.', 0, 'Suggestion', 'Success', 401, 113),
(38, '2023-03-05', 'The event venue was not suitable and affected the overall experience.', 3, 'Compliment', 'Success', 470, 116),
(39, '2023-04-19', 'The event lacked proper coordination and was disappointing.', 0, 'Suggestion', 'Room for Improvement', 298, 120),
(40, '2023-04-15', 'The event was well-organized and enjoyable.', 1, 'Suggestion', 'Success', 439, 183),
(41, '2023-05-04', 'The event was well-organized and enjoyable.', 2, 'Compliment', 'Room for Improvement', 270, 6),
(42, '2023-05-07', 'The event did not meet my expectations and was a waste of time.', 0, 'Suggestion', 'Success', 181, 163),
(43, '2023-03-18', 'The event provided valuable insights and networking opportunities.', 4, 'Suggestion', 'Room for Improvement', 444, 56),
(44, '2023-12-04', 'The event did not meet my expectations and was a waste of time.', 8, 'Suggestion', 'Success', 446, 99),
(45, '2024-01-06', 'The event lacked proper coordination and was disappointing.', 6, 'Compliment', 'Room for Improvement', 342, 41),
(46, '2023-07-20', 'The speakers were knowledgeable and engaging.', 2, 'Compliment', 'Success', 284, 49),
(47, '2023-08-24', 'The event provided valuable insights and networking opportunities.', 6, 'Suggestion', 'Success', 64, 143),
(48, '2023-12-17', 'The speakers were knowledgeable and engaging.', 6, 'Compliment', 'Room for Improvement', 436, 90),
(49, '2023-12-20', 'The speakers were knowledgeable and engaging.', 4, 'Compliment', 'Success', 286, 43),
(50, '2023-09-10', 'The event was well-organized and enjoyable.', 0, 'Suggestion', 'Success', 40, 128),
(51, '2024-02-19', 'vjisddjcinfccdfcvsjkdfmcsd', 10, 'Complement', 'Success', 1, 2),
(52, '2024-02-19', 'fvnisdmcdnifcsc', 9, 'Complement', 'Success', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `plan_event`
--

CREATE TABLE `plan_event` (
  `Plan_EventID` int(10) NOT NULL,
  `PartnerID` int(10) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `Submitted_Date` date DEFAULT NULL,
  `Status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plan_event`
--

INSERT INTO `plan_event` (`Plan_EventID`, `PartnerID`, `Title`, `Description`, `Submitted_Date`, `Status`) VALUES
(1, 134, 'Wildlife Conservation Conference', 'risus a ultricies gravida', '2023-06-03', 'Pending'),
(2, 45, 'Bird Watching Excursion', 'non ultrices tellus nunc at velit.', '2023-12-14', 'Accepted'),
(3, 116, 'Bird Watching Excursion', 'non ultrices tellus nunc at velit.', '2023-06-23', 'Pending'),
(4, 89, 'Environmental Cleanup Day', 'sem neque lacinia enim', '2024-01-01', 'Rejected'),
(5, 143, 'Ocean Cleanup Campaign', 'risus a ultricies gravida', '2023-08-31', 'Accepted'),
(6, 109, 'Ocean Cleanup Campaign', 'Aliquam erat volutpat. Sed euismod', '2023-04-02', 'Pending'),
(7, 179, 'Bird Watching Excursion', 'Aliquam erat volutpat. Sed euismod', '2023-05-17', 'Pending'),
(8, 144, 'Ocean Cleanup Campaign', 'risus a ultricies gravida', '2023-12-02', 'Pending'),
(9, 50, 'Bird Watching Excursion', 'sem neque lacinia enim', '2023-12-13', 'Rejected'),
(10, 150, 'Ocean Cleanup Campaign', 'Lorem ipsum dolor sit amet', '2023-07-24', 'Rejected'),
(11, 195, 'Environmental Cleanup Day', 'risus a ultricies gravida', '2023-11-13', 'Accepted'),
(12, 98, 'Ocean Cleanup Campaign', 'risus a ultricies gravida', '2024-01-02', 'Rejected'),
(13, 71, 'Bird Watching Excursion', 'risus a ultricies gravida', '2023-03-22', 'Pending'),
(14, 110, 'Bird Watching Excursion', 'lacinia nunc id', '2024-01-30', 'Rejected'),
(15, 126, 'Tree Planting Event', 'non ultrices tellus nunc at velit.', '2023-05-27', 'Rejected'),
(16, 122, 'Bird Watching Excursion', 'a tincidunt enim. Sed euismod', '2023-04-10', 'Rejected'),
(17, 99, 'Wildlife Conservation Conference', 'Nulla facilisi. Sed euismod', '2023-04-15', 'Pending'),
(18, 166, 'Tree Planting Event', 'Etiam ac semper nunc', '2023-09-04', 'Rejected'),
(19, 190, 'Wildlife Conservation Conference', 'risus a ultricies gravida', '2023-02-23', 'Rejected'),
(20, 106, 'Tree Planting Event', 'risus a ultricies gravida', '2023-04-09', 'Rejected'),
(21, 59, 'Wildlife Conservation Conference', 'risus a ultricies gravida', '2023-11-09', 'Rejected'),
(22, 149, 'Ocean Cleanup Campaign', 'Sed ac enim auctor', '2023-07-25', 'Pending'),
(23, 34, 'Bird Watching Excursion', 'Vivamus in metus a nunc lacinia pharetra. Sed euismod', '2024-01-14', 'Rejected'),
(24, 186, 'Bird Watching Excursion', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras id mauris nec mauris cursus ultrices.', '2023-08-11', 'Pending'),
(25, 17, 'Bird Watching Excursion', 'a tincidunt enim. Sed euismod', '2023-07-08', 'Pending'),
(26, 103, 'Wildlife Conservation Conference', 'non ultrices tellus nunc at velit.', '2023-05-19', 'Pending'),
(27, 145, 'Wildlife Conservation Conference', 'sem neque lacinia enim', '2023-09-24', 'Accepted'),
(28, 197, 'Ocean Cleanup Campaign', 'sem neque lacinia enim', '2023-02-27', 'Accepted'),
(29, 76, 'Tree Planting Event', 'Fusce in mi vel libero interdum lacinia. Sed euismod', '2023-03-22', 'Pending'),
(30, 76, 'Wildlife Conservation Conference', 'non ultrices tellus nunc at velit.', '2023-12-27', 'Pending'),
(31, 152, 'Wildlife Conservation Conference', 'Aliquam erat volutpat. Sed euismod', '2023-12-29', 'Pending'),
(32, 12, 'Environmental Cleanup Day', 'sem neque lacinia enim', '2023-12-07', 'Pending'),
(33, 139, 'Environmental Cleanup Day', 'Lorem ipsum dolor sit amet', '2023-04-07', 'Pending'),
(34, 90, 'Ocean Cleanup Campaign', 'Aliquam erat volutpat. Sed euismod', '2023-05-12', 'Pending'),
(35, 62, 'Tree Planting Event', 'non ultrices tellus nunc at velit.', '2023-06-28', 'Rejected'),
(36, 49, 'Wildlife Conservation Conference', 'congue ligula.', '2023-06-09', 'Pending'),
(37, 178, 'Wildlife Conservation Conference', 'Sed ac enim auctor', '2023-11-19', 'Pending'),
(38, 124, 'Ocean Cleanup Campaign', 'Aliquam erat volutpat. Sed euismod', '2023-07-09', 'Accepted'),
(39, 23, 'Bird Watching Excursion', 'consectetur adipiscing elit.', '2023-10-12', 'Pending'),
(40, 54, 'Environmental Cleanup Day', 'risus a ultricies gravida', '2023-09-26', 'Rejected'),
(41, 108, 'Tree Planting Event', 'risus a ultricies gravida', '2023-08-12', 'Rejected'),
(42, 163, 'Bird Watching Excursion', 'non ultrices tellus nunc at velit.', '2023-12-26', 'Accepted'),
(43, 129, 'Tree Planting Event', 'non ultrices tellus nunc at velit.', '2023-09-22', 'Pending'),
(44, 109, 'Tree Planting Event', 'risus a ultricies gravida', '2023-09-29', 'Pending'),
(45, 113, 'Environmental Cleanup Day', 'non ultrices tellus nunc at velit.', '2023-02-28', 'Pending'),
(46, 116, 'Tree Planting Event', 'sem neque lacinia enim', '2024-01-17', 'Accepted'),
(47, 132, 'Environmental Cleanup Day', 'Etiam ac semper nunc', '2023-09-19', 'Pending'),
(48, 195, 'Ocean Cleanup Campaign', 'non ultrices tellus nunc at velit.', '2023-02-18', 'Pending'),
(49, 162, 'Tree Planting Event', 'non ultrices tellus nunc at velit.', '2023-03-27', 'Rejected'),
(50, 154, 'Bird Watching Excursion', 'non ultrices tellus nunc at velit.', '2023-04-09', 'Pending'),
(51, 187, 'Wildlife Conservation Conference', 'Lorem ipsum dolor sit amet', '2023-08-07', 'Rejected'),
(52, 101, 'Ocean Cleanup Campaign', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2023-02-27', 'Rejected'),
(53, 102, 'Bird Watching Excursion', 'risus a ultricies gravida', '2024-01-11', 'Pending'),
(54, 156, 'Wildlife Conservation Conference', 'risus a ultricies gravida', '2023-08-17', 'Accepted'),
(55, 58, 'Environmental Cleanup Day', 'sem neque lacinia enim', '2023-03-28', 'Pending'),
(56, 166, 'Tree Planting Event', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2024-02-02', 'Rejected'),
(57, 48, 'Ocean Cleanup Campaign', 'Lorem ipsum dolor sit amet', '2023-05-20', 'Rejected'),
(58, 98, 'Wildlife Conservation Conference', 'Aliquam erat volutpat. Sed euismod', '2024-01-09', 'Accepted'),
(59, 3, 'Ocean Cleanup Campaign', 'risus a ultricies gravida', '2023-07-12', 'Accepted'),
(60, 176, 'Ocean Cleanup Campaign', 'non ultrices tellus nunc at velit.', '2024-02-03', 'Accepted'),
(61, 15, 'Environmental Cleanup Day', 'sem neque lacinia enim', '2023-09-18', 'Rejected'),
(62, 45, 'Bird Watching Excursion', 'Vivamus in metus a nunc lacinia pharetra. Sed euismod', '2023-10-09', 'Accepted'),
(63, 27, 'Wildlife Conservation Conference', 'risus a ultricies gravida', '2023-06-17', 'Accepted'),
(64, 25, 'Wildlife Conservation Conference', 'risus a ultricies gravida', '2023-06-01', 'Accepted'),
(65, 117, 'Tree Planting Event', 'Lorem ipsum dolor sit amet', '2023-07-20', 'Pending'),
(66, 181, 'Bird Watching Excursion', 'Nulla facilisi. Sed euismod', '2023-07-02', 'Accepted'),
(67, 101, 'Ocean Cleanup Campaign', 'Nulla facilisi. Sed euismod', '2023-09-21', 'Rejected'),
(68, 79, 'Wildlife Conservation Conference', 'sem neque lacinia enim', '2023-08-29', 'Rejected'),
(69, 38, 'Bird Watching Excursion', 'sem neque lacinia enim', '2023-07-30', 'Rejected'),
(70, 86, 'Bird Watching Excursion', 'Etiam ac semper nunc', '2023-12-21', 'Pending'),
(71, 139, 'Ocean Cleanup Campaign', 'risus a ultricies gravida', '2023-10-18', 'Rejected'),
(72, 180, 'Bird Watching Excursion', 'congue ligula.', '2023-07-15', 'Pending'),
(73, 36, 'Ocean Cleanup Campaign', 'non ultrices tellus nunc at velit.', '2023-09-16', 'Accepted'),
(74, 135, 'Bird Watching Excursion', 'Fusce in mi vel libero interdum lacinia. Sed euismod', '2023-11-02', 'Pending'),
(75, 130, 'Environmental Cleanup Day', 'Lorem ipsum dolor sit amet', '2023-04-01', 'Accepted'),
(76, 40, 'Tree Planting Event', 'non ultrices tellus nunc at velit.', '2023-10-11', 'Rejected'),
(77, 132, 'Environmental Cleanup Day', 'congue ligula.', '2023-11-07', 'Pending'),
(78, 111, 'Wildlife Conservation Conference', 'Vivamus in metus a nunc lacinia pharetra. Sed euismod', '2023-10-27', 'Rejected'),
(79, 56, 'Tree Planting Event', 'lacinia nunc id', '2023-06-02', 'Accepted'),
(80, 97, 'Bird Watching Excursion', 'consectetur adipiscing elit.', '2024-02-01', 'Pending'),
(81, 15, 'Environmental Cleanup Day', 'risus a ultricies gravida', '2023-02-27', 'Rejected'),
(82, 108, 'Wildlife Conservation Conference', 'sem neque lacinia enim', '2024-01-10', 'Pending'),
(83, 132, 'Environmental Cleanup Day', 'sem neque lacinia enim', '2023-05-02', 'Accepted'),
(84, 112, 'Ocean Cleanup Campaign', 'Fusce in mi vel libero interdum lacinia. Sed euismod', '2023-06-18', 'Pending'),
(85, 32, 'Wildlife Conservation Conference', 'non ultrices tellus nunc at velit.', '2023-04-13', 'Rejected'),
(86, 88, 'Wildlife Conservation Conference', 'risus a ultricies gravida', '2023-02-13', 'Accepted'),
(87, 49, 'Environmental Cleanup Day', 'Vivamus in metus a nunc lacinia pharetra. Sed euismod', '2023-08-02', 'Accepted'),
(88, 110, 'Tree Planting Event', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras id mauris nec mauris cursus ultrices.', '2023-04-10', 'Rejected'),
(89, 148, 'Ocean Cleanup Campaign', 'risus a ultricies gravida', '2023-12-06', 'Pending'),
(90, 117, 'Wildlife Conservation Conference', 'Aliquam erat volutpat. Sed euismod', '2023-06-07', 'Pending'),
(91, 135, 'Tree Planting Event', 'Vivamus in metus a nunc lacinia pharetra. Sed euismod', '2023-11-15', 'Accepted'),
(92, 78, 'Wildlife Conservation Conference', 'sem neque lacinia enim', '2023-05-15', 'Rejected'),
(93, 164, 'Bird Watching Excursion', 'sem neque lacinia enim', '2023-08-21', 'Rejected'),
(94, 105, 'Bird Watching Excursion', 'risus a ultricies gravida', '2023-11-27', 'Rejected'),
(95, 115, 'Bird Watching Excursion', 'non ultrices tellus nunc at velit.', '2023-08-04', 'Pending'),
(96, 14, 'Ocean Cleanup Campaign', 'sem neque lacinia enim', '2023-07-21', 'Accepted'),
(97, 29, 'Tree Planting Event', 'a tincidunt enim. Sed euismod', '2024-02-05', 'Pending'),
(98, 133, 'Wildlife Conservation Conference', 'consectetur adipiscing elit.', '2023-08-23', 'Rejected'),
(99, 14, 'Wildlife Conservation Conference', 'risus a ultricies gravida', '2023-12-20', 'Accepted'),
(100, 172, 'Environmental Cleanup Day', 'Aliquam erat volutpat. Sed euismod', '2023-03-13', 'Accepted'),
(101, 186, 'Tree Planting Event', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2023-07-02', 'Pending'),
(102, 85, 'Wildlife Conservation Conference', 'sem neque lacinia enim', '2023-04-05', 'Rejected'),
(103, 171, 'Ocean Cleanup Campaign', 'sem neque lacinia enim', '2023-10-13', 'Pending'),
(104, 50, 'Wildlife Conservation Conference', 'sem neque lacinia enim', '2023-11-18', 'Accepted'),
(105, 159, 'Ocean Cleanup Campaign', 'non ultrices tellus nunc at velit.', '2023-08-22', 'Rejected'),
(106, 89, 'Ocean Cleanup Campaign', 'risus a ultricies gravida', '2023-02-09', 'Pending'),
(107, 50, 'Tree Planting Event', 'sem neque lacinia enim', '2023-06-25', 'Pending'),
(108, 12, 'Wildlife Conservation Conference', 'Lorem ipsum dolor sit amet', '2023-10-07', 'Accepted'),
(109, 60, 'Environmental Cleanup Day', 'risus a ultricies gravida', '2024-01-05', 'Rejected'),
(110, 136, 'Bird Watching Excursion', 'risus a ultricies gravida', '2023-04-01', 'Rejected'),
(111, 24, 'Bird Watching Excursion', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2023-12-22', 'Rejected'),
(112, 118, 'Ocean Cleanup Campaign', 'non ultrices tellus nunc at velit.', '2023-05-14', 'Rejected'),
(113, 89, 'Bird Watching Excursion', 'non ultrices tellus nunc at velit.', '2023-10-28', 'Rejected'),
(114, 32, 'Tree Planting Event', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras id mauris nec mauris cursus ultrices.', '2023-10-16', 'Pending'),
(115, 120, 'Ocean Cleanup Campaign', 'sem neque lacinia enim', '2023-10-11', 'Pending'),
(116, 10, 'Bird Watching Excursion', 'Vivamus in metus a nunc lacinia pharetra. Sed euismod', '2023-03-31', 'Accepted'),
(117, 19, 'Ocean Cleanup Campaign', 'Lorem ipsum dolor sit amet', '2023-12-26', 'Accepted'),
(118, 117, 'Wildlife Conservation Conference', 'Lorem ipsum dolor sit amet', '2023-03-10', 'Rejected'),
(119, 82, 'Ocean Cleanup Campaign', 'sem neque lacinia enim', '2023-08-14', 'Pending'),
(120, 122, 'Environmental Cleanup Day', 'non ultrices tellus nunc at velit.', '2023-06-23', 'Accepted'),
(121, 55, 'Wildlife Conservation Conference', 'sem neque lacinia enim', '2023-07-07', 'Pending'),
(122, 168, 'Environmental Cleanup Day', 'Sed ac enim auctor', '2023-08-01', 'Pending'),
(123, 149, 'Tree Planting Event', 'risus a ultricies gravida', '2023-08-09', 'Rejected'),
(124, 1, 'Ocean Cleanup Campaign', 'non ultrices tellus nunc at velit.', '2023-05-02', 'Pending'),
(125, 81, 'Wildlife Conservation Conference', 'non ultrices tellus nunc at velit.', '2023-04-21', 'Pending'),
(126, 32, 'Wildlife Conservation Conference', 'non ultrices tellus nunc at velit.', '2023-04-07', 'Accepted'),
(127, 6, 'Ocean Cleanup Campaign', 'sem neque lacinia enim', '2023-03-10', 'Rejected'),
(128, 49, 'Bird Watching Excursion', 'non ultrices tellus nunc at velit.', '2023-02-08', 'Accepted'),
(129, 123, 'Environmental Cleanup Day', 'Etiam ac semper nunc', '2023-07-28', 'Pending'),
(130, 59, 'Bird Watching Excursion', 'risus a ultricies gravida', '2024-01-05', 'Accepted'),
(131, 86, 'Tree Planting Event', 'risus a ultricies gravida', '2023-11-06', 'Rejected'),
(132, 184, 'Tree Planting Event', 'risus a ultricies gravida', '2023-11-22', 'Rejected'),
(133, 143, 'Environmental Cleanup Day', 'lacinia nunc id', '2023-03-14', 'Rejected'),
(134, 13, 'Environmental Cleanup Day', 'congue ligula.', '2023-10-14', 'Pending'),
(135, 197, 'Wildlife Conservation Conference', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2023-08-01', 'Accepted'),
(136, 52, 'Environmental Cleanup Day', 'non ultrices tellus nunc at velit.', '2024-01-19', 'Pending'),
(137, 129, 'Wildlife Conservation Conference', 'sem neque lacinia enim', '2023-07-01', 'Accepted'),
(138, 170, 'Wildlife Conservation Conference', 'Vivamus in metus a nunc lacinia pharetra. Sed euismod', '2023-06-10', 'Pending'),
(139, 4, 'Ocean Cleanup Campaign', 'Sed ac enim auctor', '2023-07-24', 'Pending'),
(140, 193, 'Bird Watching Excursion', 'risus a ultricies gravida', '2023-08-11', 'Accepted'),
(141, 52, 'Wildlife Conservation Conference', 'risus a ultricies gravida', '2023-02-08', 'Pending'),
(142, 161, 'Environmental Cleanup Day', 'non ultrices tellus nunc at velit.', '2023-02-17', 'Accepted'),
(143, 121, 'Bird Watching Excursion', 'a tincidunt enim. Sed euismod', '2023-10-30', 'Accepted'),
(144, 154, 'Wildlife Conservation Conference', 'sem neque lacinia enim', '2023-05-16', 'Accepted'),
(145, 33, 'Wildlife Conservation Conference', 'congue ligula.', '2023-09-19', 'Pending'),
(146, 12, 'Environmental Cleanup Day', 'Etiam ac semper nunc', '2023-04-14', 'Rejected'),
(147, 169, 'Tree Planting Event', 'sem neque lacinia enim', '2023-12-02', 'Accepted'),
(148, 43, 'Ocean Cleanup Campaign', 'non ultrices tellus nunc at velit.', '2023-10-28', 'Rejected'),
(149, 122, 'Environmental Cleanup Day', 'Fusce in mi vel libero interdum lacinia. Sed euismod', '2023-02-25', 'Pending'),
(150, 60, 'Environmental Cleanup Day', 'Vivamus in metus a nunc lacinia pharetra. Sed euismod', '2023-04-16', 'Pending'),
(151, 150, 'Wildlife Conservation Conference', 'non ultrices tellus nunc at velit.', '2023-11-28', 'Rejected'),
(152, 126, 'Bird Watching Excursion', 'non ultrices tellus nunc at velit.', '2023-04-20', 'Rejected'),
(153, 165, 'Ocean Cleanup Campaign', 'non ultrices tellus nunc at velit.', '2023-10-12', 'Pending'),
(154, 191, 'Wildlife Conservation Conference', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2023-02-25', 'Pending'),
(155, 169, 'Wildlife Conservation Conference', 'sem neque lacinia enim', '2023-07-28', 'Rejected'),
(156, 6, 'Ocean Cleanup Campaign', 'non ultrices tellus nunc at velit.', '2024-01-10', 'Accepted'),
(157, 130, 'Bird Watching Excursion', 'sem neque lacinia enim', '2023-08-18', 'Pending'),
(158, 42, 'Environmental Cleanup Day', 'non ultrices tellus nunc at velit.', '2023-08-05', 'Pending'),
(159, 143, 'Tree Planting Event', 'risus a ultricies gravida', '2023-04-22', 'Pending'),
(160, 140, 'Ocean Cleanup Campaign', 'non ultrices tellus nunc at velit.', '2023-11-24', 'Pending'),
(161, 198, 'Ocean Cleanup Campaign', 'non ultrices tellus nunc at velit.', '2023-06-08', 'Pending'),
(162, 120, 'Environmental Cleanup Day', 'risus a ultricies gravida', '2023-05-04', 'Pending'),
(163, 14, 'Tree Planting Event', 'Etiam ac semper nunc', '2023-07-25', 'Accepted'),
(164, 7, 'Tree Planting Event', 'Fusce in mi vel libero interdum lacinia. Sed euismod', '2023-07-18', 'Pending'),
(165, 66, 'Tree Planting Event', 'lacinia nunc id', '2024-01-18', 'Accepted'),
(166, 152, 'Wildlife Conservation Conference', 'lacinia nunc id', '2024-02-04', 'Rejected'),
(167, 77, 'Bird Watching Excursion', 'non ultrices tellus nunc at velit.', '2023-04-22', 'Rejected'),
(168, 62, 'Wildlife Conservation Conference', 'sem neque lacinia enim', '2023-03-29', 'Accepted'),
(169, 179, 'Wildlife Conservation Conference', 'lacinia nunc id', '2023-03-18', 'Rejected'),
(170, 174, 'Environmental Cleanup Day', 'Fusce in mi vel libero interdum lacinia. Sed euismod', '2023-09-21', 'Pending'),
(171, 158, 'Ocean Cleanup Campaign', 'risus a ultricies gravida', '2023-08-28', 'Pending'),
(172, 65, 'Ocean Cleanup Campaign', 'sem neque lacinia enim', '2023-07-27', 'Pending'),
(173, 97, 'Wildlife Conservation Conference', 'non ultrices tellus nunc at velit.', '2023-08-02', 'Accepted'),
(174, 120, 'Ocean Cleanup Campaign', 'Etiam ac semper nunc', '2023-03-22', 'Accepted'),
(175, 9, 'Ocean Cleanup Campaign', 'sem neque lacinia enim', '2024-01-30', 'Rejected'),
(176, 70, 'Tree Planting Event', 'Donec euismod', '2023-03-23', 'Pending'),
(177, 67, 'Ocean Cleanup Campaign', 'sem neque lacinia enim', '2023-05-19', 'Accepted'),
(178, 14, 'Tree Planting Event', 'consectetur adipiscing elit.', '2023-09-07', 'Accepted'),
(179, 11, 'Tree Planting Event', 'congue ligula.', '2023-10-22', 'Rejected'),
(180, 85, 'Tree Planting Event', 'non ultrices tellus nunc at velit.', '2024-01-07', 'Accepted'),
(181, 168, 'Tree Planting Event', 'non ultrices tellus nunc at velit.', '2023-08-27', 'Pending'),
(182, 46, 'Ocean Cleanup Campaign', 'lacinia nunc id', '2023-12-25', 'Accepted'),
(183, 189, 'Environmental Cleanup Day', 'risus a ultricies gravida', '2023-06-09', 'Accepted'),
(184, 150, 'Environmental Cleanup Day', 'risus a ultricies gravida', '2023-03-09', 'Pending'),
(185, 138, 'Bird Watching Excursion', 'Etiam ac semper nunc', '2023-12-30', 'Accepted'),
(186, 24, 'Bird Watching Excursion', 'Aliquam erat volutpat. Sed euismod', '2023-07-12', 'Rejected'),
(187, 39, 'Bird Watching Excursion', 'sem neque lacinia enim', '2023-11-06', 'Accepted'),
(188, 62, 'Bird Watching Excursion', 'non ultrices tellus nunc at velit.', '2023-03-11', 'Rejected'),
(189, 165, 'Ocean Cleanup Campaign', 'risus a ultricies gravida', '2023-03-09', 'Accepted'),
(190, 6, 'Tree Planting Event', 'risus a ultricies gravida', '2023-10-21', 'Pending'),
(191, 3, 'Bird Watching Excursion', 'risus a ultricies gravida', '2023-05-21', 'Pending'),
(192, 63, 'Environmental Cleanup Day', 'risus a ultricies gravida', '2023-06-01', 'Rejected'),
(193, 50, 'Wildlife Conservation Conference', 'consectetur adipiscing elit.', '2023-07-11', 'Pending'),
(194, 153, 'Environmental Cleanup Day', 'non ultrices tellus nunc at velit.', '2024-01-13', 'Accepted'),
(195, 82, 'Environmental Cleanup Day', 'Fusce in mi vel libero interdum lacinia. Sed euismod', '2023-03-03', 'Accepted'),
(196, 14, 'Tree Planting Event', 'non ultrices tellus nunc at velit.', '2024-01-22', 'Pending'),
(197, 186, 'Environmental Cleanup Day', 'non ultrices tellus nunc at velit.', '2024-01-09', 'Rejected'),
(198, 125, 'Environmental Cleanup Day', 'sem neque lacinia enim', '2023-11-12', 'Pending'),
(199, 57, 'Tree Planting Event', 'non ultrices tellus nunc at velit.', '2023-03-12', 'Pending'),
(200, 139, 'Tree Planting Event', 'lacinia nunc id', '2023-04-27', 'Rejected'),
(201, 157, 'Bird Watching Excursion', 'lacinia nunc id', '2023-12-07', 'Pending'),
(202, 156, 'Wildlife Conservation Conference', 'Lorem ipsum dolor sit amet', '2023-06-26', 'Accepted'),
(203, 13, 'Wildlife Conservation Conference', 'sem neque lacinia enim', '2023-03-16', 'Accepted'),
(204, 12, 'Ocean Cleanup Campaign', 'Nulla facilisi. Sed euismod', '2023-04-04', 'Accepted'),
(205, 72, 'Environmental Cleanup Day', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2023-06-03', 'Accepted'),
(206, 151, 'Environmental Cleanup Day', 'Vivamus in metus a nunc lacinia pharetra. Sed euismod', '2023-11-10', 'Pending'),
(207, 29, 'Tree Planting Event', 'non ultrices tellus nunc at velit.', '2023-07-30', 'Pending'),
(208, 159, 'Bird Watching Excursion', 'risus a ultricies gravida', '2023-06-26', 'Rejected'),
(209, 1, 'Tree Planting Event', 'a tincidunt enim. Sed euismod', '2023-06-17', 'Accepted'),
(210, 81, 'Environmental Cleanup Day', 'risus a ultricies gravida', '2023-02-26', 'Accepted'),
(211, 61, 'Wildlife Conservation Conference', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras id mauris nec mauris cursus ultrices.', '2023-12-14', 'Pending'),
(212, 35, 'Ocean Cleanup Campaign', 'congue ligula.', '2024-01-02', 'Pending'),
(213, 141, 'Bird Watching Excursion', 'risus a ultricies gravida', '2023-09-26', 'Pending'),
(214, 3, 'Environmental Cleanup Day', 'sem neque lacinia enim', '2024-01-07', 'Rejected'),
(215, 160, 'Tree Planting Event', 'Vivamus in metus a nunc lacinia pharetra. Sed euismod', '2024-01-12', 'Rejected'),
(216, 112, 'Wildlife Conservation Conference', 'sem neque lacinia enim', '2023-03-16', 'Accepted'),
(217, 150, 'Wildlife Conservation Conference', 'Lorem ipsum dolor sit amet', '2023-07-06', 'Pending'),
(218, 24, 'Tree Planting Event', 'non ultrices tellus nunc at velit.', '2023-11-20', 'Accepted'),
(219, 174, 'Tree Planting Event', 'risus a ultricies gravida', '2024-01-09', 'Accepted'),
(220, 146, 'Wildlife Conservation Conference', 'risus a ultricies gravida', '2023-10-07', 'Rejected'),
(221, 62, 'Wildlife Conservation Conference', 'consectetur adipiscing elit.', '2023-03-27', 'Rejected'),
(222, 49, 'Wildlife Conservation Conference', 'Lorem ipsum dolor sit amet', '2023-12-23', 'Rejected'),
(223, 165, 'Tree Planting Event', 'non ultrices tellus nunc at velit.', '2023-05-10', 'Pending'),
(224, 57, 'Ocean Cleanup Campaign', 'sem neque lacinia enim', '2023-12-11', 'Accepted'),
(225, 138, 'Wildlife Conservation Conference', 'Aliquam erat volutpat. Sed euismod', '2023-02-26', 'Rejected'),
(226, 16, 'Ocean Cleanup Campaign', 'sem neque lacinia enim', '2023-09-09', 'Rejected'),
(227, 21, 'Bird Watching Excursion', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2023-04-09', 'Pending'),
(228, 41, 'Environmental Cleanup Day', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras id mauris nec mauris cursus ultrices.', '2024-01-12', 'Rejected'),
(229, 48, 'Ocean Cleanup Campaign', 'non ultrices tellus nunc at velit.', '2024-01-27', 'Pending'),
(230, 141, 'Wildlife Conservation Conference', 'non ultrices tellus nunc at velit.', '2024-01-14', 'Rejected'),
(231, 8, 'Wildlife Conservation Conference', 'Sed ac enim auctor', '2023-12-01', 'Accepted'),
(232, 144, 'Environmental Cleanup Day', 'Aliquam erat volutpat. Sed euismod', '2023-09-23', 'Pending'),
(233, 80, 'Ocean Cleanup Campaign', 'lacinia nunc id', '2023-09-22', 'Rejected'),
(234, 200, 'Bird Watching Excursion', 'risus a ultricies gravida', '2023-05-17', 'Pending'),
(235, 1, 'Tree Planting Event', 'sem neque lacinia enim', '2023-03-24', 'Accepted'),
(236, 79, 'Bird Watching Excursion', 'non ultrices tellus nunc at velit.', '2023-03-18', 'Rejected'),
(237, 179, 'Environmental Cleanup Day', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras id mauris nec mauris cursus ultrices.', '2023-02-13', 'Accepted'),
(238, 82, 'Wildlife Conservation Conference', 'congue ligula.', '2023-10-10', 'Rejected'),
(239, 138, 'Wildlife Conservation Conference', 'non ultrices tellus nunc at velit.', '2023-07-10', 'Accepted'),
(240, 54, 'Bird Watching Excursion', 'non ultrices tellus nunc at velit.', '2024-02-06', 'Rejected'),
(241, 103, 'Wildlife Conservation Conference', 'sem neque lacinia enim', '2023-09-09', 'Accepted'),
(242, 197, 'Environmental Cleanup Day', 'a tincidunt enim. Sed euismod', '2024-01-06', 'Accepted'),
(243, 52, 'Tree Planting Event', 'sem neque lacinia enim', '2023-02-21', 'Pending'),
(244, 135, 'Tree Planting Event', 'non ultrices tellus nunc at velit.', '2023-12-18', 'Accepted'),
(245, 77, 'Environmental Cleanup Day', 'risus a ultricies gravida', '2023-06-15', 'Pending'),
(246, 154, 'Bird Watching Excursion', 'sem neque lacinia enim', '2023-11-07', 'Rejected'),
(247, 87, 'Ocean Cleanup Campaign', 'risus a ultricies gravida', '2024-01-26', 'Pending'),
(248, 116, 'Tree Planting Event', 'Aliquam erat volutpat. Sed euismod', '2023-10-27', 'Accepted'),
(249, 77, 'Ocean Cleanup Campaign', 'risus a ultricies gravida', '2024-01-07', 'Pending'),
(250, 151, 'Bird Watching Excursion', 'sem neque lacinia enim', '2023-03-27', 'Accepted'),
(251, 75, 'Bird Watching Excursion', 'congue ligula.', '2023-03-16', 'Accepted'),
(252, 141, 'Environmental Cleanup Day', 'sem neque lacinia enim', '2023-07-10', 'Accepted'),
(253, 136, 'Ocean Cleanup Campaign', 'non ultrices tellus nunc at velit.', '2023-12-17', 'Accepted'),
(254, 170, 'Ocean Cleanup Campaign', 'congue ligula.', '2023-03-08', 'Accepted'),
(255, 197, 'Bird Watching Excursion', 'non ultrices tellus nunc at velit.', '2023-11-18', 'Pending'),
(256, 101, 'Environmental Cleanup Day', 'sem neque lacinia enim', '2023-04-07', 'Pending'),
(257, 111, 'Environmental Cleanup Day', 'a tincidunt enim. Sed euismod', '2023-02-27', 'Accepted'),
(258, 47, 'Ocean Cleanup Campaign', 'risus a ultricies gravida', '2023-09-02', 'Accepted'),
(259, 117, 'Ocean Cleanup Campaign', 'non ultrices tellus nunc at velit.', '2023-12-04', 'Rejected'),
(260, 149, 'Bird Watching Excursion', 'sem neque lacinia enim', '2023-05-09', 'Pending'),
(261, 17, 'Ocean Cleanup Campaign', 'Sed ac enim auctor', '2023-11-08', 'Accepted'),
(262, 28, 'Tree Planting Event', 'risus a ultricies gravida', '2023-02-20', 'Rejected'),
(263, 20, 'Tree Planting Event', 'Lorem ipsum dolor sit amet', '2023-11-01', 'Pending'),
(264, 143, 'Environmental Cleanup Day', 'sem neque lacinia enim', '2023-12-18', 'Accepted'),
(265, 36, 'Environmental Cleanup Day', 'Donec euismod', '2023-11-02', 'Pending'),
(266, 16, 'Tree Planting Event', 'sem neque lacinia enim', '2023-03-04', 'Rejected'),
(267, 30, 'Tree Planting Event', 'Aliquam erat volutpat. Sed euismod', '2023-11-14', 'Pending'),
(268, 23, 'Environmental Cleanup Day', 'Etiam ac semper nunc', '2023-04-28', 'Rejected'),
(269, 173, 'Wildlife Conservation Conference', 'risus a ultricies gravida', '2023-08-05', 'Pending'),
(270, 156, 'Environmental Cleanup Day', 'non ultrices tellus nunc at velit.', '2023-03-07', 'Pending'),
(271, 132, 'Ocean Cleanup Campaign', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2023-02-14', 'Rejected'),
(272, 100, 'Bird Watching Excursion', 'risus a ultricies gravida', '2023-10-28', 'Rejected'),
(273, 70, 'Bird Watching Excursion', 'risus a ultricies gravida', '2023-08-18', 'Accepted'),
(274, 7, 'Environmental Cleanup Day', 'risus a ultricies gravida', '2023-11-01', 'Pending'),
(275, 116, 'Wildlife Conservation Conference', 'non ultrices tellus nunc at velit.', '2023-05-27', 'Pending'),
(276, 107, 'Wildlife Conservation Conference', 'Donec euismod', '2023-09-12', 'Accepted'),
(277, 95, 'Tree Planting Event', 'sem neque lacinia enim', '2023-02-21', 'Accepted'),
(278, 174, 'Wildlife Conservation Conference', 'non ultrices tellus nunc at velit.', '2023-04-10', 'Rejected'),
(279, 88, 'Wildlife Conservation Conference', 'lacinia nunc id', '2023-10-21', 'Accepted'),
(280, 81, 'Ocean Cleanup Campaign', 'consectetur adipiscing elit.', '2023-08-28', 'Rejected'),
(281, 156, 'Environmental Cleanup Day', 'Etiam ac semper nunc', '2023-02-12', 'Pending'),
(282, 22, 'Bird Watching Excursion', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras id mauris nec mauris cursus ultrices.', '2023-05-24', 'Pending'),
(283, 99, 'Wildlife Conservation Conference', 'Aliquam erat volutpat. Sed euismod', '2023-05-21', 'Pending'),
(284, 124, 'Bird Watching Excursion', 'Donec euismod', '2023-10-15', 'Pending'),
(285, 76, 'Wildlife Conservation Conference', 'sem neque lacinia enim', '2023-07-07', 'Accepted'),
(286, 7, 'Ocean Cleanup Campaign', 'lacinia nunc id', '2023-08-31', 'Accepted'),
(287, 161, 'Environmental Cleanup Day', 'non ultrices tellus nunc at velit.', '2023-05-23', 'Pending'),
(288, 126, 'Tree Planting Event', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2023-04-09', 'Pending'),
(289, 169, 'Wildlife Conservation Conference', 'risus a ultricies gravida', '2023-10-30', 'Accepted'),
(290, 43, 'Tree Planting Event', 'Sed ac enim auctor', '2023-06-30', 'Rejected'),
(291, 13, 'Bird Watching Excursion', 'a tincidunt enim. Sed euismod', '2023-03-09', 'Pending'),
(292, 38, 'Tree Planting Event', 'consectetur adipiscing elit.', '2023-12-12', 'Pending'),
(293, 91, 'Bird Watching Excursion', 'Nulla facilisi. Sed euismod', '2023-10-09', 'Accepted'),
(294, 193, 'Bird Watching Excursion', 'Sed ac enim auctor', '2023-07-11', 'Rejected'),
(295, 109, 'Environmental Cleanup Day', 'Fusce in mi vel libero interdum lacinia. Sed euismod', '2023-06-01', 'Accepted'),
(296, 24, 'Wildlife Conservation Conference', 'a tincidunt enim. Sed euismod', '2023-03-13', 'Pending'),
(297, 47, 'Environmental Cleanup Day', 'a tincidunt enim. Sed euismod', '2023-10-13', 'Accepted'),
(298, 199, 'Tree Planting Event', 'non ultrices tellus nunc at velit.', '2023-11-20', 'Pending'),
(299, 103, 'Bird Watching Excursion', 'risus a ultricies gravida', '2023-02-21', 'Pending'),
(300, 23, 'Wildlife Conservation Conference', 'risus a ultricies gravida', '2023-08-29', 'Rejected'),
(309, 1, 'klmvldfkmg', 'dlkfmsldkfm', '2024-02-08', 'Pending'),
(310, 1, 'klmvldfkmg', 'dlkfmsldkfm', '2024-02-08', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `play`
--

CREATE TABLE `play` (
  `Play_SessionID` int(10) NOT NULL,
  `Result` int(11) DEFAULT NULL,
  `AnsweredDate` datetime(6) NOT NULL,
  `MemberID` int(10) DEFAULT NULL,
  `QuizID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `play`
--

INSERT INTO `play` (`Play_SessionID`, `Result`, `AnsweredDate`, `MemberID`, `QuizID`) VALUES
(1, 0, '2024-02-10 11:47:10.000000', 1, 2),
(2, 2, '2024-02-10 11:47:46.000000', 1, 2),
(3, 3, '2024-02-10 11:49:08.000000', 1, 2),
(4, 2, '2024-02-10 11:49:13.000000', 1, 2),
(5, 1, '2024-02-10 11:52:04.000000', 1, 1),
(6, 1, '2024-02-10 11:53:40.000000', 1, 1),
(7, 1, '2024-02-13 11:04:40.000000', 1, 1),
(10, 1, '2024-02-13 19:14:44.000000', 1, 1),
(11, 1, '2024-02-13 19:15:31.000000', 1, 1),
(12, 1, '2024-02-13 19:15:46.000000', 1, 1),
(13, 1, '2024-02-16 22:27:17.000000', 4, 1),
(14, 3, '2024-02-17 14:29:13.000000', 1, 2),
(15, 1, '2024-02-19 11:03:28.000000', 1, 1),
(16, 1, '2024-02-19 11:34:21.000000', 1, 7),
(17, 1, '2024-02-19 11:41:45.000000', 1, 1),
(18, 1, '2024-02-19 12:42:24.000000', 1, 1),
(19, 1, '2024-02-19 12:51:08.000000', 1, 1),
(20, 1, '2024-02-19 22:31:59.000000', 1, 1),
(21, 1, '2024-02-19 22:47:45.000000', 1, 1),
(22, 1, '2024-02-19 22:59:57.000000', 5, 1),
(23, 1, '2024-02-19 23:33:08.000000', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `PostID` int(10) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` longtext NOT NULL,
  `DateTime` datetime(6) NOT NULL,
  `MemberID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PostID`, `Title`, `Description`, `DateTime`, `MemberID`) VALUES
(1, 'How to create a post here?', '1. Enter the community involvement page\r\n2. Click on the \"Create Post\" button\r\n3. Enter details\r\n**Kindly check the post details before submission.\r\n4. Click \"Submit\" button. ', '2024-02-17 14:42:38.000000', 1),
(2, 'Community Spotlight: Greening Our Streets', 'I am thrilled to share the amazing work happening in my neighborhood! Our community has come together to transform our streets into vibrant green spaces. From planting trees to creating community gardens, we are making our city a greener, healthier place to live. Check out our latest projects and get inspired to join the green movement in your own community!', '2024-02-12 15:24:55.000000', 1),
(3, 'Eco-Friendly Practices for Urban Dwellers', 'Hey fellow urban dwellers! I have been exploring ways to live more sustainably in the city, and I wanted to share some tips and tricks I have learned along the way. From reducing waste and conserving energy to biking instead of driving and starting a small balcony garden, there are so many ways we can make a positive impact on the planet right where we live. Let us work together to create a greener, healthier urban environment!', '2024-02-12 15:49:08.000000', 1),
(4, 'The Power of Pollinators: Creating Bee-Friendly Gardens', 'Calling all nature lovers! I am excited to share my passion for pollinators and the importance of creating bee-friendly gardens in our communities. By planting native flowers and avoiding harmful pesticides, we can provide essential habitat for bees, butterflies, and other pollinators right in our own backyard. Join me in creating a buzz for pollinator conservation and preserving biodiversity in our cities!', '2024-02-13 00:21:46.000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(10) NOT NULL,
  `Name` varchar(40) DEFAULT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Unit_Price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `Name`, `Category`, `Type`, `Unit_Price`) VALUES
(1, 'T-shirt', 'Merchandise', 'Clothes', 40.00),
(2, 'Back to Nature T-shirt', 'Upselling', 'clothes', 25.00);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `ProjectID` int(10) NOT NULL,
  `Title` varchar(30) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Start_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`ProjectID`, `Title`, `Description`, `Start_Date`) VALUES
(1, 'Kuala Lumpur', 'Amidst the bustling streets and towering skyscrapers of Kuala Lumpur lies a hidden oasis of biodiversity waiting to be discovered. At the forefront of urban conservation efforts, our project aims to protect and enhance the natural ecosystems within the heart of Malaysia capital city.\r\n\r\nIn collaboration with local authorities, environmental organizations, and community stakeholders, our Urban Greening Initiative seeks to revitalize green spaces, safeguard native flora and fauna, and promote sustainable urban development practices.', '2024-12-17'),
(2, 'Alor Setar, Kedah', 'Nestled amidst the verdant landscapes of Alor Setar, Kedah serves as a gateway to the rich biodiversity and cultural heritage of Northern Malaysia. Our conservation project in Alor Setar aims to preserve and enhance the region\'s natural ecosystems, promote sustainable land management practices, and foster community engagement in environmental stewardship.\r\n\r\n\r\nIn collaboration with local authorities, conservation organizations, and community partners, our initiative seeks to address pressing environmental challenges facing Alor Setar, including habitat loss, biodiversity decline, and water pollution. Through a holistic approach that integrates conservation, education, and advocacy, we strive to safeguard the region\'s natural heritage for future generations.', '2024-12-10'),
(3, 'Kulai, Johor', 'Nestled amidst the lush rainforests and vibrant ecosystems of Kulai, Johor is a region of immense natural beauty and ecological significance. Our conservation project in Kulai is dedicated to preserving and restoring the region\'s biodiversity, promoting sustainable land management practices, and engaging local communities in environmental stewardship.\r\n\r\nIn collaboration with government agencies, conservation NGOs, and local communities, our initiative seeks to address pressing environmental challenges facing Kulai, including habitat fragmentation, deforestation, and wildlife poaching. Through a multi-faceted approach that combines conservation science, community engagement, and policy advocacy, we aim to create a more resilient and biodiverse landscape in Kulai.', '2024-12-01'),
(5, 'Conservation of Marine Life', 'Lorem ipsum dolor sit amet', '2023-04-05'),
(6, 'Conservation of Marine Life', 'mauris in aliquam feugiat', '2023-03-13'),
(7, 'Sustainable Agriculture Progra', 'id finibus sem nunc nec lectus. Sed euismod', '2023-03-12'),
(8, 'Protecting Endangered Species', 'velit justo gravida sem', '2024-06-16'),
(9, 'Conservation of Marine Life', 'mauris in aliquam feugiat', '2023-10-03'),
(10, 'Reforestation Initiative', 'id finibus sem nunc nec lectus.', '2023-12-16'),
(11, 'Clean Energy Project', 'mauris in aliquam feugiat', '2023-12-08'),
(12, 'Reforestation Initiative', 'velit justo gravida sem', '2024-08-01'),
(13, 'Sustainable Agriculture Progra', 'velit justo gravida sem', '2024-04-13'),
(14, 'Sustainable Agriculture Progra', 'id finibus sem nunc nec lectus.', '2023-09-07'),
(15, 'Sustainable Agriculture Progra', 'mauris in aliquam feugiat', '2023-10-16'),
(16, 'Clean Energy Project', 'id finibus sem nunc nec lectus.', '2024-07-24'),
(17, 'Sustainable Agriculture Progra', 'mauris in aliquam feugiat', '2024-09-10'),
(18, 'Clean Energy Project', 'mauris in aliquam feugiat', '2023-10-30'),
(19, 'Clean Energy Project', 'velit justo gravida sem', '2023-11-04'),
(20, 'Protecting Endangered Species', 'consectetur adipiscing elit. Sed ac leo nec nisl aliquet lacinia. Nullam euismod', '2024-07-30'),
(21, 'Protecting Endangered Species', 'id finibus sem nunc nec lectus.', '2023-05-09'),
(22, 'Protecting Endangered Species', 'justo ex ultrices odio', '2023-04-13'),
(23, 'Sustainable Agriculture Progra', 'mauris in aliquam feugiat', '2023-08-28'),
(24, 'Protecting Endangered Species', 'Praesent nec mauris id purus luctus aliquam. Sed ac leo nec nisl aliquet lacinia. Nullam euismod', '2024-01-03'),
(25, 'Protecting Endangered Species', 'justo ex ultrices odio', '2023-03-24'),
(26, 'Sustainable Agriculture Progra', 'Praesent nec mauris id purus luctus aliquam. Sed ac leo nec nisl aliquet lacinia. Nullam euismod', '2023-11-08'),
(27, 'Reforestation Initiative', 'justo ex ultrices odio', '2023-07-15'),
(28, 'Clean Energy Project', 'velit justo gravida sem', '2024-07-31'),
(29, 'Sustainable Agriculture Progra', 'velit justo gravida sem', '2023-05-07'),
(30, 'Protecting Endangered Species', 'nunc a aliquam aliquet', '2023-12-10'),
(31, 'Protecting Endangered Species', 'ac tristique risus nisl in nunc. Sed euismod', '2024-05-21'),
(32, 'Reforestation Initiative', 'velit justo gravida sem', '2023-10-16'),
(33, 'Conservation of Marine Life', 'velit justo gravida sem', '2023-09-07'),
(34, 'Sustainable Agriculture Progra', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla facilisi. Sed aliquam', '2024-03-12'),
(35, 'Reforestation Initiative', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla facilisi. Sed aliquam', '2024-01-08'),
(36, 'Sustainable Agriculture Progra', 'nunc a aliquam aliquet', '2023-10-07'),
(37, 'Conservation of Marine Life', 'Praesent nec mauris id purus luctus aliquam. Sed ac leo nec nisl aliquet lacinia. Nullam euismod', '2023-07-25'),
(39, 'Clean Energy Project', 'velit justo gravida sem', '2024-08-07'),
(40, 'Conservation of Marine Life', 'id finibus sem nunc nec lectus. Sed euismod', '2023-07-23'),
(41, 'Clean Energy Project', 'mauris in aliquam feugiat', '2024-04-18'),
(42, 'Protecting Endangered Species', 'ac tristique risus nisl in nunc. Sed euismod', '2024-01-02'),
(43, 'Reforestation Initiative', 'nunc a aliquam aliquet', '2023-05-21'),
(44, 'Reforestation Initiative', 'justo ex ultrices odio', '2024-05-08'),
(45, 'Clean Energy Project', 'justo ex ultrices odio', '2023-07-12'),
(46, 'Conservation of Marine Life', 'velit justo gravida sem', '2024-07-20'),
(47, 'Reforestation Initiative', 'nunc a aliquam aliquet', '2023-11-05'),
(48, 'Conservation of Marine Life', 'Lorem ipsum dolor sit amet', '2023-05-16'),
(50, 'Sustainable Agriculture Progra', 'id finibus sem nunc nec lectus.', '2023-04-26'),
(51, 'Reforestation Initiative', 'nunc a aliquam aliquet', '2024-08-22'),
(52, 'Protecting Endangered Species', 'id finibus sem nunc nec lectus.', '2023-10-17'),
(53, 'Clean Energy Project', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla facilisi. Sed aliquam', '2024-04-11'),
(54, 'Reforestation Initiative', 'justo ex ultrices odio', '2024-11-11'),
(55, 'Sustainable Agriculture Progra', 'mauris in aliquam feugiat', '2024-09-22'),
(56, 'Clean Energy Project', 'id finibus sem nunc nec lectus.', '2024-05-31'),
(57, 'Clean Energy Project', 'velit justo gravida sem', '2024-08-26'),
(58, 'Clean Energy Project', 'id finibus sem nunc nec lectus. Sed euismod', '2023-10-03'),
(59, 'Clean Energy Project', 'velit justo gravida sem', '2024-10-26'),
(60, 'Conservation of Marine Life', 'mauris in aliquam feugiat', '2023-03-22'),
(61, 'Clean Energy Project', 'velit justo gravida sem', '2023-04-03'),
(62, 'Sustainable Agriculture Progra', 'Lorem ipsum dolor sit amet', '2023-11-09'),
(63, 'Protecting Endangered Species', 'mauris in aliquam feugiat', '2023-06-03'),
(64, 'Sustainable Agriculture Progra', 'justo ex ultrices odio', '2023-11-15'),
(65, 'Sustainable Agriculture Progra', 'nunc a aliquam aliquet', '2024-01-18'),
(66, 'Clean Energy Project', 'velit justo gravida sem', '2023-12-05'),
(67, 'Sustainable Agriculture Progra', 'mauris in aliquam feugiat', '2023-10-27'),
(68, 'Protecting Endangered Species', 'id finibus sem nunc nec lectus.', '2023-07-08'),
(69, 'Sustainable Agriculture Progra', 'ac tristique risus nisl in nunc. Sed euismod', '2023-03-15'),
(70, 'Sustainable Agriculture Progra', 'ac tristique risus nisl in nunc. Sed euismod', '2024-04-14'),
(71, 'Sustainable Agriculture Progra', 'id finibus sem nunc nec lectus. Sed euismod', '2023-06-23'),
(72, 'Reforestation Initiative', 'velit justo gravida sem', '2024-02-20'),
(73, 'Protecting Endangered Species', 'velit justo gravida sem', '2023-05-17'),
(74, 'Sustainable Agriculture Progra', 'velit justo gravida sem', '2023-03-20'),
(75, 'Conservation of Marine Life', 'velit justo gravida sem', '2024-10-25'),
(77, 'Conservation of Marine Life', 'velit justo gravida sem', '2024-07-09'),
(78, 'Conservation of Marine Life', 'mauris in aliquam feugiat', '2024-06-02'),
(79, 'Clean Energy Project', 'mauris in aliquam feugiat', '2024-01-13'),
(80, 'Reforestation Initiative', 'Lorem ipsum dolor sit amet', '2023-09-15'),
(81, 'Conservation of Marine Life', 'Lorem ipsum dolor sit amet', '2023-02-11'),
(82, 'Reforestation Initiative', 'mauris in aliquam feugiat', '2024-05-06'),
(83, 'Clean Energy Project', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla facilisi. Sed aliquam', '2024-10-07'),
(84, 'Sustainable Agriculture Progra', 'nunc a aliquam aliquet', '2024-07-11'),
(85, 'Sustainable Agriculture Progra', 'velit justo gravida sem', '2023-07-11'),
(86, 'Clean Energy Project', 'velit justo gravida sem', '2024-02-16'),
(87, 'Clean Energy Project', 'Lorem ipsum dolor sit amet', '2023-06-16'),
(88, 'Clean Energy Project', 'mauris in aliquam feugiat', '2023-09-18'),
(89, 'Clean Energy Project', 'id finibus sem nunc nec lectus.', '2023-08-12'),
(90, 'Conservation of Marine Life', 'velit justo gravida sem', '2023-06-21'),
(91, 'Reforestation Initiative', 'ac tristique risus nisl in nunc. Sed euismod', '2023-03-30'),
(92, 'Conservation of Marine Life', 'nunc a aliquam aliquet', '2024-07-25'),
(93, 'Protecting Endangered Species', 'velit justo gravida sem', '2024-05-08'),
(94, 'Sustainable Agriculture Progra', 'mauris in aliquam feugiat', '2024-01-09'),
(95, 'Conservation of Marine Life', 'ac tristique risus nisl in nunc. Sed euismod', '2024-06-08'),
(96, 'Clean Energy Project', 'velit justo gravida sem', '2024-01-01'),
(97, 'Sustainable Agriculture Progra', 'Praesent nec mauris id purus luctus aliquam. Sed ac leo nec nisl aliquet lacinia. Nullam euismod', '2023-08-02'),
(98, 'Protecting Endangered Species', 'id finibus sem nunc nec lectus. Sed euismod', '2024-07-17'),
(99, 'Sustainable Agriculture Progra', 'nunc a aliquam aliquet', '2023-08-05'),
(100, 'Sustainable Agriculture Progra', 'id finibus sem nunc nec lectus.', '2023-10-10'),
(101, 'Protecting Endangered Species', 'Praesent nec mauris id purus luctus aliquam. Sed ac leo nec nisl aliquet lacinia. Nullam euismod', '2024-06-20'),
(102, 'Sustainable Agriculture Progra', 'nunc a aliquam aliquet', '2023-04-30'),
(103, 'Reforestation Initiative', 'Praesent nec mauris id purus luctus aliquam. Sed ac leo nec nisl aliquet lacinia. Nullam euismod', '2023-04-22'),
(104, 'Reforestation Initiative', 'velit justo gravida sem', '2024-06-08'),
(105, 'Sustainable Agriculture Progra', 'velit justo gravida sem', '2023-04-07'),
(106, 'Sustainable Agriculture Progra', 'ac tristique risus nisl in nunc. Sed euismod', '2023-08-12'),
(107, 'Reforestation Initiative', 'Praesent nec mauris id purus luctus aliquam. Sed ac leo nec nisl aliquet lacinia. Nullam euismod', '2023-07-07'),
(108, 'Clean Energy Project', 'Lorem ipsum dolor sit amet', '2024-08-10'),
(109, 'Protecting Endangered Species', 'id finibus sem nunc nec lectus. Sed euismod', '2023-07-06'),
(110, 'Clean Energy Project', 'mauris in aliquam feugiat', '2024-03-11'),
(111, 'Reforestation Initiative', 'velit justo gravida sem', '2024-01-02'),
(112, 'Sustainable Agriculture Progra', 'Praesent nec mauris id purus luctus aliquam. Sed ac leo nec nisl aliquet lacinia. Nullam euismod', '2023-07-01'),
(113, 'Conservation of Marine Life', 'mauris in aliquam feugiat', '2023-03-14'),
(115, 'Conservation of Marine Life', 'velit justo gravida sem', '2024-10-03'),
(116, 'Sustainable Agriculture Progra', 'id finibus sem nunc nec lectus. Sed euismod', '2023-02-16'),
(117, 'Conservation of Marine Life', 'justo ex ultrices odio', '2024-03-05'),
(118, 'Reforestation Initiative', 'nunc a aliquam aliquet', '2024-06-28'),
(119, 'Protecting Endangered Species', 'id finibus sem nunc nec lectus. Sed euismod', '2023-10-06'),
(120, 'Sustainable Agriculture Progra', 'id finibus sem nunc nec lectus. Sed euismod', '2023-10-06'),
(121, 'Reforestation Initiative', 'id finibus sem nunc nec lectus. Sed euismod', '2023-11-15'),
(122, 'Clean Energy Project', 'velit justo gravida sem', '2024-03-27'),
(124, 'Protecting Endangered Species', 'mauris in aliquam feugiat', '2024-01-27'),
(125, 'Reforestation Initiative', 'nunc a aliquam aliquet', '2024-03-27'),
(126, 'Conservation of Marine Life', 'mauris in aliquam feugiat', '2023-11-11'),
(127, 'Sustainable Agriculture Progra', 'Lorem ipsum dolor sit amet', '2024-07-30'),
(128, 'Conservation of Marine Life', 'justo ex ultrices odio', '2023-04-18'),
(129, 'Clean Energy Project', 'id finibus sem nunc nec lectus.', '2023-11-12'),
(130, 'Clean Energy Project', 'velit justo gravida sem', '2023-05-02'),
(131, 'Reforestation Initiative', 'justo ex ultrices odio', '2024-07-28'),
(132, 'Clean Energy Project', 'mauris in aliquam feugiat', '2023-09-13'),
(133, 'Protecting Endangered Species', 'nunc a aliquam aliquet', '2023-11-07'),
(134, 'Clean Energy Project', 'id finibus sem nunc nec lectus.', '2023-11-11'),
(135, 'Protecting Endangered Species', 'ac tristique risus nisl in nunc. Sed euismod', '2024-05-02'),
(136, 'Reforestation Initiative', 'consectetur adipiscing elit. Sed ac leo nec nisl aliquet lacinia. Nullam euismod', '2024-08-05'),
(137, 'Sustainable Agriculture Progra', 'mauris in aliquam feugiat', '2024-07-25'),
(138, 'Sustainable Agriculture Progra', 'velit justo gravida sem', '2023-04-04'),
(139, 'Conservation of Marine Life', 'velit justo gravida sem', '2023-05-04'),
(140, 'Protecting Endangered Species', 'velit justo gravida sem', '2023-02-27'),
(141, 'Environment-friendly Cleaning', 'velit justo gravida sem', '2024-11-21'),
(143, 'Reforestation Initiative', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla facilisi. Sed aliquam', '2023-11-20'),
(144, 'Reforestation Initiative', 'justo ex ultrices odio', '2023-12-02'),
(145, 'Conservation of Marine Life', 'velit justo gravida sem', '2023-02-17'),
(146, 'Reforestation Initiative', 'id finibus sem nunc nec lectus. Sed euismod', '2023-06-03'),
(147, 'Conservation of Marine Life', 'velit justo gravida sem', '2024-10-02'),
(148, 'Protecting Endangered Species', 'mauris in aliquam feugiat', '2024-01-18'),
(149, 'Clean Energy Project', 'velit justo gravida sem', '2024-05-30'),
(150, 'Clean Energy Project', 'nunc a aliquam aliquet', '2024-09-09'),
(151, 'Reforestation Initiative', 'id finibus sem nunc nec lectus. Sed euismod', '2024-07-29'),
(152, 'Reforestation Initiative', 'mauris in aliquam feugiat', '2023-07-11'),
(153, 'Conservation of Marine Life', 'ac tristique risus nisl in nunc. Sed euismod', '2023-02-07'),
(154, 'Conservation of Marine Life', 'velit justo gravida sem', '2023-06-11'),
(155, 'Conservation of Marine Life', 'Lorem ipsum dolor sit amet', '2023-11-22'),
(156, 'Sustainable Agriculture Progra', 'mauris in aliquam feugiat', '2023-12-16'),
(157, 'Conservation of Marine Life', 'mauris in aliquam feugiat', '2023-12-08'),
(158, 'Conservation of Marine Life', 'mauris in aliquam feugiat', '2024-05-01'),
(159, 'Sustainable Agriculture Progra', 'justo ex ultrices odio', '2023-06-22'),
(160, 'Clean Energy Project', 'ac tristique risus nisl in nunc. Sed euismod', '2024-04-30'),
(161, 'Protecting Endangered Species', 'velit justo gravida sem', '2023-11-06'),
(162, 'Sustainable Agriculture Progra', 'nunc a aliquam aliquet', '2023-06-30'),
(163, 'Protecting Endangered Species', 'velit justo gravida sem', '2024-09-15'),
(164, 'Clean Energy Project', 'id finibus sem nunc nec lectus.', '2024-01-24'),
(165, 'Reforestation Initiative', 'velit justo gravida sem', '2023-08-01'),
(166, 'Protecting Endangered Species', 'id finibus sem nunc nec lectus. Sed euismod', '2023-09-07'),
(167, 'Reforestation Initiative', 'nunc a aliquam aliquet', '2023-02-17'),
(168, 'Sustainable Agriculture Progra', 'velit justo gravida sem', '2024-04-01'),
(169, 'Conservation of Marine Life', 'ac tristique risus nisl in nunc. Sed euismod', '2023-04-29'),
(170, 'Sustainable Agriculture Progra', 'id finibus sem nunc nec lectus.', '2023-11-22'),
(171, 'Protecting Endangered Species', 'velit justo gravida sem', '2024-04-06'),
(172, 'Reforestation Initiative', 'id finibus sem nunc nec lectus.', '2023-12-27'),
(173, 'Protecting Endangered Species', 'mauris in aliquam feugiat', '2023-11-29'),
(175, 'Protecting Endangered Species', 'id finibus sem nunc nec lectus. Sed euismod', '2024-09-12'),
(176, 'Reforestation Initiative', 'mauris in aliquam feugiat', '2024-09-11'),
(177, 'Sustainable Agriculture Progra', 'mauris in aliquam feugiat', '2024-04-25'),
(178, 'Conservation of Marine Life', 'velit justo gravida sem', '2023-07-24'),
(179, 'Conservation of Marine Life', 'id finibus sem nunc nec lectus.', '2024-05-07'),
(180, 'Sustainable Agriculture Progra', 'mauris in aliquam feugiat', '2024-08-05'),
(181, 'Protecting Endangered Species', 'velit justo gravida sem', '2024-01-05'),
(182, 'Protecting Endangered Species', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla facilisi. Sed aliquam', '2024-11-12'),
(183, 'Protecting Endangered Species', 'justo ex ultrices odio', '2024-01-08'),
(184, 'Sustainable Agriculture Progra', 'velit justo gravida sem', '2024-08-29'),
(185, 'Protecting Endangered Species', 'id finibus sem nunc nec lectus. Sed euismod', '2023-07-25'),
(186, 'Clean Energy Project', 'nunc a aliquam aliquet', '2023-07-05'),
(187, 'Conservation of Marine Life', 'nunc a aliquam aliquet', '2023-03-16'),
(188, 'Conservation of Marine Life', 'velit justo gravida sem', '2023-12-03'),
(191, 'Conservation of Marine Life', 'id finibus sem nunc nec lectus. Sed euismod', '2023-11-30'),
(192, 'Reforestation Initiative', 'velit justo gravida sem', '2023-09-26'),
(193, 'Conservation of Marine Life', 'mauris in aliquam feugiat', '2024-08-21'),
(194, 'Protecting Endangered Species', 'ac tristique risus nisl in nunc. Sed euismod', '2023-12-22'),
(195, 'Sustainable Agriculture Progra', 'nunc a aliquam aliquet', '2024-08-02'),
(196, 'Sustainable Agriculture Progra', 'justo ex ultrices odio', '2024-06-18'),
(197, 'Sustainable Agriculture Progra', 'id finibus sem nunc nec lectus.', '2024-11-06'),
(198, 'Clean Energy Project', 'mauris in aliquam feugiat', '2024-07-06'),
(199, 'Sustainable Agriculture Progra', 'ac tristique risus nisl in nunc. Sed euismod', '2024-09-18'),
(200, 'Protecting Endangered Species', 'mauris in aliquam feugiat', '2024-11-11'),
(201, 'Kuala Terengganu, Terengganu', 'The conservation project in Kuala Terengganu, Terengganu, is a multifaceted initiative aimed at preserving and protecting the natural environment, biodiversity, and cultural heritage of the region. Situated on the east coast of Peninsular Malaysia, Kuala Terengganu is known for its rich ecosystems, including mangrove forests, pristine beaches, and diverse marine life.', '2023-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `project_crew_application_form`
--

CREATE TABLE `project_crew_application_form` (
  `Project_Crew_FormID` int(10) NOT NULL,
  `Position` varchar(30) DEFAULT NULL,
  `Availability` varchar(20) DEFAULT NULL,
  `Commitment_Level` int(11) DEFAULT NULL,
  `Work_Preferences` varchar(30) DEFAULT NULL,
  `Reason_of_Application` varchar(50) DEFAULT NULL,
  `Skills` varchar(100) DEFAULT NULL,
  `MemberID` int(10) DEFAULT NULL,
  `ProjectID` int(10) DEFAULT NULL,
  `AdminID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_crew_application_form`
--

INSERT INTO `project_crew_application_form` (`Project_Crew_FormID`, `Position`, `Availability`, `Commitment_Level`, `Work_Preferences`, `Reason_of_Application`, `Skills`, `MemberID`, `ProjectID`, `AdminID`) VALUES
(1, 'Secretary', 'Part-time', 7, 'On-site', 'vnwefjiodcbyuehuifwec', 'fvnoeifjewifcnjjncerg', 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `proposal_file`
--

CREATE TABLE `proposal_file` (
  `Proposal_ID` int(10) NOT NULL,
  `File_Name` varchar(255) NOT NULL,
  `File_Size` int(11) NOT NULL,
  `Downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proposal_file`
--

INSERT INTO `proposal_file` (`Proposal_ID`, `File_Name`, `File_Size`, `Downloads`) VALUES
(1, 'pk1hsS8H.pdf', 593980, 0),
(2, 'Nn29a535.pdf', 72859, 0),
(3, 'fs0R7YyQ.pdf', 581562, 0),
(4, 'ZrQMOKIo.pdf', 617201, 0),
(5, 'jAg6071g.pdf', 548988, 0),
(6, '6P0F8Lvz.pdf', 216877, 0),
(7, 'HcQLNca7.pdf', 713168, 0),
(8, '4KD9Vr6O.pdf', 207802, 0),
(9, '72Wc5OvN.pdf', 748395, 0),
(10, '4wPit1u5.pdf', 455177, 0),
(11, '9CH240X7.pdf', 850788, 0),
(12, '1U1W5lIh.pdf', 201354, 0),
(13, 'Qq4b0wTx.pdf', 822693, 0),
(14, '5z9pz8wS.pdf', 618673, 0),
(15, '2jiD47l4.pdf', 898569, 0),
(16, '0ORY3z2q.pdf', 905743, 0),
(17, '30AJR1O5.pdf', 399071, 0),
(18, '1T2Q83Vy.pdf', 749083, 0),
(19, '9dHA3Wpe.pdf', 691307, 0),
(20, 's0A831OQ.pdf', 399636, 0),
(21, 'lAZM7Y62.pdf', 258664, 0),
(22, '73tdl8FM.pdf', 224797, 0),
(23, 'wI03i5d4.pdf', 661035, 0),
(24, '52STjgmd.pdf', 915384, 0),
(25, '0I2mEF3a.pdf', 861292, 0),
(26, 'lM2iCVYB.pdf', 479326, 0),
(27, 'zU034b3s.pdf', 378628, 0),
(28, 'yVMl458m.pdf', 496286, 0),
(29, '6baHjt8E.pdf', 884782, 0),
(30, 'g6zBiq0j.pdf', 875799, 0),
(31, 'aVB48D23.pdf', 707018, 0),
(32, '790xGu5E.pdf', 608140, 0),
(33, 'adH00YLb.pdf', 502818, 0),
(34, '16bgm1m5.pdf', 157232, 0),
(35, 'Wph137IM.pdf', 593023, 0),
(36, 'fpqo18e1.pdf', 887102, 0),
(37, 'A486W461.pdf', 198769, 0),
(38, 'sRYYmxBj.pdf', 222950, 0),
(39, 'PP6O9o3R.pdf', 987016, 0),
(40, '9niTarm9.pdf', 81823, 0),
(41, 'd8LD41pZ.pdf', 240359, 0),
(42, 'oJ1e80qP.pdf', 876971, 0),
(43, 'EI7lFWSO.pdf', 520286, 0),
(44, 'bKKchWR4.pdf', 567946, 0),
(45, 'Z84T2G5K.pdf', 972154, 0),
(46, 'w1YYl6wr.pdf', 129266, 0),
(47, '2lDeQ2qf.pdf', 558006, 0),
(48, '2JFiw735.pdf', 851006, 0),
(49, 'mf3f7LA5.pdf', 262901, 0),
(50, '1P801U75.pdf', 481936, 0),
(51, 'fv60510L.pdf', 552223, 0),
(52, 'n8z0zvQM.pdf', 979582, 0),
(53, 'x7B7mSe7.pdf', 604696, 0),
(54, '8SFbwqs7.pdf', 653161, 0),
(55, 'O8Gm6COl.pdf', 485912, 0),
(56, 'l9gLVCcd.pdf', 246990, 0),
(57, 'UjO39m39.pdf', 599119, 0),
(58, 'AJ61s9Ho.pdf', 100694, 0),
(59, '2rPfdylU.pdf', 970485, 0),
(60, '5566sE1N.pdf', 122982, 0),
(61, '1I6EkaN6.pdf', 554099, 0),
(62, 'TohRigGh.pdf', 191829, 0),
(63, 'lh2ow3CR.pdf', 475678, 0),
(64, 'Jx2xP9Zw.pdf', 221104, 0),
(65, '0sB3am89.pdf', 422693, 0),
(66, 'Cu2uUIfh.pdf', 226101, 0),
(67, '8GoQsl7C.pdf', 295078, 0),
(68, 'fHAAt8cW.pdf', 297732, 0),
(69, 'R62vT6Bk.pdf', 118483, 0),
(70, 'hqAuJ3gY.pdf', 766729, 0),
(71, '81a6eNe4.pdf', 666399, 0),
(72, 'fPaLBA8N.pdf', 80715, 0),
(73, 'E2ve19ye.pdf', 694196, 0),
(74, 'c8Oyk390.pdf', 153160, 0),
(75, 'Rsl7vZtq.pdf', 242816, 0),
(76, '1n4MpuFA.pdf', 548403, 0),
(77, 'XgDDGIIr.pdf', 446667, 0),
(78, 'crekf9sa.pdf', 79305, 0),
(79, 'G58j3Ia0.pdf', 362038, 0),
(80, 'Y1yG3QY6.pdf', 558899, 0),
(81, 'IF4AP6yM.pdf', 711591, 0),
(82, 'DkQ942G5.pdf', 292262, 0),
(83, 'M2x2KmJd.pdf', 911177, 0),
(84, 'M90MOw8s.pdf', 485021, 0),
(85, 'G67wPkJi.pdf', 933444, 0),
(86, 'a3RPhGQS.pdf', 790403, 0),
(87, '5E8a7JIp.pdf', 462200, 0),
(88, '5Ppi255P.pdf', 483003, 0),
(89, 'E9TRZdfs.pdf', 401750, 0),
(90, '6542FVMT.pdf', 100872, 0),
(91, 'nhfhbPC3.pdf', 640190, 0),
(92, 'l8a6vSYq.pdf', 879676, 0),
(93, '2dAv1F54.pdf', 606814, 0),
(94, 'EcdNrIAP.pdf', 271374, 0),
(95, '1UyBhADR.pdf', 411534, 0),
(96, '7sL85v5B.pdf', 146468, 0),
(97, 'v1MCR97W.pdf', 732112, 0),
(98, '7Y418ztT.pdf', 464245, 0),
(99, 'ATmhv0Ot.pdf', 179830, 0),
(100, 'WxZYubYI.pdf', 426388, 0),
(118, 'Reilly, Mraz and Hand Proposal.pdf', 107234, 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `QuestionID` int(10) NOT NULL,
  `Title` varchar(500) DEFAULT NULL,
  `Answer` varchar(100) DEFAULT NULL,
  `Choice_A` varchar(100) DEFAULT NULL,
  `Choice_B` varchar(100) DEFAULT NULL,
  `Choice_C` varchar(100) DEFAULT NULL,
  `Choice_D` varchar(100) DEFAULT NULL,
  `QuizID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`QuestionID`, `Title`, `Answer`, `Choice_A`, `Choice_B`, `Choice_C`, `Choice_D`, `QuizID`) VALUES
(1, 'What would the whales do if they float near the water surface?', 'Respiration', 'Respiration', 'Metabolism', 'Drinking', 'Sleeping', 1),
(2, 'Bats are mostly active at ________. ', 'Night', 'Morning', 'Night', '', '', 2),
(3, 'A few species feed from animals other than insects, with the vampire bats feeding on what?', 'Blood', 'Water', 'Nothing', 'Blood', '', 2),
(5, 'About what percentage of bat species are insectivores?', '70%', '50%', '30%', '100%', '70%', 2),
(7, 'What is the scientific name of the capybara?', 'Hydrochoerus hydrochaeris', 'Hydrochoerus hydrochaeris', 'Hippochoerus hippochaeris', 'Not sure', 'None of the answer', 7),
(8, 'Which animal is the most gentle animal on the world?', 'Capybara', 'Sloth', 'Capybara', 'Orang utan', 'Snake', 7),
(9, 'When does the capybara active?', 'Whole day', 'Whole day', 'Morning', 'Night', 'Evening', 7);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `QuizID` int(10) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `AdminID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`QuizID`, `Title`, `AdminID`) VALUES
(1, 'Whale habits', 1),
(2, 'Bats behaviour at night', 1),
(7, 'Capybara lifestyle', 1);

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `ResourceID` int(10) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Company_Name` varchar(30) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `Type` varchar(30) DEFAULT NULL,
  `Contact` varchar(11) DEFAULT NULL,
  `Address` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`ResourceID`, `Email`, `Company_Name`, `Description`, `Type`, `Contact`, `Address`) VALUES
(1, 'cnewlove0@cam.ac.uk', 'Renner, Bednar and Bayer', 'consectetur adipiscing elit.', 'Food', '60128008429', '789 Jalan Raja Chulan'),
(2, 'fpettyfer1@yolasite.com', 'Bradtke, McLaughlin and O\'Kon', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.', 'Clothing', '60187437986', '123 Jalan Ampang'),
(3, 'adelph2@auda.org.au', 'Monahan-Leuschke', 'consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', 'Electronics', '60123453942', '222 Jalan Imbi'),
(4, 'mmicklewright3@youtube.co', 'Hartmann Group', 'consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', 'Clothing', '60167811195', '123 Jalan Ampang'),
(5, 'wfaber4@ustream.tv', 'Bechtelar LLC\n', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', 'Venue Decor', '60189783591', '222 Jalan Imbi'),
(6, 'jkoeppke5@sourceforge.net', 'Reichel LLC', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.', 'Venue Decor', '60143258225', '456 Jalan Bukit Bintang'),
(7, 'omaudett6@studiopress.com', 'Quitzon, Gulgowski and Kunde', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.', 'Food', '60198707567', '456 Jalan Bukit Bintang'),
(8, 'tbascombe7@blog.com', 'Schowalter-Klocko\n', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', 'Food', '60185659828', '456 Jalan Bukit Bintang'),
(9, 'slittell8@behance.net', 'Ebert Group\n', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', 'Food', '60187622468', '789 Jalan Raja Chulan'),
(10, 'wedser9@house.gov', 'Gislason-Funk', 'consectetur adipiscing elit.', 'Venue Decor', '60176831451', '222 Jalan Imbi'),
(11, 'tfolgera@auda.org.au', 'Homenick Group', 'consectetur adipiscing elit.', 'Venue Decor', '60139820341', '123 Jalan Ampang'),
(12, 'igiacomellob@shop-pro.jp', 'Grimes-Gleason\n', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.', 'Food', '60176571617', '222 Jalan Imbi'),
(13, 'mgoeringc@paypal.com', 'Borer-Effertz', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.', 'Electronics', '60156764471', '101 Jalan Sultan Ismail'),
(14, 'mstihld@comsenz.com', 'Grimes-Hettinger', 'Lorem ipsum dolor sit amet', 'Automotive', '60199930196', '101 Jalan Sultan Ismail'),
(15, 'habethelle@harvard.edu', 'Hand-Rosenbaum\n', 'Lorem ipsum dolor sit amet', 'Automotive', '60198795610', '456 Jalan Bukit Bintang'),
(16, 'biggof@economist.com', 'Heaney-Lehner\n', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.', 'Venue Decor', '60100958319', '123 Jalan Ampang'),
(17, 'bcastanagag@imgur.com', 'Okuneva and Sons\n', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', 'Automotive', '60109842265', '101 Jalan Sultan Ismail'),
(18, 'jbaikeh@exblog.jp', 'Pfeffer-Bernier\n', 'consectetur adipiscing elit.', 'Venue Decor', '60109403226', '789 Jalan Raja Chulan'),
(19, 'rwalteringi@hud.gov', 'McKenzie-Boyer\n', 'Lorem ipsum dolor sit amet', 'Automotive', '60109818255', '789 Jalan Raja Chulan'),
(20, 'jconibearj@123-reg.co.uk', 'Paucek-Rosenbaum', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', 'Clothing', '60137876520', '101 Jalan Sultan Ismail');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `VoteID` int(10) NOT NULL,
  `Status` varchar(10) DEFAULT NULL,
  `MemberID` int(10) DEFAULT NULL,
  `Crowdsourcing_FormID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`VoteID`, `Status`, `MemberID`, `Crowdsourcing_FormID`) VALUES
(1, 'Success', 1, 2),
(4, 'Success', 5, 2),
(5, 'Success', 5, 1),
(6, 'Success', 5, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`,`Email`);

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`AdoptionID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- Indexes for table `apply_partnership`
--
ALTER TABLE `apply_partnership`
  ADD PRIMARY KEY (`Apply_PartnershipID`),
  ADD KEY `apply_partnership_ibfk_1` (`PartnerID`),
  ADD KEY `apply_partnership_ibfk_2` (`Proposal_ID`) USING BTREE;

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `comment_ibfk_1` (`MemberID`),
  ADD KEY `comment_ibfk_2` (`PostID`);

--
-- Indexes for table `crowdsourcing_form`
--
ALTER TABLE `crowdsourcing_form`
  ADD PRIMARY KEY (`Crowdsourcing_FormID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`DonationID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `events_crew_application_form`
--
ALTER TABLE `events_crew_application_form`
  ADD PRIMARY KEY (`Event_Crew_FormID`),
  ADD KEY `MemberID` (`MemberID`),
  ADD KEY `EventID` (`EventID`),
  ADD KEY `AdminID` (`AdminID`);

--
-- Indexes for table `feedback_rating`
--
ALTER TABLE `feedback_rating`
  ADD PRIMARY KEY (`FeedbackID`),
  ADD KEY `MemberID` (`MemberID`),
  ADD KEY `EventID` (`EventID`);

--
-- Indexes for table `impact_report`
--
ALTER TABLE `impact_report`
  ADD PRIMARY KEY (`Impact_Report_ID`);

--
-- Indexes for table `join`
--
ALTER TABLE `join`
  ADD PRIMARY KEY (`JoinID`),
  ADD KEY `MemberID` (`MemberID`),
  ADD KEY `EventID` (`EventID`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`LikeID`),
  ADD KEY `likes_ibfk_1` (`MemberID`),
  ADD KEY `likes_ibfk_2` (`PostID`);

--
-- Indexes for table `manage_event`
--
ALTER TABLE `manage_event`
  ADD PRIMARY KEY (`ManageID`),
  ADD KEY `AdminID` (`AdminID`),
  ADD KEY `EventID` (`EventID`);

--
-- Indexes for table `manage_project`
--
ALTER TABLE `manage_project`
  ADD PRIMARY KEY (`ManageID`),
  ADD KEY `AdminID` (`AdminID`),
  ADD KEY `ProjectID` (`ProjectID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MemberID`,`Email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `MemberID` (`MemberID`),
  ADD KEY `orders_ibfk_2` (`ProductID`);

--
-- Indexes for table `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`ParticipationID`),
  ADD KEY `MemberID` (`MemberID`),
  ADD KEY `ProjectID` (`ProjectID`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`PartnerID`,`Email`);

--
-- Indexes for table `partnership`
--
ALTER TABLE `partnership`
  ADD PRIMARY KEY (`PartnershipID`),
  ADD KEY `partnership_ibfk_1` (`Partnership_Agreement_FileID`),
  ADD KEY `PartnerID` (`PartnerID`),
  ADD KEY `ProjectID` (`ProjectID`);

--
-- Indexes for table `partnership_agreement_file`
--
ALTER TABLE `partnership_agreement_file`
  ADD PRIMARY KEY (`Partnership_Agreement_FileID`);

--
-- Indexes for table `partner_event`
--
ALTER TABLE `partner_event`
  ADD PRIMARY KEY (`Partner_EventID`),
  ADD KEY `EventID` (`EventID`),
  ADD KEY `Partner_Event_ReportID` (`Partner_Event_ReportID`),
  ADD KEY `PartnerID` (`PartnerID`);

--
-- Indexes for table `partner_event_report`
--
ALTER TABLE `partner_event_report`
  ADD PRIMARY KEY (`Partner_Event_ReportID`);

--
-- Indexes for table `partner_feedback`
--
ALTER TABLE `partner_feedback`
  ADD PRIMARY KEY (`Partner_FeedbackID`),
  ADD KEY `PartnerID` (`PartnerID`),
  ADD KEY `EventID` (`EventID`);

--
-- Indexes for table `plan_event`
--
ALTER TABLE `plan_event`
  ADD PRIMARY KEY (`Plan_EventID`),
  ADD KEY `PartnerID` (`PartnerID`);

--
-- Indexes for table `play`
--
ALTER TABLE `play`
  ADD PRIMARY KEY (`Play_SessionID`),
  ADD KEY `MemberID` (`MemberID`),
  ADD KEY `QuizID` (`QuizID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PostID`),
  ADD KEY `post_ibfk_1` (`MemberID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ProjectID`);

--
-- Indexes for table `project_crew_application_form`
--
ALTER TABLE `project_crew_application_form`
  ADD PRIMARY KEY (`Project_Crew_FormID`),
  ADD KEY `MemberID` (`MemberID`),
  ADD KEY `ProjectID` (`ProjectID`),
  ADD KEY `AdminID` (`AdminID`);

--
-- Indexes for table `proposal_file`
--
ALTER TABLE `proposal_file`
  ADD PRIMARY KEY (`Proposal_ID`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`QuestionID`),
  ADD KEY `QuizID` (`QuizID`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`QuizID`),
  ADD KEY `AdminID` (`AdminID`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`ResourceID`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`VoteID`),
  ADD KEY `Crowdsourcing_FormID` (`Crowdsourcing_FormID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `AdoptionID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `apply_partnership`
--
ALTER TABLE `apply_partnership`
  MODIFY `Apply_PartnershipID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `crowdsourcing_form`
--
ALTER TABLE `crowdsourcing_form`
  MODIFY `Crowdsourcing_FormID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `DonationID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `EventID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `events_crew_application_form`
--
ALTER TABLE `events_crew_application_form`
  MODIFY `Event_Crew_FormID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback_rating`
--
ALTER TABLE `feedback_rating`
  MODIFY `FeedbackID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `impact_report`
--
ALTER TABLE `impact_report`
  MODIFY `Impact_Report_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `join`
--
ALTER TABLE `join`
  MODIFY `JoinID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `LikeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manage_event`
--
ALTER TABLE `manage_event`
  MODIFY `ManageID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `manage_project`
--
ALTER TABLE `manage_project`
  MODIFY `ManageID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `MemberID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `participation`
--
ALTER TABLE `participation`
  MODIFY `ParticipationID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `PartnerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT for table `partnership`
--
ALTER TABLE `partnership`
  MODIFY `PartnershipID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `partner_feedback`
--
ALTER TABLE `partner_feedback`
  MODIFY `Partner_FeedbackID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `plan_event`
--
ALTER TABLE `plan_event`
  MODIFY `Plan_EventID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;

--
-- AUTO_INCREMENT for table `play`
--
ALTER TABLE `play`
  MODIFY `Play_SessionID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `ProjectID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `project_crew_application_form`
--
ALTER TABLE `project_crew_application_form`
  MODIFY `Project_Crew_FormID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `QuestionID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `QuizID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `VoteID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adoption`
--
ALTER TABLE `adoption`
  ADD CONSTRAINT `adoption_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`PostID`) REFERENCES `post` (`PostID`);

--
-- Constraints for table `crowdsourcing_form`
--
ALTER TABLE `crowdsourcing_form`
  ADD CONSTRAINT `crowdsourcing_form_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`);

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`);

--
-- Constraints for table `events_crew_application_form`
--
ALTER TABLE `events_crew_application_form`
  ADD CONSTRAINT `events_crew_application_form_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`),
  ADD CONSTRAINT `events_crew_application_form_ibfk_2` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`),
  ADD CONSTRAINT `events_crew_application_form_ibfk_3` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`);

--
-- Constraints for table `feedback_rating`
--
ALTER TABLE `feedback_rating`
  ADD CONSTRAINT `feedback_rating_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`),
  ADD CONSTRAINT `feedback_rating_ibfk_2` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`);

--
-- Constraints for table `join`
--
ALTER TABLE `join`
  ADD CONSTRAINT `join_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`),
  ADD CONSTRAINT `join_ibfk_2` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`PostID`) REFERENCES `post` (`PostID`);

--
-- Constraints for table `manage_event`
--
ALTER TABLE `manage_event`
  ADD CONSTRAINT `manage_event_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`),
  ADD CONSTRAINT `manage_event_ibfk_2` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`);

--
-- Constraints for table `manage_project`
--
ALTER TABLE `manage_project`
  ADD CONSTRAINT `manage_project_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`),
  ADD CONSTRAINT `manage_project_ibfk_2` FOREIGN KEY (`ProjectID`) REFERENCES `projects` (`ProjectID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `participation_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`),
  ADD CONSTRAINT `participation_ibfk_2` FOREIGN KEY (`ProjectID`) REFERENCES `projects` (`ProjectID`);

--
-- Constraints for table `partnership`
--
ALTER TABLE `partnership`
  ADD CONSTRAINT `partnership_ibfk_1` FOREIGN KEY (`Partnership_Agreement_FileID`) REFERENCES `partnership_agreement_file` (`Partnership_Agreement_FileID`),
  ADD CONSTRAINT `partnership_ibfk_2` FOREIGN KEY (`PartnerID`) REFERENCES `partner` (`PartnerID`),
  ADD CONSTRAINT `partnership_ibfk_3` FOREIGN KEY (`ProjectID`) REFERENCES `projects` (`ProjectID`);

--
-- Constraints for table `play`
--
ALTER TABLE `play`
  ADD CONSTRAINT `play_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`),
  ADD CONSTRAINT `play_ibfk_2` FOREIGN KEY (`QuizID`) REFERENCES `quiz` (`QuizID`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`);

--
-- Constraints for table `project_crew_application_form`
--
ALTER TABLE `project_crew_application_form`
  ADD CONSTRAINT `project_crew_application_form_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`),
  ADD CONSTRAINT `project_crew_application_form_ibfk_2` FOREIGN KEY (`ProjectID`) REFERENCES `projects` (`ProjectID`),
  ADD CONSTRAINT `project_crew_application_form_ibfk_3` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`QuizID`) REFERENCES `quiz` (`QuizID`);

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`);

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`Crowdsourcing_FormID`) REFERENCES `crowdsourcing_form` (`Crowdsourcing_FormID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
