-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2014 at 09:36 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ns_rupayan`
--
CREATE DATABASE IF NOT EXISTS `ns_rupayan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ns_rupayan`;

-- --------------------------------------------------------

--
-- Table structure for table `ns_authorized_menus`
--

CREATE TABLE IF NOT EXISTS `ns_authorized_menus` (
  `id` char(36) NOT NULL,
  `role_id` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` char(36) DEFAULT NULL,
  `dominion_id` char(36) DEFAULT NULL,
  `process_id` char(36) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` tinytext NOT NULL,
  `position` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ns_authorized_menus`
--

INSERT INTO `ns_authorized_menus` (`id`, `role_id`, `name`, `parent_id`, `dominion_id`, `process_id`, `icon`, `status`, `position`) VALUES
('54755764-9f24-419a-a0f6-0ac81b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194|54743d8d-0fb8-4d8c-93e3-14b01b2ba194', 'Dashboard', NULL, '54746eb9-3e0c-41a1-b3c5-14b01b2ba194', '547408a8-ccf8-4a1e-a552-14b01b2ba194', '<i class="icon-dashboard"></i>', 'Active', 1),
('54755e0d-502c-4573-9fd6-0ac81b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194', 'Users', '', '54754ab9-b358-4a89-bd91-0ac81b2ba194', '547578a7-9f1c-4d8c-8166-0ac81b2ba194', '<i class="icon-large icon-user "></i>', 'Active', 2),
('54756bf3-fe90-4ff6-bea5-0ac81b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194', 'Settings', '', '5472d102-42bc-49b6-a2aa-10241b2ba194', '5472d14a-272c-4069-b34c-10241b2ba194', '<i class="icon-large icon-cogs "></i>', 'Active', 3),
('547573d9-e808-4e02-b52a-0ac81b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194', 'Create Menu', '54756bf3-fe90-4ff6-bea5-0ac81b2ba194', '5472d102-42bc-49b6-a2aa-10241b2ba194', '5472d14a-272c-4069-b34c-10241b2ba194', '<i class="icon-large icon-share-alt "></i>', 'Active', 1),
('54757810-4924-43ae-90ea-0ac81b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194', 'Dominions', '54756bf3-fe90-4ff6-bea5-0ac81b2ba194', '547406e3-0c5c-4545-90cb-14b01b2ba194', '5474075e-d114-4192-9da5-14b01b2ba194', '<i class="icon-large icon-share-alt "></i>', 'Active', 2),
('54757864-3794-46d0-94bf-0ac81b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194', 'Actions', '54756bf3-fe90-4ff6-bea5-0ac81b2ba194', '54740710-c7e8-44d2-b1aa-14b01b2ba194', '547407ca-ea5c-43f2-9e40-14b01b2ba194', '<i class="icon-large icon-bolt "></i>', 'Active', 3),
('54757a17-4c70-428d-b9fa-0ac81b2ba194', '', 'Roles', '54756bf3-fe90-4ff6-bea5-0ac81b2ba194', '54754ad6-0be8-48c1-b16e-0ac81b2ba194', '5475797a-1dfc-4e2d-aa71-0ac81b2ba194', '<i class="icon-large icon-random "></i>', 'Active', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ns_company_infos`
--

CREATE TABLE IF NOT EXISTS `ns_company_infos` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ns_company_infos`
--

INSERT INTO `ns_company_infos` (`id`, `name`, `address`, `created`, `modified`) VALUES
('5472ce71-28a8-4402-a999-10241b2ba194', 'Rupayan', 'N/A', '2014-11-24 07:21:37', '2014-11-24 07:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `ns_dominions`
--

CREATE TABLE IF NOT EXISTS `ns_dominions` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ns_dominions`
--

INSERT INTO `ns_dominions` (`id`, `name`) VALUES
('5472d102-42bc-49b6-a2aa-10241b2ba194', 'AuthorizedMenus'),
('547406e3-0c5c-4545-90cb-14b01b2ba194', 'Dominions'),
('54740710-c7e8-44d2-b1aa-14b01b2ba194', 'Processes'),
('5474072b-1a84-423a-a43f-14b01b2ba194', 'Permissions'),
('54746eb9-3e0c-41a1-b3c5-14b01b2ba194', 'Pages'),
('54754ab9-b358-4a89-bd91-0ac81b2ba194', 'Users'),
('54754ad6-0be8-48c1-b16e-0ac81b2ba194', 'Roles');

-- --------------------------------------------------------

--
-- Table structure for table `ns_permissions`
--

CREATE TABLE IF NOT EXISTS `ns_permissions` (
  `id` char(36) NOT NULL,
  `role_id` char(36) NOT NULL,
  `dominion_id` char(36) NOT NULL,
  `process_id` char(36) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ns_permissions`
--

INSERT INTO `ns_permissions` (`id`, `role_id`, `dominion_id`, `process_id`) VALUES
('54746777-02b8-4f59-a422-14b01b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194', '547406e3-0c5c-4545-90cb-14b01b2ba194', '547407a1-f73c-4f98-81e3-14b01b2ba194'),
('54746777-0ff8-4a86-92c2-14b01b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194', '54740710-c7e8-44d2-b1aa-14b01b2ba194', '5474081d-5a58-49bd-9a16-14b01b2ba194'),
('54746777-1d9c-47b3-b224-14b01b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194', '5474072b-1a84-423a-a43f-14b01b2ba194', '547408a8-ccf8-4a1e-a552-14b01b2ba194'),
('54746777-6ed8-4cd4-a478-14b01b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194', '5472d102-42bc-49b6-a2aa-10241b2ba194', '5472d14a-272c-4069-b34c-10241b2ba194'),
('54746777-7c18-4985-bd29-14b01b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194', '547406e3-0c5c-4545-90cb-14b01b2ba194', '54740790-1cac-4d5c-aafa-14b01b2ba194'),
('54746777-8958-4920-844e-14b01b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194', '54740710-c7e8-44d2-b1aa-14b01b2ba194', '54740807-4b88-43d5-9f52-14b01b2ba194'),
('54746777-8958-4bb5-8075-14b01b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194', '54740710-c7e8-44d2-b1aa-14b01b2ba194', '547407ca-ea5c-43f2-9e40-14b01b2ba194'),
('54746777-9698-4549-8aae-14b01b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194', '54740710-c7e8-44d2-b1aa-14b01b2ba194', '54740834-ad68-4f67-af9c-14b01b2ba194'),
('54746777-9698-4549-a04c-14b01b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194', '54740710-c7e8-44d2-b1aa-14b01b2ba194', '5474084c-0250-4a9d-9a42-14b01b2ba194'),
('54746777-f578-4151-9915-14b01b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194', '547406e3-0c5c-4545-90cb-14b01b2ba194', '5474075e-d114-4192-9da5-14b01b2ba194'),
('54746777-f578-4965-86e2-14b01b2ba194', '5472ce97-7860-4a5a-a083-10241b2ba194', '5472d102-42bc-49b6-a2aa-10241b2ba194', '5472d203-7b38-4cba-b7b7-10241b2ba194'),
('54746efa-4f58-476d-93e0-14b01b2ba194', '54743d8d-0fb8-4d8c-93e3-14b01b2ba194', '5472d102-42bc-49b6-a2aa-10241b2ba194', '5472d14a-272c-4069-b34c-10241b2ba194'),
('54746efa-5c98-424a-806e-14b01b2ba194', '54743d8d-0fb8-4d8c-93e3-14b01b2ba194', '5472d102-42bc-49b6-a2aa-10241b2ba194', '5472d203-7b38-4cba-b7b7-10241b2ba194'),
('54746efa-5c98-4dce-a824-14b01b2ba194', '54743d8d-0fb8-4d8c-93e3-14b01b2ba194', '547406e3-0c5c-4545-90cb-14b01b2ba194', '5474075e-d114-4192-9da5-14b01b2ba194'),
('54746efa-69d8-48b9-b8df-14b01b2ba194', '54743d8d-0fb8-4d8c-93e3-14b01b2ba194', '54740710-c7e8-44d2-b1aa-14b01b2ba194', '547407ca-ea5c-43f2-9e40-14b01b2ba194'),
('54746efa-69d8-4eb9-9f28-14b01b2ba194', '54743d8d-0fb8-4d8c-93e3-14b01b2ba194', '54740710-c7e8-44d2-b1aa-14b01b2ba194', '5474084c-0250-4a9d-9a42-14b01b2ba194'),
('54746efa-7718-4a5a-ba6d-14b01b2ba194', '54743d8d-0fb8-4d8c-93e3-14b01b2ba194', '54746eb9-3e0c-41a1-b3c5-14b01b2ba194', '54746ecd-dd38-4fbf-8607-14b01b2ba194'),
('54746efa-e338-4787-b544-14b01b2ba194', '54743d8d-0fb8-4d8c-93e3-14b01b2ba194', '547406e3-0c5c-4545-90cb-14b01b2ba194', '5474077d-3e70-4b26-8757-14b01b2ba194'),
('54746efa-f078-430c-92a8-14b01b2ba194', '54743d8d-0fb8-4d8c-93e3-14b01b2ba194', '5474072b-1a84-423a-a43f-14b01b2ba194', '547408a8-ccf8-4a1e-a552-14b01b2ba194');

-- --------------------------------------------------------

--
-- Table structure for table `ns_processes`
--

CREATE TABLE IF NOT EXISTS `ns_processes` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dominion_id` char(36) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ns_processes`
--

INSERT INTO `ns_processes` (`id`, `name`, `dominion_id`) VALUES
('5472d14a-272c-4069-b34c-10241b2ba194', 'index', '5472d102-42bc-49b6-a2aa-10241b2ba194'),
('5472d16c-ff3c-4ec6-ad2c-10241b2ba194', 'edit', '5472d102-42bc-49b6-a2aa-10241b2ba194'),
('5472d184-c1d4-4635-b426-10241b2ba194', 'delete', '5472d102-42bc-49b6-a2aa-10241b2ba194'),
('5472d203-7b38-4cba-b7b7-10241b2ba194', 'view', '5472d102-42bc-49b6-a2aa-10241b2ba194'),
('5474075e-d114-4192-9da5-14b01b2ba194', 'index', '547406e3-0c5c-4545-90cb-14b01b2ba194'),
('5474077d-3e70-4b26-8757-14b01b2ba194', 'view', '547406e3-0c5c-4545-90cb-14b01b2ba194'),
('54740790-1cac-4d5c-aafa-14b01b2ba194', 'delete', '547406e3-0c5c-4545-90cb-14b01b2ba194'),
('547407a1-f73c-4f98-81e3-14b01b2ba194', 'edit', '547406e3-0c5c-4545-90cb-14b01b2ba194'),
('547407ca-ea5c-43f2-9e40-14b01b2ba194', 'index', '54740710-c7e8-44d2-b1aa-14b01b2ba194'),
('54740807-4b88-43d5-9f52-14b01b2ba194', 'edit', '54740710-c7e8-44d2-b1aa-14b01b2ba194'),
('5474081d-5a58-49bd-9a16-14b01b2ba194', 'delete', '54740710-c7e8-44d2-b1aa-14b01b2ba194'),
('54740834-ad68-4f67-af9c-14b01b2ba194', 'add', '54740710-c7e8-44d2-b1aa-14b01b2ba194'),
('5474084c-0250-4a9d-9a42-14b01b2ba194', 'view', '54740710-c7e8-44d2-b1aa-14b01b2ba194'),
('547408a8-ccf8-4a1e-a552-14b01b2ba194', 'index', '5474072b-1a84-423a-a43f-14b01b2ba194'),
('54746ecd-dd38-4fbf-8607-14b01b2ba194', 'index', '54746eb9-3e0c-41a1-b3c5-14b01b2ba194'),
('547578a7-9f1c-4d8c-8166-0ac81b2ba194', 'index', '54754ab9-b358-4a89-bd91-0ac81b2ba194'),
('5475797a-1dfc-4e2d-aa71-0ac81b2ba194', 'index', '54754ad6-0be8-48c1-b16e-0ac81b2ba194');

-- --------------------------------------------------------

--
-- Table structure for table `ns_profiles`
--

CREATE TABLE IF NOT EXISTS `ns_profiles` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `skypee` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ns_profiles`
--

INSERT INTO `ns_profiles` (`id`, `user_id`, `first_name`, `last_name`, `address`, `city`, `state`, `zip`, `phone`, `skypee`) VALUES
('5314324f-504c-4130-9431-1225f8defb25', '5314324f-4224-4636-a2b0-1225f8defb25', 'Md. Razib', 'Hossain', 'dhaka', '', '', '', '', ''),
('53143c61-1b80-4348-85b7-12c1f8defb25', '53143c61-a6f8-4326-ab6c-12c1f8defb25', 'Shahin', '', 'dhaka', '', '', '', '', ''),
('53155ba1-2aa8-4497-866f-0dd5f8defb25', '53155ba0-f92c-4cdb-896c-0dd5f8defb25', 'Md. Razib', '', 'dhaka', '', '', '', '', ''),
('53155f0c-1e28-45ad-beba-0dd3f8defb25', '53155f0b-5768-4d74-93e7-0dd3f8defb25', 'Md. Razib', 'Hossain', 'dhaka', '', '', '', '', ''),
('53155fa7-f6e0-4c5c-b1db-0e8ef8defb25', '53155fa7-0ce4-4508-8ccc-0e8ef8defb25', 'Admin', '', 'Dhaka', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ns_roles`
--

CREATE TABLE IF NOT EXISTS `ns_roles` (
  `id` char(36) NOT NULL,
  `company_info_id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` tinytext,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ns_roles`
--

INSERT INTO `ns_roles` (`id`, `company_info_id`, `name`, `slug`, `status`, `created`, `modified`) VALUES
('5472ce97-7860-4a5a-a083-10241b2ba194', '5472ce71-28a8-4402-a999-10241b2ba194', 'Admin', 'admin', 'active', '2014-11-24 07:22:15', '2014-11-24 07:22:15'),
('54743d8d-0fb8-4d8c-93e3-14b01b2ba194', '5472ce71-28a8-4402-a999-10241b2ba194', 'Manager', 'manager', 'active', '2014-11-25 09:27:57', '2014-11-25 09:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `ns_users`
--

CREATE TABLE IF NOT EXISTS `ns_users` (
  `id` char(36) CHARACTER SET utf8 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `role_id` varchar(36) CHARACTER SET utf8 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinytext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ns_users`
--

INSERT INTO `ns_users` (`id`, `username`, `email`, `password`, `role_id`, `created`, `modified`, `status`) VALUES
('54745ca7-697c-4ab7-8b75-14b01b2ba194', 'admin', 'leo@nogorsolutions.com', '8b42e23a793d608765a1a5455fa86a3fa2011765', '5472ce97-7860-4a5a-a083-10241b2ba194', '2014-11-25 11:40:39', '2014-11-25 11:40:39', 'active'),
('54746e42-6944-4f78-870b-14b01b2ba194', 'userone', 'user@gmail.com', '8b42e23a793d608765a1a5455fa86a3fa2011765', '54743d8d-0fb8-4d8c-93e3-14b01b2ba194', '2014-11-25 12:55:46', '2014-11-25 12:55:46', 'active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
