-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2023 at 12:31 AM
-- Server version: 10.3.38-MariaDB-log-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdwxyz_autopilot`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_limits`
--

CREATE TABLE `access_limits` (
  `code` varchar(15) DEFAULT NULL,
  `target` varchar(7) DEFAULT NULL,
  `limit` tinyint(4) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add_business`
--

CREATE TABLE `add_business` (
  `id` int(32) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country_id` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `web_address` varchar(255) DEFAULT NULL,
  `currency_id` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `add_business`
--

INSERT INTO `add_business` (`id`, `code`, `business_name`, `address`, `country_id`, `contact_no`, `email`, `web_address`, `currency_id`, `logo`, `status`) VALUES
(11, 'CDM5042', 'North End', 'Plot # 234, Road # 78, Tejgaon Gulshan Link Road, Gulshan, Dhaka, 1200, Bangladesh', 'bangladesh', '01911917194', 'northend@gmail.com', 'https://www.facebook.com/', 'bdt', '20230116131829.jpg', 'active'),
(12, 'CDM5042', 'Mensa Digiworld', 'Green Road, Framget,Dhaka', 'bangladesh', '1234567890', 'admin@gmail.com', 'https://www.gesbd.org', 'bdt', '20230211082758.png', 'active'),
(13, 'CDM5042', 'Mensa', NULL, NULL, '1234567890', 'admin@demo.com', NULL, NULL, '20230211083416.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `after_sales_services`
--

CREATE TABLE `after_sales_services` (
  `id` tinyint(4) DEFAULT NULL,
  `free_service_details` varchar(2) DEFAULT NULL,
  `free_service_velidity_km` mediumint(9) DEFAULT NULL,
  `service_warranty_details` varchar(2) DEFAULT NULL,
  `service_warranty_velidity_km` mediumint(9) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `free_service_velidity_month` tinyint(4) DEFAULT NULL,
  `service_warranty_velidity_month` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` tinyint(32) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `city_id` varchar(32) DEFAULT NULL,
  `country_id` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `shift_code` varchar(0) DEFAULT NULL,
  `employee_code` varchar(0) DEFAULT NULL,
  `in_time` varchar(0) DEFAULT NULL,
  `out_time` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `mode` varchar(0) DEFAULT NULL,
  `let_in` varchar(0) DEFAULT NULL,
  `before_out` varchar(0) DEFAULT NULL,
  `over_time` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_summary`
--

CREATE TABLE `attendance_summary` (
  `code` varchar(0) DEFAULT NULL,
  `year` varchar(0) DEFAULT NULL,
  `month` varchar(0) DEFAULT NULL,
  `employee_code` varchar(0) DEFAULT NULL,
  `working_days` varchar(0) DEFAULT NULL,
  `present` varchar(0) DEFAULT NULL,
  `absent` varchar(0) DEFAULT NULL,
  `leave` varchar(0) DEFAULT NULL,
  `holiday` varchar(0) DEFAULT NULL,
  `late_present` varchar(0) DEFAULT NULL,
  `before_out` varchar(0) DEFAULT NULL,
  `over_time` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auctions`
--

CREATE TABLE `auctions` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `supplier_code` varchar(15) DEFAULT NULL,
  `product_code` varchar(15) DEFAULT NULL,
  `color_code` varchar(18) DEFAULT NULL,
  `mileage` decimal(7,2) DEFAULT NULL,
  `vin_chassis_no` varchar(17) DEFAULT NULL,
  `engine_number` bigint(20) DEFAULT NULL,
  `net_price_USD` decimal(7,2) DEFAULT NULL,
  `pre_order_code` varchar(18) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `vehicle_description` varchar(0) DEFAULT NULL,
  `vehicle_tracking_id` bigint(20) DEFAULT NULL,
  `auction_grade` varchar(7) DEFAULT NULL,
  `vehicle_tracking_code` bigint(20) DEFAULT NULL,
  `temporary_sales_price` decimal(9,2) DEFAULT NULL,
  `warranty` tinyint(4) DEFAULT NULL,
  `warranty_information` varchar(0) DEFAULT NULL,
  `year_of_manufacture` smallint(6) DEFAULT NULL,
  `lot_number` varchar(0) DEFAULT NULL,
  `temporary_dealer_price` decimal(9,2) DEFAULT NULL,
  `temporary_dealer_discount` decimal(7,2) DEFAULT NULL,
  `vehicle_condition` varchar(11) DEFAULT NULL,
  `price_remarks` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `code` varchar(18) DEFAULT NULL,
  `name` varchar(31) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `code` varchar(15) DEFAULT NULL,
  `bank_code` varchar(15) DEFAULT NULL,
  `account_no` varchar(14) DEFAULT NULL,
  `branch_name` varchar(5) DEFAULT NULL,
  `account_type` varchar(15) DEFAULT NULL,
  `account_holder_name` varchar(4) DEFAULT NULL,
  `ledger_name` varchar(15) DEFAULT NULL,
  `opening_date` varchar(19) DEFAULT NULL,
  `over_draft` decimal(3,2) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `ledger_code` varchar(15) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bank_interest s`
--

CREATE TABLE `bank_interest s` (
  `id` varchar(0) DEFAULT NULL,
  `interest_rate` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `bank_code` varchar(0) DEFAULT NULL,
  `company_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_of_entrys`
--

CREATE TABLE `bill_of_entrys` (
  `code` varchar(18) DEFAULT NULL,
  `customs_office_code` varchar(15) DEFAULT NULL,
  `model` varchar(0) DEFAULT NULL,
  `custom_reference` varchar(0) DEFAULT NULL,
  `declarant_reference` varchar(0) DEFAULT NULL,
  `assessment_reference` varchar(0) DEFAULT NULL,
  `package` varchar(0) DEFAULT NULL,
  `declarant_code` varchar(15) DEFAULT NULL,
  `hs_code_code` int(11) DEFAULT NULL,
  `assessable_value` decimal(9,2) DEFAULT NULL,
  `itc` decimal(3,2) DEFAULT NULL,
  `fp` decimal(3,2) DEFAULT NULL,
  `df` decimal(3,2) DEFAULT NULL,
  `cv` decimal(3,2) DEFAULT NULL,
  `total_global_tax` decimal(3,2) DEFAULT NULL,
  `cd` decimal(8,2) DEFAULT NULL,
  `cd_percent` decimal(4,2) DEFAULT NULL,
  `rd` decimal(7,2) DEFAULT NULL,
  `rd_percent` decimal(3,2) DEFAULT NULL,
  `sd` decimal(8,2) DEFAULT NULL,
  `sd_percent` decimal(4,2) DEFAULT NULL,
  `vat` decimal(8,2) DEFAULT NULL,
  `vat_percent` decimal(4,2) DEFAULT NULL,
  `ait` decimal(7,2) DEFAULT NULL,
  `ait_percent` decimal(3,2) DEFAULT NULL,
  `at` decimal(8,2) DEFAULT NULL,
  `at_percent` decimal(3,2) DEFAULT NULL,
  `atv` decimal(3,2) DEFAULT NULL,
  `atv_percent` decimal(3,2) DEFAULT NULL,
  `total_item_tax` decimal(9,2) DEFAULT NULL,
  `total_assessed_amount` decimal(9,2) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `proforma_invoice_head_code` varchar(18) DEFAULT NULL,
  `proforma_invoice_details_code` varchar(18) DEFAULT NULL,
  `bill_of_lading_code` varchar(18) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_of_entry_details`
--

CREATE TABLE `bill_of_entry_details` (
  `id` varchar(0) DEFAULT NULL,
  `tax_type_code` varchar(0) DEFAULT NULL,
  `tax_value` varchar(0) DEFAULT NULL,
  `bill_of_entry_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_of_ladings`
--

CREATE TABLE `bill_of_ladings` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `proforma_invoice_code` varchar(18) DEFAULT NULL,
  `proforma_invoice_details_code` varchar(18) DEFAULT NULL,
  `letter_of_credit_code` varchar(18) DEFAULT NULL,
  `bl_code` varchar(13) DEFAULT NULL,
  `booking_no` varchar(0) DEFAULT NULL,
  `svc_contact` varchar(0) DEFAULT NULL,
  `carrier` varchar(0) DEFAULT NULL,
  `voyage_no` varchar(0) DEFAULT NULL,
  `tracking_no` varchar(0) DEFAULT NULL,
  `tracking_link` varchar(0) DEFAULT NULL,
  `noof_sequence` varchar(0) DEFAULT NULL,
  `issue_date` varchar(19) DEFAULT NULL,
  `shipping_date` varchar(19) DEFAULT NULL,
  `eta_dDate` varchar(19) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `noting_date` varchar(19) DEFAULT NULL,
  `assessment_date` varchar(19) DEFAULT NULL,
  `document_release_date` varchar(19) DEFAULT NULL,
  `vehicle_release_date` varchar(19) DEFAULT NULL,
  `landing_port_code` varchar(0) DEFAULT NULL,
  `bl_document_remarks` varchar(0) DEFAULT NULL,
  `business_partner_code` varchar(15) DEFAULT NULL,
  `document_location` varchar(0) DEFAULT NULL,
  `noting_remarks` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `customer_code` varchar(18) DEFAULT NULL,
  `product_code` varchar(15) DEFAULT NULL,
  `vin_chassis_no` varchar(17) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `vehicle_tracking_id` bigint(20) DEFAULT NULL,
  `sales_price` decimal(9,2) DEFAULT NULL,
  `registration_amount` decimal(8,2) DEFAULT NULL,
  `insurance_amount` decimal(6,2) DEFAULT NULL,
  `loan_processing_fee` decimal(6,2) DEFAULT NULL,
  `grand_total` decimal(9,2) DEFAULT NULL,
  `discount_percent` decimal(3,2) DEFAULT NULL,
  `discount` decimal(6,2) DEFAULT NULL,
  `net_amount` decimal(9,2) DEFAULT NULL,
  `cash_amount` decimal(9,2) DEFAULT NULL,
  `credit_amount` decimal(9,2) DEFAULT NULL,
  `loan_amount` decimal(9,2) DEFAULT NULL,
  `next_payment_date` varchar(19) DEFAULT NULL,
  `expected_sanction_date` varchar(19) DEFAULT NULL,
  `sales_man_code` varchar(15) DEFAULT NULL,
  `customer_source` varchar(7) DEFAULT NULL,
  `reference_source` varchar(0) DEFAULT NULL,
  `reference_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branchs`
--

CREATE TABLE `branchs` (
  `id` tinyint(32) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `contact_no` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `web_address` varchar(255) DEFAULT NULL,
  `currency` varchar(32) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `saturday` text DEFAULT NULL,
  `saturday_opentime` varchar(32) DEFAULT NULL,
  `saturday_closetime` varchar(32) DEFAULT NULL,
  `sunday` text DEFAULT NULL,
  `sunday_opentime` varchar(32) DEFAULT NULL,
  `sunday_closetime` varchar(32) DEFAULT NULL,
  `monday` text DEFAULT NULL,
  `monday_opentime` varchar(32) DEFAULT NULL,
  `monday_closetime` varchar(32) DEFAULT NULL,
  `tuesday` text DEFAULT NULL,
  `tuesday_opentime` varchar(32) DEFAULT NULL,
  `tuesday_closetime` varchar(32) DEFAULT NULL,
  `wednesday` text DEFAULT NULL,
  `wednesday_opentime` varchar(32) DEFAULT NULL,
  `wednesday_closetime` varchar(32) DEFAULT NULL,
  `thursday` text DEFAULT NULL,
  `thursday_opentime` varchar(32) DEFAULT NULL,
  `thursday_closetime` varchar(32) DEFAULT NULL,
  `friday` text DEFAULT NULL,
  `friday_opentime` varchar(32) DEFAULT NULL,
  `friday_closetime` varchar(32) DEFAULT NULL,
  `status` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `branchs`
--

INSERT INTO `branchs` (`id`, `code`, `name`, `address`, `country`, `city`, `contact_no`, `email`, `web_address`, `currency`, `logo`, `type`, `saturday`, `saturday_opentime`, `saturday_closetime`, `sunday`, `sunday_opentime`, `sunday_closetime`, `monday`, `monday_opentime`, `monday_closetime`, `tuesday`, `tuesday_opentime`, `tuesday_closetime`, `wednesday`, `wednesday_opentime`, `wednesday_closetime`, `thursday`, `thursday_opentime`, `thursday_closetime`, `friday`, `friday_opentime`, `friday_closetime`, `status`) VALUES
(13, 'D4D', 'D4D-Gulshan', 'Plot # 234, Road # 78, Tejgaon Gulshan Link Road, Gulshan, Dhaka, 1200, Bangladesh', NULL, NULL, '01911917194', 'admin@gmail.com', 'https://www.facebook.com/', NULL, 'public/images/business/uploaded-images/branch-logo/auto-pilot_1673877464.jpg', NULL, 'Saturday', '08:00 AM', '09:00 PM', NULL, '08:00 AM', '09:00 PM', NULL, '08:00 AM', '09:00 PM', NULL, '08:00 AM', '09:00 PM', NULL, '08:00 AM', '09:00 PM', NULL, '08:00 AM', '09:00 PM', NULL, '08:00 AM', '09:00 PM', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `business_partners`
--

CREATE TABLE `business_partners` (
  `code` varchar(18) DEFAULT NULL,
  `business_category` varchar(17) DEFAULT NULL,
  `business_type` varchar(5) DEFAULT NULL,
  `name` varchar(28) DEFAULT NULL,
  `contact_number` varchar(14) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `description` varchar(2) DEFAULT NULL,
  `ledger_code` varchar(18) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `card_types`
--

CREATE TABLE `card_types` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(16) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carriers`
--

CREATE TABLE `carriers` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(3) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(21) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chassises`
--

CREATE TABLE `chassises` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(21) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cheque_book_details`
--

CREATE TABLE `cheque_book_details` (
  `code` varchar(0) DEFAULT NULL,
  `head_code` varchar(0) DEFAULT NULL,
  `cheque_number` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cheque_book_heads`
--

CREATE TABLE `cheque_book_heads` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `bank_account_code` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cheque_registers`
--

CREATE TABLE `cheque_registers` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `transaction_type` varchar(7) DEFAULT NULL,
  `ledger_code` varchar(15) DEFAULT NULL,
  `transaction_ledger_code` varchar(15) DEFAULT NULL,
  `bank_code` varchar(15) DEFAULT NULL,
  `others_bank_name` varchar(0) DEFAULT NULL,
  `cheque_number` int(11) DEFAULT NULL,
  `cheque_amount` decimal(8,2) DEFAULT NULL,
  `cheque_date` varchar(19) DEFAULT NULL,
  `vin_chassis_no` varchar(17) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `voucher_code` varchar(18) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `vehicle_tracking_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `citys`
--

CREATE TABLE `citys` (
  `id` tinyint(32) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `country_id` varchar(32) DEFAULT NULL,
  `status` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `citys`
--

INSERT INTO `citys` (`id`, `code`, `name`, `country_id`, `status`) VALUES
(10, NULL, 'Dhaka', '10', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `code` varchar(18) DEFAULT NULL,
  `name` varchar(5) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companys`
--

CREATE TABLE `companys` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(13) DEFAULT NULL,
  `contact_no` varchar(12) DEFAULT NULL,
  `email` varchar(22) DEFAULT NULL,
  `web_address` varchar(20) DEFAULT NULL,
  `address` varchar(16) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `code` varchar(18) DEFAULT NULL,
  `capital_ledger_code` varchar(15) DEFAULT NULL,
  `capital_account_name` varchar(15) DEFAULT NULL,
  `cash_ledger_code` varchar(15) DEFAULT NULL,
  `cash_account_name` varchar(12) DEFAULT NULL,
  `purchase_ledger_code` varchar(15) DEFAULT NULL,
  `purchase_account_name` varchar(16) DEFAULT NULL,
  `sales_ledger_code` varchar(15) DEFAULT NULL,
  `sales_account_name` varchar(13) DEFAULT NULL,
  `vat_ledger_code` varchar(15) DEFAULT NULL,
  `vat_account_name` varchar(11) DEFAULT NULL,
  `opening_stock_ledger_code` varchar(15) DEFAULT NULL,
  `opening_stock_account_name` varchar(21) DEFAULT NULL,
  `profit_and_loss_ledger_code` varchar(15) DEFAULT NULL,
  `profit_and_loss_account_name` varchar(21) DEFAULT NULL,
  `capital_withdrawal_ledger_code` varchar(15) DEFAULT NULL,
  `capital_withdrawal_account_name` varchar(26) DEFAULT NULL,
  `lc_amount_ledger_code` varchar(15) DEFAULT NULL,
  `lc_amount_account_name` varchar(22) DEFAULT NULL,
  `lc_charge_ledger_code` varchar(15) DEFAULT NULL,
  `lc_charge_account_name` varchar(18) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL,
  `discount_commission_income_ledger_code` varchar(15) DEFAULT NULL,
  `discount_commission_income_account_name` varchar(34) DEFAULT NULL,
  `insurance_ledger_code` varchar(15) DEFAULT NULL,
  `insurance_account_name` varchar(17) DEFAULT NULL,
  `payment_charge_ledger_code` varchar(15) DEFAULT NULL,
  `payment_charge_account_name` varchar(29) DEFAULT NULL,
  `sales_insurance_ledger_code` varchar(15) DEFAULT NULL,
  `sales_insurance_account_name` varchar(23) DEFAULT NULL,
  `sales_registration_ledger_code` varchar(15) DEFAULT NULL,
  `sales_registration_account_name` varchar(26) DEFAULT NULL,
  `sales_loan_processing_fee_ledger_code` varchar(15) DEFAULT NULL,
  `sales_loan_processing_fee_account_name` varchar(27) DEFAULT NULL,
  `petty_cash_ledger_code` varchar(15) DEFAULT NULL,
  `petty_cash_account_name` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_persons`
--

CREATE TABLE `contact_persons` (
  `id` tinyint(4) DEFAULT NULL,
  `destination` varchar(9) DEFAULT NULL,
  `name` varchar(12) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `contact_number` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cost_invoices`
--

CREATE TABLE `cost_invoices` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `invoice_no` varchar(35) DEFAULT NULL,
  `total_amount` decimal(9,2) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `voucher_code` varchar(18) DEFAULT NULL,
  `purchase_code` varchar(18) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `ledger_code` varchar(18) DEFAULT NULL,
  `source` varchar(12) DEFAULT NULL,
  `reference_code` varchar(18) DEFAULT NULL,
  `deduct_from_advance` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cost_invoice_details`
--

CREATE TABLE `cost_invoice_details` (
  `id` smallint(6) DEFAULT NULL,
  `cost_invoice_code` varchar(18) DEFAULT NULL,
  `cost_type_code` varchar(18) DEFAULT NULL,
  `vin_chassis_no` varchar(17) DEFAULT NULL,
  `amount` decimal(9,2) DEFAULT NULL,
  `remarks` varchar(49) DEFAULT NULL,
  `voucher_details_code` varchar(0) DEFAULT NULL,
  `vehicle_tracking_id` bigint(20) DEFAULT NULL,
  `over_amount` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cost_types`
--

CREATE TABLE `cost_types` (
  `code` varchar(18) DEFAULT NULL,
  `name` varchar(21) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` tinyint(32) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `code` varchar(32) DEFAULT NULL,
  `status` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `code`, `status`) VALUES
(2, 'Bermuda', '060', 'Active'),
(3, 'Afghanistan', '004', 'Active'),
(4, 'Antarctica', '010', 'Active'),
(5, 'Argentina', '032', 'Active'),
(6, 'Armenia', '051', 'Active'),
(7, 'Australia', '036', 'Active'),
(8, 'Azerbaijan', '031', 'Active'),
(9, 'Bahrain', '048', 'Active'),
(10, 'Bangladesh', '050', 'Active'),
(11, 'Bhutan', '064', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `countrys`
--

CREATE TABLE `countrys` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `country_code` varchar(3) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `code` varchar(18) DEFAULT NULL,
  `name` varchar(18) DEFAULT NULL,
  `address` varchar(8) DEFAULT NULL,
  `zip_code` varchar(0) DEFAULT NULL,
  `country_code` varchar(15) DEFAULT NULL,
  `contact1` bigint(20) DEFAULT NULL,
  `contact2` varchar(14) DEFAULT NULL,
  `contact3` varchar(0) DEFAULT NULL,
  `email` varchar(24) DEFAULT NULL,
  `business_identification_number` varchar(0) DEFAULT NULL,
  `national_identification_number` varchar(0) DEFAULT NULL,
  `date_of_birth` varchar(0) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `ledger_code` varchar(18) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `organization_code` varchar(15) DEFAULT NULL,
  `city_code` varchar(15) DEFAULT NULL,
  `gender` varchar(0) DEFAULT NULL,
  `area_code` varchar(0) DEFAULT NULL,
  `employee_code` varchar(0) DEFAULT NULL,
  `credit_limit` decimal(3,2) DEFAULT NULL,
  `profession` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_points`
--

CREATE TABLE `customer_points` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `customer_code` varchar(0) DEFAULT NULL,
  `expend_amount` varchar(0) DEFAULT NULL,
  `point` varchar(0) DEFAULT NULL,
  `reference_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customs_offices`
--

CREATE TABLE `customs_offices` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `address` varchar(6) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `companycode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `declarants`
--

CREATE TABLE `declarants` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `business_identification_number` bigint(20) DEFAULT NULL,
  `address` varchar(34) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE `delivery_details` (
  `id` tinyint(4) DEFAULT NULL,
  `number_of_key` tinyint(4) DEFAULT NULL,
  `number_of_sd_card` tinyint(4) DEFAULT NULL,
  `spare_tyre_inflator` varchar(21) DEFAULT NULL,
  `brta_registration_certificate` tinyint(4) DEFAULT NULL,
  `fitness_certificate` tinyint(4) DEFAULT NULL,
  `tax_token_certificate` tinyint(4) DEFAULT NULL,
  `insurance` tinyint(4) DEFAULT NULL,
  `vehicle_sales_invoice` tinyint(4) DEFAULT NULL,
  `money_receipt` tinyint(4) DEFAULT NULL,
  `bill_of_lading` tinyint(4) DEFAULT NULL,
  `bill_of_entry` tinyint(4) DEFAULT NULL,
  `cancellation_jp` tinyint(4) DEFAULT NULL,
  `cancellation_eng` tinyint(4) DEFAULT NULL,
  `authorization` tinyint(4) DEFAULT NULL,
  `sale_code` varchar(18) DEFAULT NULL,
  `transfer_code` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `delivery_challan` tinyint(4) DEFAULT NULL,
  `reason` varchar(10) DEFAULT NULL,
  `delivered_to` varchar(17) DEFAULT NULL,
  `contact_no` varchar(4) DEFAULT NULL,
  `delivey_date` varchar(19) DEFAULT NULL,
  `delivered_by_code` varchar(18) DEFAULT NULL,
  `vehicle_tracking_id` bigint(20) DEFAULT NULL,
  `address` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` tinyint(32) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `status` varchar(16) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `code`, `name`, `status`, `company_code`) VALUES
(1, 'COMPNY000000000002', 'Car', 'Active', NULL),
(2, 'COMPNY000000000002', 'Bike', 'Active', NULL),
(4, 'COMPNY000000000002', 'Commercial', 'Active', NULL),
(6, 'COMPNY000000000002', 'Accounts', 'Active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` tinyint(32) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `status` varchar(32) DEFAULT NULL,
  `company_code` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `code`, `name`, `status`, `company_code`) VALUES
(3, 'COMPNY000000000002', 'Manager', 'Active', NULL),
(5, 'COMPNY000000000002', 'Manager', 'Active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(6) DEFAULT NULL,
  `country_code` varchar(15) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` tinyint(32) NOT NULL,
  `code` varchar(18) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `date_of_birth` varchar(19) DEFAULT NULL,
  `contact_no` varchar(14) DEFAULT NULL,
  `fathers_name` varchar(32) DEFAULT NULL,
  `mothers_name` varchar(32) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `national_id` varchar(16) DEFAULT NULL,
  `birth_certificate_no` varchar(16) DEFAULT NULL,
  `photo` varchar(55) DEFAULT NULL,
  `status` varchar(32) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `code`, `name`, `date_of_birth`, `contact_no`, `fathers_name`, `mothers_name`, `present_address`, `permanent_address`, `email`, `national_id`, `birth_certificate_no`, `photo`, `status`, `company_code`) VALUES
(6, 'COMPNY000000000002', 'MR ABIR', '12-12-1990', '01911917194', 'MR X', 'Y', NULL, 'QWQWQW', 'info.enspiredasia@gmail.com', '112121', '1212', NULL, 'Active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_grades`
--

CREATE TABLE `employee_grades` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(3) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_office_info`
--

CREATE TABLE `employee_office_info` (
  `employee_code` varchar(15) DEFAULT NULL,
  `department_code` varchar(15) DEFAULT NULL,
  `employee_grade_code` varchar(15) DEFAULT NULL,
  `designation_code` varchar(15) DEFAULT NULL,
  `join_date` varchar(19) DEFAULT NULL,
  `confirm_date` varchar(19) DEFAULT NULL,
  `shift_code` varchar(15) DEFAULT NULL,
  `contact_no_office` varchar(10) DEFAULT NULL,
  `email_office` varchar(21) DEFAULT NULL,
  `payroll_type` varchar(7) DEFAULT NULL,
  `salary_type` varchar(5) DEFAULT NULL,
  `payment_method` varchar(4) DEFAULT NULL,
  `bank_code` varchar(0) DEFAULT NULL,
  `account_no` varchar(0) DEFAULT NULL,
  `overtime_status` varchar(3) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary`
--

CREATE TABLE `employee_salary` (
  `employee_code` varchar(15) DEFAULT NULL,
  `basic_percent` decimal(4,2) DEFAULT NULL,
  `basic` decimal(7,2) DEFAULT NULL,
  `house_rent_percent` decimal(4,2) DEFAULT NULL,
  `house_rent_amount` decimal(7,2) DEFAULT NULL,
  `medical` decimal(5,2) DEFAULT NULL,
  `conveyance` decimal(6,2) DEFAULT NULL,
  `food_allowance` decimal(6,2) DEFAULT NULL,
  `other_allowance` decimal(7,2) DEFAULT NULL,
  `gross_salary` decimal(7,2) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `estimated_costs`
--

CREATE TABLE `estimated_costs` (
  `id` tinyint(4) DEFAULT NULL,
  `purchase_code` varchar(18) DEFAULT NULL,
  `estimated_cost_type_code` varchar(15) DEFAULT NULL,
  `amount` decimal(8,2) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `estimated_cost_types`
--

CREATE TABLE `estimated_cost_types` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fiscal_years`
--

CREATE TABLE `fiscal_years` (
  `code` varchar(15) DEFAULT NULL,
  `start_date` varchar(19) DEFAULT NULL,
  `end_date` varchar(19) DEFAULT NULL,
  `year` varchar(9) DEFAULT NULL,
  `status` varchar(7) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fixed_asset_setup`
--

CREATE TABLE `fixed_asset_setup` (
  `code` varchar(0) DEFAULT NULL,
  `ledgerCode` varchar(0) DEFAULT NULL,
  `type` varchar(0) DEFAULT NULL,
  `margin` varchar(0) DEFAULT NULL,
  `margin_type` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `free_services`
--

CREATE TABLE `free_services` (
  `id` varchar(0) DEFAULT NULL,
  `key_and_document_register_code` varchar(0) DEFAULT NULL,
  `add_date` varchar(0) DEFAULT NULL,
  `service_start_date` varchar(0) DEFAULT NULL,
  `service_complete_date` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `booked_by_code` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `completed_by_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(11) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hs_codes`
--

CREATE TABLE `hs_codes` (
  `id` smallint(6) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `country_code` varchar(15) DEFAULT NULL,
  `description` varchar(88) DEFAULT NULL,
  `customs_duty` decimal(4,2) DEFAULT NULL,
  `supplementary_duty` decimal(5,2) DEFAULT NULL,
  `value_added_tax` decimal(4,2) DEFAULT NULL,
  `advance_income_tax` decimal(3,2) DEFAULT NULL,
  `regularity_duty` decimal(4,2) DEFAULT NULL,
  `advance_tax` decimal(3,2) DEFAULT NULL,
  `total_tax_incidence` decimal(5,2) DEFAULT NULL,
  `exd` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `import_registration_certificates`
--

CREATE TABLE `import_registration_certificates` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `address` varchar(14) DEFAULT NULL,
  `irc_number` bigint(20) DEFAULT NULL,
  `vat_reg_number` bigint(20) DEFAULT NULL,
  `business_identification_number` int(11) DEFAULT NULL,
  `expiry_date` varchar(19) DEFAULT NULL,
  `year_of_renewal` varchar(9) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `increments`
--

CREATE TABLE `increments` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `employee_code` varchar(0) DEFAULT NULL,
  `reason` varchar(0) DEFAULT NULL,
  `increment_depend_on` varchar(0) DEFAULT NULL,
  `old_gross` varchar(0) DEFAULT NULL,
  `new_gross` varchar(0) DEFAULT NULL,
  `increment_percent` varchar(0) DEFAULT NULL,
  `increment_amount` varchar(0) DEFAULT NULL,
  `effective_date` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inspection_categories`
--

CREATE TABLE `inspection_categories` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inspection_details`
--

CREATE TABLE `inspection_details` (
  `id` smallint(6) DEFAULT NULL,
  `head_code` varchar(18) DEFAULT NULL,
  `inspection_item_code` varchar(15) DEFAULT NULL,
  `condition` varchar(1) DEFAULT NULL,
  `description` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inspection_head`
--

CREATE TABLE `inspection_head` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `product_code` varchar(15) DEFAULT NULL,
  `vin_chassis_no` varchar(17) DEFAULT NULL,
  `mileage` decimal(7,2) DEFAULT NULL,
  `photo_taken` tinyint(4) DEFAULT NULL,
  `auction_sheet` tinyint(4) DEFAULT NULL,
  `inspection_by_code` varchar(18) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `work_status` varchar(0) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `vehicle_tracking_id` bigint(20) DEFAULT NULL,
  `source` varchar(8) DEFAULT NULL,
  `proforma_invoice_details_code` varchar(18) DEFAULT NULL,
  `purchase_code` varchar(18) DEFAULT NULL,
  `opening_stock_details_id` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inspection_items`
--

CREATE TABLE `inspection_items` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(7) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `inspection_category_code` varchar(15) DEFAULT NULL,
  `rank` tinyint(4) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_policys`
--

CREATE TABLE `insurance_policys` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `proforma_invoice_code` varchar(18) DEFAULT NULL,
  `id_no` varchar(17) DEFAULT NULL,
  `base_insured_amount` decimal(7,2) DEFAULT NULL,
  `grand_total` decimal(7,2) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `voucher_head_code` varchar(18) DEFAULT NULL,
  `business_partner_code` varchar(15) DEFAULT NULL,
  `amend_reference_code` varchar(18) DEFAULT NULL,
  `marine_cover_note` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issue_details`
--

CREATE TABLE `issue_details` (
  `code` varchar(0) DEFAULT NULL,
  `head_code` varchar(0) DEFAULT NULL,
  `product_code` varchar(0) DEFAULT NULL,
  `vin_chassis_no` varchar(0) DEFAULT NULL,
  `quantity` varchar(0) DEFAULT NULL,
  `vehicle_tracking_id` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issue_head`
--

CREATE TABLE `issue_head` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `destination_branch_code` varchar(0) DEFAULT NULL,
  `total_quantity` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `receive_status` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keyand_document_registers`
--

CREATE TABLE `keyand_document_registers` (
  `code` varchar(0) DEFAULT NULL,
  `sale_code` varchar(0) DEFAULT NULL,
  `key_type` varchar(0) DEFAULT NULL,
  `number_of_key` varchar(0) DEFAULT NULL,
  `delivered_key` varchar(0) DEFAULT NULL,
  `key_handed_over_by` varchar(0) DEFAULT NULL,
  `card_type` varchar(0) DEFAULT NULL,
  `number_of_card` varchar(0) DEFAULT NULL,
  `delivered_card` varchar(0) DEFAULT NULL,
  `card_handed_over_by` varchar(0) DEFAULT NULL,
  `tax_token` varchar(0) DEFAULT NULL,
  `fitness` varchar(0) DEFAULT NULL,
  `registration_acknowledgement_slip` varchar(0) DEFAULT NULL,
  `insurance` varchar(0) DEFAULT NULL,
  `key_remarks` varchar(0) DEFAULT NULL,
  `card_remarks` varchar(0) DEFAULT NULL,
  `document_remarks` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL,
  `tax_token_issue_date` varchar(0) DEFAULT NULL,
  `fitness_issue_date` varchar(0) DEFAULT NULL,
  `fitness_period` varchar(0) DEFAULT NULL,
  `registration_acknowledgement_slip_issue_date` varchar(0) DEFAULT NULL,
  `insurance_date` varchar(0) DEFAULT NULL,
  `insurance_period` varchar(0) DEFAULT NULL,
  `regular_servicing` varchar(0) DEFAULT NULL,
  `regular_servicing_period` varchar(0) DEFAULT NULL,
  `engine_oil` varchar(0) DEFAULT NULL,
  `engine_oil_period` varchar(0) DEFAULT NULL,
  `transmission_oil` varchar(0) DEFAULT NULL,
  `transmission_period` varchar(0) DEFAULT NULL,
  `clutch_oil` varchar(0) DEFAULT NULL,
  `clutch_oil_period` varchar(0) DEFAULT NULL,
  `cng_conversion` varchar(0) DEFAULT NULL,
  `cng_conversion_period` varchar(0) DEFAULT NULL,
  `lpg_conversion` varchar(0) DEFAULT NULL,
  `lpg_conversion_period` varchar(0) DEFAULT NULL,
  `product_code` varchar(0) DEFAULT NULL,
  `customer_code` varchar(0) DEFAULT NULL,
  `vin_chassis_no` varchar(0) DEFAULT NULL,
  `vehicle_tracking_code` varchar(0) DEFAULT NULL,
  `engine_number` varchar(0) DEFAULT NULL,
  `registration_number` varchar(0) DEFAULT NULL,
  `mileage` varchar(0) DEFAULT NULL,
  `auction_grade` varchar(0) DEFAULT NULL,
  `sales_date` varchar(0) DEFAULT NULL,
  `delivery_date` varchar(0) DEFAULT NULL,
  `document_handed_over_by` varchar(0) DEFAULT NULL,
  `vehicle_tracking_id` varchar(0) DEFAULT NULL,
  `hybrid_battery_check_up` varchar(0) DEFAULT NULL,
  `hybrid_battery_check_up_period` varchar(0) DEFAULT NULL,
  `service_remarks` varchar(0) DEFAULT NULL,
  `customer_notification` varchar(0) DEFAULT NULL,
  `ownership_change` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landing_ports`
--

CREATE TABLE `landing_ports` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(12) DEFAULT NULL,
  `carrier_code` varchar(15) DEFAULT NULL,
  `country_code` varchar(15) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `latterhead`
--

CREATE TABLE `latterhead` (
  `id` tinyint(32) NOT NULL,
  `business_name` varchar(32) DEFAULT NULL,
  `branch_name` varchar(32) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `bin` varchar(32) DEFAULT NULL,
  `website` varchar(32) DEFAULT NULL,
  `set_default` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `latterhead`
--

INSERT INTO `latterhead` (`id`, `business_name`, `branch_name`, `email`, `phone`, `address`, `bin`, `website`, `set_default`) VALUES
(1, 'Drive4ward', 'Dhaka,Bangladesh', 'bettercareaust.au@gmail.com', '01876440689', '50 power Ridge Oran Park, NSW, Australia', '154545sadsa', 'https://bettercareaust.com.au/', 'Set Default'),
(3, 'North End Car', 'BARNNASS', 'enspiredasia@gmail.com', '019117277322', 'ASSS1', '221ss', 'https://www.facebook.com', 'Set Default');

-- --------------------------------------------------------

--
-- Table structure for table `lc_bank_charges`
--

CREATE TABLE `lc_bank_charges` (
  `id` smallint(6) DEFAULT NULL,
  `letter_of_credit_code` varchar(18) DEFAULT NULL,
  `lc_charge_account_code` varchar(15) DEFAULT NULL,
  `amount` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lc_charge_accounts`
--

CREATE TABLE `lc_charge_accounts` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(21) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lead_customers`
--

CREATE TABLE `lead_customers` (
  `code` varchar(18) DEFAULT NULL,
  `name` varchar(22) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `email` varchar(12) DEFAULT NULL,
  `address` varchar(19) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL,
  `country_code` varchar(15) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lead_details`
--

CREATE TABLE `lead_details` (
  `id` smallint(6) DEFAULT NULL,
  `head_code` varchar(18) DEFAULT NULL,
  `next_action` varchar(41) DEFAULT NULL,
  `action_date` varchar(19) DEFAULT NULL,
  `action_note` varchar(2) DEFAULT NULL,
  `assigned_to_code` varchar(18) DEFAULT NULL,
  `meeting_location` varchar(0) DEFAULT NULL,
  `ld_status` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lead_heads`
--

CREATE TABLE `lead_heads` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `lead_source` varchar(7) DEFAULT NULL,
  `enquiry_type` varchar(29) DEFAULT NULL,
  `enquiry_media` varchar(5) DEFAULT NULL,
  `customer_code` varchar(18) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `comunication_channel` varchar(0) DEFAULT NULL,
  `supervised_by_code` varchar(18) DEFAULT NULL,
  `product_type` varchar(7) DEFAULT NULL,
  `product_code_1` varchar(15) DEFAULT NULL,
  `product_code_2` varchar(0) DEFAULT NULL,
  `product_code_3` varchar(0) DEFAULT NULL,
  `spare_parts_code_1` varchar(0) DEFAULT NULL,
  `spare_parts_code_2` varchar(0) DEFAULT NULL,
  `spare_parts_code_3` varchar(0) DEFAULT NULL,
  `served_by_code` varchar(18) DEFAULT NULL,
  `close_date` varchar(19) DEFAULT NULL,
  `lead_potential` varchar(0) DEFAULT NULL,
  `description` varchar(0) DEFAULT NULL,
  `lead_customer_code` varchar(18) DEFAULT NULL,
  `closed_by_code` varchar(15) DEFAULT NULL,
  `closed_remarks` varchar(3) DEFAULT NULL,
  `closed_product_type` varchar(7) DEFAULT NULL,
  `closed_product_code` varchar(15) DEFAULT NULL,
  `closed_spare_parts_code` varchar(0) DEFAULT NULL,
  `cancel_date` varchar(19) DEFAULT NULL,
  `canceled_by_code` varchar(18) DEFAULT NULL,
  `cancel_reason` varchar(14) DEFAULT NULL,
  `cancel_remarks` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `employee_code` varchar(0) DEFAULT NULL,
  `leave_type_code` varchar(0) DEFAULT NULL,
  `half_or_full` varchar(0) DEFAULT NULL,
  `half_type` varchar(0) DEFAULT NULL,
  `start_date` varchar(0) DEFAULT NULL,
  `end_date` varchar(0) DEFAULT NULL,
  `number_of_days` varchar(0) DEFAULT NULL,
  `responsible_person` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `approve_by` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE `leave_type` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(12) DEFAULT NULL,
  `pay_days` decimal(4,2) DEFAULT NULL,
  `pay_mode` varchar(3) DEFAULT NULL,
  `carry_forward` varchar(3) DEFAULT NULL,
  `max_carry` decimal(3,2) DEFAULT NULL,
  `max_request_day` decimal(3,2) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ledgers`
--

CREATE TABLE `ledgers` (
  `code` varchar(18) DEFAULT NULL,
  `name` varchar(34) DEFAULT NULL,
  `type` varchar(17) DEFAULT NULL,
  `source` varchar(17) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL,
  `nature` varchar(6) DEFAULT NULL,
  `transaction_mode` tinyint(4) DEFAULT NULL,
  `contact_no` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `letter_of_credits`
--

CREATE TABLE `letter_of_credits` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `proforma_invoice_code` varchar(18) DEFAULT NULL,
  `issue_date` varchar(19) DEFAULT NULL,
  `expiry_date` varchar(19) DEFAULT NULL,
  `shipping_period` smallint(6) DEFAULT NULL,
  `irc_number_code` varchar(15) DEFAULT NULL,
  `lcaf_number` varchar(14) DEFAULT NULL,
  `lc_number` varchar(14) DEFAULT NULL,
  `bank_account_code` varchar(15) DEFAULT NULL,
  `exchange_rate` decimal(4,2) DEFAULT NULL,
  `lc_margin_percent` decimal(5,2) DEFAULT NULL,
  `lc_margin_amount` decimal(9,2) DEFAULT NULL,
  `total_bank_charge` decimal(7,2) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `voucher_head_code` varchar(18) DEFAULT NULL,
  `amend_reference_code` varchar(18) DEFAULT NULL,
  `lc_amount_usd` decimal(7,2) DEFAULT NULL,
  `lc_amount_tk` decimal(9,2) DEFAULT NULL,
  `is_closed` tinyint(4) DEFAULT NULL,
  `currency_depreciation` decimal(7,2) DEFAULT NULL,
  `additional_lc_charge` decimal(6,2) DEFAULT NULL,
  `close_status` varchar(7) DEFAULT NULL,
  `additional_voucher_head_code` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loading_ports`
--

CREATE TABLE `loading_ports` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(14) DEFAULT NULL,
  `carrier_code` varchar(15) DEFAULT NULL,
  `country_code` varchar(15) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_processes`
--

CREATE TABLE `loan_processes` (
  `code` varchar(0) DEFAULT NULL,
  `customer_code` varchar(0) DEFAULT NULL,
  `sale_code` varchar(0) DEFAULT NULL,
  `pre_order_code` varchar(0) DEFAULT NULL,
  `product_code` varchar(0) DEFAULT NULL,
  `bank_code` varchar(0) DEFAULT NULL,
  `loan_processing_fee` varchar(0) DEFAULT NULL,
  `loan_amount` varchar(0) DEFAULT NULL,
  `expected_sanction_date` varchar(0) DEFAULT NULL,
  `actual_sanction_date` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `voucher_head_code` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL,
  `business_partner_code` varchar(0) DEFAULT NULL,
  `vehicle_tracking_id` varchar(0) DEFAULT NULL,
  `vin_chassis_no` varchar(0) DEFAULT NULL,
  `booking_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` tinyint(32) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category_id` varchar(32) DEFAULT NULL,
  `country_id` varchar(32) DEFAULT NULL,
  `image` varchar(32) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`, `category_id`, `country_id`, `image`, `status`) VALUES
(11, 'BMW', '7', NULL, '20230111135137.png', '1'),
(12, 'Ford Motor Co', '7', NULL, '20230111135359.png', '1'),
(13, 'Daimler AG owns Mercedes-Benz and Smart', '7', NULL, '20230111135445.png', '1'),
(14, 'Honda Motor Co.', '7', NULL, '20230111135459.png', '1'),
(15, 'Bajaj Auto.', '8', NULL, '20230111135521.png', '1'),
(16, 'Royal Enfield.', '8', NULL, '20230111135533.png', '1'),
(17, 'TVS Motors.', '8', NULL, '20230111135543.png', '1'),
(18, 'Ashok Leyland (India)', '9', NULL, '20230111135600.png', '1'),
(19, 'Asia MotorWorks', '9', NULL, '20230111135618.png', '1'),
(20, 'Eicher Motors', '9', NULL, '20230111135631.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` tinyint(32) NOT NULL,
  `title` varchar(32) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `validity_month` varchar(32) DEFAULT NULL,
  `validity_km` varchar(32) DEFAULT NULL,
  `service` varchar(32) DEFAULT NULL,
  `price` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `title`, `details`, `validity_month`, `validity_km`, `service`, `price`) VALUES
(1, 'Test', 'Test Details', '3 month', '4000km', '4', '5000'),
(3, 'GOLD MEMBER', 'FREE SERVICE', '12', '12211', '1', '45000');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(36) DEFAULT NULL,
  `type` varchar(12) DEFAULT NULL,
  `parent_code` varchar(15) DEFAULT NULL,
  `url` varchar(44) DEFAULT NULL,
  `module` varchar(19) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `sl_no` bigint(20) DEFAULT NULL,
  `permission_type_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mfs_accounts`
--

CREATE TABLE `mfs_accounts` (
  `code` varchar(15) DEFAULT NULL,
  `bank_code` varchar(18) DEFAULT NULL,
  `account_no` bigint(20) DEFAULT NULL,
  `account_type` varchar(13) DEFAULT NULL,
  `account_holder_name` bigint(20) DEFAULT NULL,
  `ledger_name` varchar(17) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `ledger_code` varchar(15) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migration_history`
--

CREATE TABLE `migration_history` (
  `migration_id` varchar(52) DEFAULT NULL,
  `context_key` varchar(40) DEFAULT NULL,
  `model` mediumtext DEFAULT NULL,
  `product_version` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `manufacturer_code` varchar(15) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` smallint(6) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `source` varchar(15) DEFAULT NULL,
  `source_code` varchar(18) DEFAULT NULL,
  `title` varchar(23) DEFAULT NULL,
  `message` varchar(149) DEFAULT NULL,
  `placeholder` varchar(10) DEFAULT NULL,
  `seen` tinyint(4) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opening_balance_details`
--

CREATE TABLE `opening_balance_details` (
  `head_code` varchar(18) DEFAULT NULL,
  `ledger_code` varchar(18) DEFAULT NULL,
  `balance` decimal(9,2) DEFAULT NULL,
  `vin_chassis_no` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `vehicle_tracking_id` varchar(0) DEFAULT NULL,
  `id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opening_balance_heads`
--

CREATE TABLE `opening_balance_heads` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `description` varchar(0) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `fiscal_year_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opening_stock_details`
--

CREATE TABLE `opening_stock_details` (
  `head_code` varchar(18) DEFAULT NULL,
  `supplier_code` varchar(15) DEFAULT NULL,
  `product_code` varchar(15) DEFAULT NULL,
  `vin_chassis_no` varchar(17) DEFAULT NULL,
  `engine_number` bigint(20) DEFAULT NULL,
  `color_code` varchar(18) DEFAULT NULL,
  `auction_grade` varchar(2) DEFAULT NULL,
  `price` decimal(9,2) DEFAULT NULL,
  `margin` decimal(8,2) DEFAULT NULL,
  `sales_price` decimal(9,2) DEFAULT NULL,
  `pre_order_code` varchar(0) DEFAULT NULL,
  `location` varchar(8) DEFAULT NULL,
  `vehicle_description` varchar(0) DEFAULT NULL,
  `vehicle_tracking_id` bigint(20) DEFAULT NULL,
  `mileage` decimal(7,2) DEFAULT NULL,
  `vehicle_tracking_code` bigint(20) DEFAULT NULL,
  `registration_number` varchar(0) DEFAULT NULL,
  `warranty` tinyint(4) DEFAULT NULL,
  `warranty_information` varchar(0) DEFAULT NULL,
  `year_of_manufacture` smallint(6) DEFAULT NULL,
  `year_of_registration` varchar(0) DEFAULT NULL,
  `document_status` varchar(0) DEFAULT NULL,
  `document_expiry_date` varchar(0) DEFAULT NULL,
  `fitness_expiry_date` varchar(0) DEFAULT NULL,
  `tax_token_expiry_date` varchar(0) DEFAULT NULL,
  `vehicle_condition` varchar(11) DEFAULT NULL,
  `estimated_cost` decimal(7,2) DEFAULT NULL,
  `id` smallint(6) DEFAULT NULL,
  `purchase_type` varchar(6) DEFAULT NULL,
  `temporary_sales_price` decimal(3,2) DEFAULT NULL,
  `dealer_discount` decimal(7,2) DEFAULT NULL,
  `dealer_price` decimal(9,2) DEFAULT NULL,
  `total_cost` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opening_stock_head`
--

CREATE TABLE `opening_stock_head` (
  `code` varchar(18) DEFAULT NULL,
  `total_quantity` tinyint(4) DEFAULT NULL,
  `net_amount` decimal(9,2) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(7) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `fiscal_year_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `code` varchar(18) DEFAULT NULL,
  `name` varchar(13) DEFAULT NULL,
  `contact_no` varchar(11) DEFAULT NULL,
  `email` varchar(10) DEFAULT NULL,
  `address` varchar(2) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `manufacturer_code` varchar(15) DEFAULT NULL,
  `model_code` varchar(15) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_charges`
--

CREATE TABLE `payment_charges` (
  `code` varchar(18) DEFAULT NULL,
  `card_type_code` varchar(15) DEFAULT NULL,
  `bank_ledger_code` varchar(15) DEFAULT NULL,
  `charge` decimal(3,2) DEFAULT NULL,
  `mode` varchar(1) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_types`
--

CREATE TABLE `permission_types` (
  `code` varchar(15) DEFAULT NULL,
  `type` varchar(31) DEFAULT NULL,
  `module` varchar(19) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `branch_code` varchar(15) DEFAULT NULL,
  `expend` decimal(5,2) DEFAULT NULL,
  `point` decimal(3,2) DEFAULT NULL,
  `point_value` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preorders`
--

CREATE TABLE `preorders` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `customer_code` varchar(15) DEFAULT NULL,
  `product_code` varchar(15) DEFAULT NULL,
  `preferred_year` smallint(6) DEFAULT NULL,
  `preferred_color` varchar(5) DEFAULT NULL,
  `preferred_grade` varchar(3) DEFAULT NULL,
  `expected_delivery_date` varchar(19) DEFAULT NULL,
  `other_requirements` varchar(0) DEFAULT NULL,
  `budget` int(11) DEFAULT NULL,
  `down_payment` decimal(9,2) DEFAULT NULL,
  `loan_required` tinyint(4) DEFAULT NULL,
  `terms_and_condition` varchar(18) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `preferred_mileage` mediumint(9) DEFAULT NULL,
  `optional_product_code_1` varchar(0) DEFAULT NULL,
  `optional_product_code_2` varchar(0) DEFAULT NULL,
  `optional_product_code_3` varchar(0) DEFAULT NULL,
  `loan_amount` decimal(9,2) DEFAULT NULL,
  `sales_man_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(70) DEFAULT NULL,
  `manufacturer_code` varchar(15) DEFAULT NULL,
  `model_code` varchar(15) DEFAULT NULL,
  `chassis_code` varchar(15) DEFAULT NULL,
  `package_code` varchar(15) DEFAULT NULL,
  `transmission` varchar(6) DEFAULT NULL,
  `cubic_centimetre` decimal(6,2) DEFAULT NULL,
  `category_code` varchar(15) DEFAULT NULL,
  `fuel_type` varchar(8) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL,
  `vehicle_type` varchar(10) DEFAULT NULL,
  `drive_train` varchar(3) DEFAULT NULL,
  `country_code` varchar(15) DEFAULT NULL,
  `seating_capacity` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proforma_invoice_details`
--

CREATE TABLE `proforma_invoice_details` (
  `code` varchar(18) DEFAULT NULL,
  `head_code` varchar(18) DEFAULT NULL,
  `product_code` varchar(15) DEFAULT NULL,
  `vin_chassis_no` varchar(17) DEFAULT NULL,
  `engine_number` bigint(20) DEFAULT NULL,
  `year_of_manufacture` smallint(6) DEFAULT NULL,
  `year_of_registration` varchar(0) DEFAULT NULL,
  `color_code` varchar(18) DEFAULT NULL,
  `auction_grade` varchar(7) DEFAULT NULL,
  `dimension` varchar(0) DEFAULT NULL,
  `net_weight` varchar(0) DEFAULT NULL,
  `gross_weight` varchar(0) DEFAULT NULL,
  `price` decimal(7,2) DEFAULT NULL,
  `auction_code` varchar(18) DEFAULT NULL,
  `vehicle_description` varchar(0) DEFAULT NULL,
  `mileage` decimal(7,2) DEFAULT NULL,
  `vehicle_tracking_id` bigint(20) DEFAULT NULL,
  `vehicle_tracking_code` varchar(0) DEFAULT NULL,
  `country_code` varchar(0) DEFAULT NULL,
  `hs_code` varchar(0) DEFAULT NULL,
  `vehicle_condition` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proforma_invoice_heads`
--

CREATE TABLE `proforma_invoice_heads` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `supplier_code` varchar(15) DEFAULT NULL,
  `proforma_invoice_no` varchar(13) DEFAULT NULL,
  `irc_number` varchar(15) DEFAULT NULL,
  `shipping_mark` varchar(0) DEFAULT NULL,
  `carrier_code` varchar(0) DEFAULT NULL,
  `carrier_name` varchar(0) DEFAULT NULL,
  `loading_port_code` varchar(0) DEFAULT NULL,
  `landing_port_code` varchar(0) DEFAULT NULL,
  `destination_code` varchar(0) DEFAULT NULL,
  `total_quantity` decimal(3,2) DEFAULT NULL,
  `total_amount` decimal(7,2) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `amend_reference_code` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_paths`
--

CREATE TABLE `project_paths` (
  `id` tinyint(4) DEFAULT NULL,
  `path` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `employee_code` varchar(0) DEFAULT NULL,
  `old_department_code` varchar(0) DEFAULT NULL,
  `old_designation_code` varchar(0) DEFAULT NULL,
  `new_department_code` varchar(0) DEFAULT NULL,
  `new_designation_code` varchar(0) DEFAULT NULL,
  `reason` varchar(0) DEFAULT NULL,
  `increment_depend_on` varchar(0) DEFAULT NULL,
  `old_gross` varchar(0) DEFAULT NULL,
  `new_gross` varchar(0) DEFAULT NULL,
  `increment_percent` varchar(0) DEFAULT NULL,
  `increment_amount` varchar(0) DEFAULT NULL,
  `effective_date` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `innvoice_number` varchar(15) DEFAULT NULL,
  `purchase_type` varchar(6) DEFAULT NULL,
  `supplier_code` varchar(15) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `landing_port_code` varchar(0) DEFAULT NULL,
  `shipping_mark` varchar(0) DEFAULT NULL,
  `product_code` varchar(15) DEFAULT NULL,
  `vin_chassis_no` varchar(17) DEFAULT NULL,
  `engine_number` varchar(14) DEFAULT NULL,
  `color_code` varchar(18) DEFAULT NULL,
  `auction_grade` varchar(7) DEFAULT NULL,
  `mileage` decimal(7,2) DEFAULT NULL,
  `vehicle_description` varchar(7) DEFAULT NULL,
  `lc_amount_usd` decimal(7,2) DEFAULT NULL,
  `price` decimal(9,2) DEFAULT NULL,
  `total_amount` decimal(9,2) DEFAULT NULL,
  `margin` decimal(8,2) DEFAULT NULL,
  `sales_price` decimal(9,2) DEFAULT NULL,
  `pre_order_code` varchar(18) DEFAULT NULL,
  `proforma_invoice_details_code` varchar(18) DEFAULT NULL,
  `proforma_invoice_head_code` varchar(18) DEFAULT NULL,
  `letter_of_credit_code` varchar(18) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `voucher_code` varchar(18) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `vehicle_tracking_id` bigint(20) DEFAULT NULL,
  `purchase_mode` varchar(8) DEFAULT NULL,
  `purchase_source` varchar(8) DEFAULT NULL,
  `vehicle_tracking_code` varchar(11) DEFAULT NULL,
  `year_of_manufacture` smallint(6) DEFAULT NULL,
  `registration_number` varchar(0) DEFAULT NULL,
  `year_of_registration` varchar(0) DEFAULT NULL,
  `warranty` tinyint(4) DEFAULT NULL,
  `warranty_information` varchar(0) DEFAULT NULL,
  `eta_date` varchar(0) DEFAULT NULL,
  `noting_date` varchar(0) DEFAULT NULL,
  `assessment_date` varchar(0) DEFAULT NULL,
  `document_status` varchar(0) DEFAULT NULL,
  `document_expiry_date` varchar(0) DEFAULT NULL,
  `fitness_expiry_date` varchar(0) DEFAULT NULL,
  `tax_token_expiry_date` varchar(0) DEFAULT NULL,
  `temporary_sales_price` decimal(9,2) DEFAULT NULL,
  `costing_type` varchar(12) DEFAULT NULL,
  `total_invoice_cost` decimal(9,2) DEFAULT NULL,
  `total_estimated_cost` decimal(8,2) DEFAULT NULL,
  `dealer_price` decimal(9,2) DEFAULT NULL,
  `dealer_discount` decimal(7,2) DEFAULT NULL,
  `temporary_dealer_price` decimal(9,2) DEFAULT NULL,
  `temporary_dealer_discount` decimal(8,2) DEFAULT NULL,
  `vehicle_condition` varchar(11) DEFAULT NULL,
  `vehicle_release_date` varchar(0) DEFAULT NULL,
  `document_location` varchar(0) DEFAULT NULL,
  `document_release_date` varchar(0) DEFAULT NULL,
  `lcusd_rate` decimal(4,2) DEFAULT NULL,
  `lc_margin_tk` decimal(8,2) DEFAULT NULL,
  `doc_bl_release_usd` decimal(7,2) DEFAULT NULL,
  `doc_bl_release_usd_rate` decimal(4,2) DEFAULT NULL,
  `doc_bl_release_tk` decimal(9,2) DEFAULT NULL,
  `under_adjustment_usd` decimal(5,2) DEFAULT NULL,
  `under_adjustment_usd_rate` decimal(4,2) DEFAULT NULL,
  `under_adjustment_tk` decimal(7,2) DEFAULT NULL,
  `over_adjustment_usd` decimal(3,2) DEFAULT NULL,
  `over_adjustment_tk` decimal(3,2) DEFAULT NULL,
  `total_lc_amount_tk` decimal(9,2) DEFAULT NULL,
  `lc_margin_usd` decimal(7,2) DEFAULT NULL,
  `doc_bl_release_added` tinyint(4) DEFAULT NULL,
  `under_adjustment_confirmed` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_additional_infos`
--

CREATE TABLE `purchase_additional_infos` (
  `image_link` varchar(82) DEFAULT NULL,
  `vehicle_tracking_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_returns`
--

CREATE TABLE `purchase_returns` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `product_code` varchar(0) DEFAULT NULL,
  `vin_chassis_no` varchar(0) DEFAULT NULL,
  `amount` varchar(0) DEFAULT NULL,
  `total_amount` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `purchase_code` varchar(0) DEFAULT NULL,
  `voucher_code` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL,
  `vehicle_tracking_id` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_voids`
--

CREATE TABLE `purchase_voids` (
  `id` smallint(6) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `action` varchar(6) DEFAULT NULL,
  `user_code` varchar(15) DEFAULT NULL,
  `purchase_code` varchar(18) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `branch_name` varchar(7) DEFAULT NULL,
  `vin_chassis_no` varchar(13) DEFAULT NULL,
  `engine_no` varchar(10) DEFAULT NULL,
  `unit_price` decimal(9,2) DEFAULT NULL,
  `amount_from_client` decimal(9,2) DEFAULT NULL,
  `amount_from_bank` decimal(9,2) DEFAULT NULL,
  `contact_person` varchar(14) DEFAULT NULL,
  `contact_number` bigint(20) DEFAULT NULL,
  `condition` text DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `vehicle_tracking_id` varchar(0) DEFAULT NULL,
  `bank_code` varchar(15) DEFAULT NULL,
  `customer_code` varchar(0) DEFAULT NULL,
  `customer_name` varchar(10) DEFAULT NULL,
  `customer_address` varchar(14) DEFAULT NULL,
  `product_code` varchar(15) DEFAULT NULL,
  `air_conditioning` tinyint(4) DEFAULT NULL,
  `power_steering` tinyint(4) DEFAULT NULL,
  `power_window` tinyint(4) DEFAULT NULL,
  `airbags` tinyint(4) DEFAULT NULL,
  `abs_brakes` tinyint(4) DEFAULT NULL,
  `multimedia_player` tinyint(4) DEFAULT NULL,
  `rear_view_camera` tinyint(4) DEFAULT NULL,
  `alloy_wheel` tinyint(4) DEFAULT NULL,
  `special_features` varchar(0) DEFAULT NULL,
  `warranty_information` varchar(0) DEFAULT NULL,
  `type` varchar(8) DEFAULT NULL,
  `mileage` varchar(8) DEFAULT NULL,
  `color_code` varchar(15) DEFAULT NULL,
  `customer_contact` bigint(20) DEFAULT NULL,
  `customer_organization` varchar(15) DEFAULT NULL,
  `customer_designation` varchar(13) DEFAULT NULL,
  `registration_amount` decimal(7,2) DEFAULT NULL,
  `insurance_amount` decimal(6,2) DEFAULT NULL,
  `others_expenses` decimal(6,2) DEFAULT NULL,
  `others_expenses_note` varchar(0) DEFAULT NULL,
  `total_amount` decimal(9,2) DEFAULT NULL,
  `vehicle_condition` varchar(11) DEFAULT NULL,
  `year_of_manufacture` smallint(6) DEFAULT NULL,
  `auction_grade` varchar(5) DEFAULT NULL,
  `show_date` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reconditioning`
--

CREATE TABLE `reconditioning` (
  `code` varchar(18) DEFAULT NULL,
  `product_code` varchar(15) DEFAULT NULL,
  `vin_chassis_no` varchar(17) DEFAULT NULL,
  `source` varchar(2) DEFAULT NULL,
  `arrival_date` varchar(19) DEFAULT NULL,
  `return_date` varchar(19) DEFAULT NULL,
  `current_mileage` decimal(7,2) DEFAULT NULL,
  `return_mileage` decimal(7,2) DEFAULT NULL,
  `fuel_added` decimal(8,2) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `return_by_code` varchar(0) DEFAULT NULL,
  `return_remarks` varchar(0) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `vehicle_tracking_id` bigint(20) DEFAULT NULL,
  `proforma_invoice_details_code` varchar(18) DEFAULT NULL,
  `purchase_code` varchar(0) DEFAULT NULL,
  `opening_stock_details_id` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reconditioning_details`
--

CREATE TABLE `reconditioning_details` (
  `reconditioning_code` varchar(18) DEFAULT NULL,
  `inspection_item_code` varchar(15) DEFAULT NULL,
  `business_partner_code` varchar(18) DEFAULT NULL,
  `remarks` varchar(4) DEFAULT NULL,
  `id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` smallint(6) DEFAULT NULL,
  `role_code` varchar(15) DEFAULT NULL,
  `add` tinyint(4) DEFAULT NULL,
  `approve` tinyint(4) DEFAULT NULL,
  `remove` tinyint(4) DEFAULT NULL,
  `view` tinyint(4) DEFAULT NULL,
  `permission_type_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary_configuration`
--

CREATE TABLE `salary_configuration` (
  `code` varchar(15) DEFAULT NULL,
  `employee_grade_code` varchar(15) DEFAULT NULL,
  `basic` decimal(4,2) DEFAULT NULL,
  `house_rent` decimal(4,2) DEFAULT NULL,
  `medical` decimal(5,2) DEFAULT NULL,
  `medical_depend_no` varchar(7) DEFAULT NULL,
  `conveyance` decimal(6,2) DEFAULT NULL,
  `conveyance_depend_no` varchar(7) DEFAULT NULL,
  `food_allowance` decimal(6,2) DEFAULT NULL,
  `food_allowance_depend_no` varchar(7) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `customer_code` varchar(15) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `product_code` varchar(15) DEFAULT NULL,
  `vin_chassis_no` varchar(17) DEFAULT NULL,
  `sales_price` decimal(9,2) DEFAULT NULL,
  `discount_percent` decimal(4,2) DEFAULT NULL,
  `discount` decimal(7,2) DEFAULT NULL,
  `grand_total` decimal(9,2) DEFAULT NULL,
  `vat_percent` decimal(3,2) DEFAULT NULL,
  `vat` decimal(3,2) DEFAULT NULL,
  `insurance_amount` decimal(6,2) DEFAULT NULL,
  `expected_sanction_date` varchar(19) DEFAULT NULL,
  `net_amount` decimal(9,2) DEFAULT NULL,
  `cash_amount` decimal(9,2) DEFAULT NULL,
  `loan_amount` decimal(9,2) DEFAULT NULL,
  `credit_amount` decimal(9,2) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `sales_man_code` varchar(15) DEFAULT NULL,
  `delivery_status` varchar(13) DEFAULT NULL,
  `delivery_date` varchar(19) DEFAULT NULL,
  `delivered_by_code` varchar(18) DEFAULT NULL,
  `voucher_code` varchar(18) DEFAULT NULL,
  `pre_order_code` varchar(18) DEFAULT NULL,
  `next_payment_date` varchar(19) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `vehicle_tracking_id` bigint(20) DEFAULT NULL,
  `customer_source` varchar(7) DEFAULT NULL,
  `reference_source` varchar(0) DEFAULT NULL,
  `reference_code` varchar(0) DEFAULT NULL,
  `adjust` decimal(3,2) DEFAULT NULL,
  `payable_amount` decimal(9,2) DEFAULT NULL,
  `registration_amount` decimal(8,2) DEFAULT NULL,
  `loan_processing_fee` decimal(6,2) DEFAULT NULL,
  `engine_number` bigint(20) DEFAULT NULL,
  `booking_code` varchar(0) DEFAULT NULL,
  `vehicle_tracking_code` bigint(20) DEFAULT NULL,
  `free_service` tinyint(4) DEFAULT NULL,
  `free_service_details` varchar(2) DEFAULT NULL,
  `service_warranty_details` varchar(2) DEFAULT NULL,
  `service_warranty_velidity_km` mediumint(9) DEFAULT NULL,
  `free_service_velidity_km` mediumint(9) DEFAULT NULL,
  `free_service_velidity_month` tinyint(4) DEFAULT NULL,
  `service_warranty_velidity_month` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_and_service`
--

CREATE TABLE `sales_and_service` (
  `id` int(32) NOT NULL,
  `title` varchar(32) DEFAULT NULL,
  `services_details` varchar(255) DEFAULT NULL,
  `validity_month` varchar(32) DEFAULT NULL,
  `validity_km` varchar(32) DEFAULT NULL,
  `services_warranty` varchar(32) DEFAULT NULL,
  `validity_month2` varchar(32) DEFAULT NULL,
  `validity_km2` varchar(32) DEFAULT NULL,
  `service` varchar(32) DEFAULT NULL,
  `price` int(32) DEFAULT NULL,
  `status` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales_and_service`
--

INSERT INTO `sales_and_service` (`id`, `title`, `services_details`, `validity_month`, `validity_km`, `services_warranty`, `validity_month2`, `validity_km2`, `service`, `price`, `status`) VALUES
(2, 'car', 'Tire Change', '3 month', '4000km', 'Tire change and wash', '3 month', '5000km', '4', 5000, NULL),
(3, 'Bike update test', 'Tire Change', '3 month', '4000km', 'Tire change and wash', '3 month', '5000km', '4', 5000, NULL),
(4, 'Bike update test', 'Tire Change', '3 month', '4000km', 'Tire change and wash test', '3 month', '5000km', '4', 5000, NULL),
(5, 'Bike', 'Tire Change', '3 month', '4000km', 'Tire change and wash', '3 month', '5000km', '4', 5000, NULL),
(7, 'aas1', 'ass', '23', '22', '1222', '1122', '1122', '1', 2222, NULL),
(8, 'FREE SERVICE', 'WASH, POLISH', '23', '10000', '11221', '1122', '1221', '1', 10000, NULL),
(9, 'motorcicle', 'wash,mobil change', '1', '15000', 'wash', '1', '15000', '3', 500, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales_progressions`
--

CREATE TABLE `sales_progressions` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `sales_man_code` varchar(0) DEFAULT NULL,
  `product_code` varchar(0) DEFAULT NULL,
  `vin_chassis_no` varchar(0) DEFAULT NULL,
  `progress` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL,
  `vehicle_tracking_id` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_return`
--

CREATE TABLE `sales_return` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `customer_code` varchar(0) DEFAULT NULL,
  `payment_type` varchar(0) DEFAULT NULL,
  `product_code` varchar(0) DEFAULT NULL,
  `vin_chassis_no` varchar(0) DEFAULT NULL,
  `quantity` varchar(0) DEFAULT NULL,
  `sales_price` varchar(0) DEFAULT NULL,
  `discount_percent` varchar(0) DEFAULT NULL,
  `discount` varchar(0) DEFAULT NULL,
  `vat_percent` varchar(0) DEFAULT NULL,
  `vat` varchar(0) DEFAULT NULL,
  `reg_amount` varchar(0) DEFAULT NULL,
  `insurance_amount` varchar(0) DEFAULT NULL,
  `loan_pass_amount` varchar(0) DEFAULT NULL,
  `net_amount` varchar(0) DEFAULT NULL,
  `cash_amount` varchar(0) DEFAULT NULL,
  `cheque_amount` varchar(0) DEFAULT NULL,
  `loan_amount` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `reference_code` varchar(0) DEFAULT NULL,
  `voucher_code` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL,
  `vehicle_tracking_id` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_voids`
--

CREATE TABLE `sales_voids` (
  `id` tinyint(4) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `action` varchar(4) DEFAULT NULL,
  `user_code` varchar(15) DEFAULT NULL,
  `sale_code` varchar(18) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(7) DEFAULT NULL,
  `in_time` varchar(19) DEFAULT NULL,
  `out_time` varchar(19) DEFAULT NULL,
  `late_present_after` varchar(19) DEFAULT NULL,
  `after_overtime_count` tinyint(4) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `showrooms`
--

CREATE TABLE `showrooms` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(14) DEFAULT NULL,
  `address` varchar(14) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL,
  `type` varchar(16) DEFAULT NULL,
  `city_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts`
--

CREATE TABLE `spare_parts` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `part_number` smallint(6) DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  `discount_percent` decimal(4,2) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL,
  `type` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_damage_details`
--

CREATE TABLE `spare_parts_damage_details` (
  `code` varchar(0) DEFAULT NULL,
  `head_code` varchar(0) DEFAULT NULL,
  `spare_parts_code` varchar(0) DEFAULT NULL,
  `quantity` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_damage_heads`
--

CREATE TABLE `spare_parts_damage_heads` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `total_quantity` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_inventory_details`
--

CREATE TABLE `spare_parts_inventory_details` (
  `id` varchar(0) DEFAULT NULL,
  `head_code` varchar(0) DEFAULT NULL,
  `spare_parts_code` varchar(0) DEFAULT NULL,
  `stock_quantity` varchar(0) DEFAULT NULL,
  `inventory_quantity` varchar(0) DEFAULT NULL,
  `adjust_quantity` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_inventory_heads`
--

CREATE TABLE `spare_parts_inventory_heads` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `total_stock_quantity` varchar(0) DEFAULT NULL,
  `total_inventory_quantity` varchar(0) DEFAULT NULL,
  `total_adjust_quantity` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_issue_details`
--

CREATE TABLE `spare_parts_issue_details` (
  `code` varchar(0) DEFAULT NULL,
  `head_code` varchar(0) DEFAULT NULL,
  `spare_parts_code` varchar(0) DEFAULT NULL,
  `price` varchar(0) DEFAULT NULL,
  `quantity` varchar(0) DEFAULT NULL,
  `amount` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_issue_heads`
--

CREATE TABLE `spare_parts_issue_heads` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `destination_branch_code` varchar(0) DEFAULT NULL,
  `total_quantity` varchar(0) DEFAULT NULL,
  `total_amount` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `receive_status` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_opening_stock_details`
--

CREATE TABLE `spare_parts_opening_stock_details` (
  `head_code` varchar(18) DEFAULT NULL,
  `supplier_code` varchar(15) DEFAULT NULL,
  `spare_parts_code` varchar(15) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `quantity` smallint(6) DEFAULT NULL,
  `amount` decimal(7,2) DEFAULT NULL,
  `id` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_opening_stock_heads`
--

CREATE TABLE `spare_parts_opening_stock_heads` (
  `code` varchar(18) DEFAULT NULL,
  `fiscal_year_code` varchar(15) DEFAULT NULL,
  `total_quantity` smallint(6) DEFAULT NULL,
  `net_amount` decimal(8,2) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(7) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_purchase_details`
--

CREATE TABLE `spare_parts_purchase_details` (
  `id` varchar(0) DEFAULT NULL,
  `head_code` varchar(0) DEFAULT NULL,
  `spare_parts_code` varchar(0) DEFAULT NULL,
  `price` varchar(0) DEFAULT NULL,
  `quantity` varchar(0) DEFAULT NULL,
  `amount` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_purchase_heads`
--

CREATE TABLE `spare_parts_purchase_heads` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `supplier_code` varchar(0) DEFAULT NULL,
  `invoice_no` varchar(0) DEFAULT NULL,
  `total_quantity` varchar(0) DEFAULT NULL,
  `total_amount` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `voucher_code` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_purchase_return_details`
--

CREATE TABLE `spare_parts_purchase_return_details` (
  `id` varchar(0) DEFAULT NULL,
  `head_code` varchar(0) DEFAULT NULL,
  `spare_parts_code` varchar(0) DEFAULT NULL,
  `price` varchar(0) DEFAULT NULL,
  `quantity` varchar(0) DEFAULT NULL,
  `amount` varchar(0) DEFAULT NULL,
  `purchase_head_code` varchar(0) DEFAULT NULL,
  `spare_parts_purchase_details_id` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_purchase_return_heads`
--

CREATE TABLE `spare_parts_purchase_return_heads` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `supplier_code` varchar(0) DEFAULT NULL,
  `total_quantity` varchar(0) DEFAULT NULL,
  `total_amount` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `voucher_code` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_purchase_voids`
--

CREATE TABLE `spare_parts_purchase_voids` (
  `id` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `action` varchar(0) DEFAULT NULL,
  `user_code` varchar(0) DEFAULT NULL,
  `purchase_head_code` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_sales_details`
--

CREATE TABLE `spare_parts_sales_details` (
  `head_code` varchar(18) DEFAULT NULL,
  `spare_parts_code` varchar(15) DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `quantity` decimal(4,2) DEFAULT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `discount_percent` decimal(4,2) DEFAULT NULL,
  `discount` decimal(6,2) DEFAULT NULL,
  `status` varchar(7) DEFAULT NULL,
  `id` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_sales_heads`
--

CREATE TABLE `spare_parts_sales_heads` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `customer_code` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `total_quantity` decimal(4,2) DEFAULT NULL,
  `total_amount` decimal(6,2) DEFAULT NULL,
  `total_discount_percent` decimal(3,2) DEFAULT NULL,
  `total_discount` decimal(3,2) DEFAULT NULL,
  `grand_total` decimal(5,1) DEFAULT NULL,
  `net_amount` decimal(6,2) DEFAULT NULL,
  `adjust` decimal(3,2) DEFAULT NULL,
  `payment_type` varchar(4) DEFAULT NULL,
  `pay_amount` decimal(6,2) DEFAULT NULL,
  `cash_amount` decimal(6,2) DEFAULT NULL,
  `credit_amount` decimal(3,2) DEFAULT NULL,
  `return_amount` decimal(3,2) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `voucher_code` varchar(18) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `payable_amount` decimal(6,2) DEFAULT NULL,
  `bill_type` varchar(14) DEFAULT NULL,
  `vat_amount` decimal(2,1) DEFAULT NULL,
  `vat_percent` decimal(2,1) DEFAULT NULL,
  `delivery_charge` decimal(2,1) DEFAULT NULL,
  `sales_man_code` varchar(18) DEFAULT NULL,
  `card_amount` decimal(3,2) DEFAULT NULL,
  `bank_account_code` varchar(0) DEFAULT NULL,
  `card_type_code` varchar(0) DEFAULT NULL,
  `card_payment_remarks` varchar(0) DEFAULT NULL,
  `vehicle_tracking_id` varchar(12) DEFAULT NULL,
  `vin_chassis_no` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_sales_return_details`
--

CREATE TABLE `spare_parts_sales_return_details` (
  `id` varchar(0) DEFAULT NULL,
  `head_code` varchar(0) DEFAULT NULL,
  `spare_parts_code` varchar(0) DEFAULT NULL,
  `price` varchar(0) DEFAULT NULL,
  `quantity` varchar(0) DEFAULT NULL,
  `amount` varchar(0) DEFAULT NULL,
  `discount_percent` varchar(0) DEFAULT NULL,
  `discount` varchar(0) DEFAULT NULL,
  `sales_head_code` varchar(0) DEFAULT NULL,
  `sales_details_id` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_sales_return_head`
--

CREATE TABLE `spare_parts_sales_return_head` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `customer_code` varchar(0) DEFAULT NULL,
  `sales_man_code` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `total_quantity` varchar(0) DEFAULT NULL,
  `total_amount` varchar(0) DEFAULT NULL,
  `total_discount_percent` varchar(0) DEFAULT NULL,
  `total_discount` varchar(0) DEFAULT NULL,
  `grand_total` varchar(0) DEFAULT NULL,
  `net_amount` varchar(0) DEFAULT NULL,
  `payment_type` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `voucher_code` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_sales_voids`
--

CREATE TABLE `spare_parts_sales_voids` (
  `id` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `user_code` varchar(0) DEFAULT NULL,
  `sales_head_code` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL,
  `action` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_stocks`
--

CREATE TABLE `spare_parts_stocks` (
  `id` tinyint(4) DEFAULT NULL,
  `spare_parts_code` varchar(15) DEFAULT NULL,
  `stock_quantity` decimal(4,2) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `fiscal_year_code` varchar(15) DEFAULT NULL,
  `cogs_amount` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_and_cogs`
--

CREATE TABLE `stock_and_cogs` (
  `id` smallint(6) DEFAULT NULL,
  `product_code` varchar(15) DEFAULT NULL,
  `vin_chassis_no` varchar(17) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `stock` tinyint(4) DEFAULT NULL,
  `cogs` decimal(9,2) DEFAULT NULL,
  `vehicle_tracking_id` bigint(20) DEFAULT NULL,
  `fiscal_year_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `code` varchar(15) DEFAULT NULL,
  `supplier_type` varchar(13) DEFAULT NULL,
  `business_category` varchar(12) DEFAULT NULL,
  `name` varchar(15) DEFAULT NULL,
  `contact_person` varchar(6) DEFAULT NULL,
  `address` varchar(5) DEFAULT NULL,
  `zip_code` varchar(0) DEFAULT NULL,
  `country_code` varchar(15) DEFAULT NULL,
  `contact` varchar(14) DEFAULT NULL,
  `contact_2` varchar(14) DEFAULT NULL,
  `contact_3` varchar(0) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `business_identification_number` varchar(12) DEFAULT NULL,
  `enlistment_type` varchar(10) DEFAULT NULL,
  `entry_date` varchar(19) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `ledger_code` varchar(15) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL,
  `procurement_type` varchar(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_types`
--

CREATE TABLE `tax_types` (
  `code` varchar(15) DEFAULT NULL,
  `tax_code` varchar(2) DEFAULT NULL,
  `tax_description` varchar(12) DEFAULT NULL,
  `tax_source` varchar(8) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `code` varchar(18) DEFAULT NULL,
  `condition` text DEFAULT NULL,
  `type` varchar(16) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test_drives`
--

CREATE TABLE `test_drives` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `expected_return_date` varchar(0) DEFAULT NULL,
  `driver_name` varchar(0) DEFAULT NULL,
  `contact_no` varchar(0) DEFAULT NULL,
  `address` varchar(0) DEFAULT NULL,
  `product_code` varchar(0) DEFAULT NULL,
  `vin_chassis_no` varchar(0) DEFAULT NULL,
  `fuel_added` varchar(0) DEFAULT NULL,
  `current_mileage` varchar(0) DEFAULT NULL,
  `return_mileage` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `return_remarks` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL,
  `vehicle_tracking_id` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `code` varchar(18) DEFAULT NULL,
  `transfer_date` varchar(19) DEFAULT NULL,
  `showroom_code` varchar(15) DEFAULT NULL,
  `product_code` varchar(15) DEFAULT NULL,
  `vin_chassis_no` varchar(17) DEFAULT NULL,
  `current_mileage` decimal(7,2) DEFAULT NULL,
  `return_mileage` varchar(8) DEFAULT NULL,
  `fuel_added` varchar(4) DEFAULT NULL,
  `driver_name` varchar(4) DEFAULT NULL,
  `expected_return_date` varchar(19) DEFAULT NULL,
  `employee_code` varchar(15) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `vehicle_tracking_id` bigint(20) DEFAULT NULL,
  `type` varchar(16) DEFAULT NULL,
  `actual_return_date` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transfer_details`
--

CREATE TABLE `transfer_details` (
  `id` tinyint(4) DEFAULT NULL,
  `transfer_code` varchar(18) DEFAULT NULL,
  `inspection_item_code` varchar(15) DEFAULT NULL,
  `condition` varchar(1) DEFAULT NULL,
  `description` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unpaid_bills`
--

CREATE TABLE `unpaid_bills` (
  `code` varchar(0) DEFAULT NULL,
  `submit_date` varchar(0) DEFAULT NULL,
  `expense_ledger_code` varchar(0) DEFAULT NULL,
  `terms_of_payment` varchar(0) DEFAULT NULL,
  `amount` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL,
  `business_partner_ledger_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unpaid_bill_payments`
--

CREATE TABLE `unpaid_bill_payments` (
  `code` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `unpaid_bill_code` varchar(0) DEFAULT NULL,
  `business_partner_ledger_code` varchar(0) DEFAULT NULL,
  `source_ledger_code` varchar(0) DEFAULT NULL,
  `amount` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `voucher_head_code` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL,
  `discount` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `code` varchar(15) DEFAULT NULL,
  `name` varchar(14) DEFAULT NULL,
  `email` varchar(6) DEFAULT NULL,
  `password` varchar(24) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `role_code` varchar(15) DEFAULT NULL,
  `employee_code` varchar(0) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `photo` varchar(47) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rajesh', 'admin@gmail.com', NULL, '$2y$10$vvW/C/1ujKdRRwmKPg1RzesRYpWKgAIF4Lehda8imMPl/8FNeXXdO', 'S0z7NTD16TDY9WRJ7WEhnsSjo0sh9qdo8NDDeOlSYeqtTe23hWuIpC83wGBr', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` tinyint(16) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `code`, `name`, `status`, `company_code`) VALUES
(1, 'COMPNY000000000002', 'Admin', 'Active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vats`
--

CREATE TABLE `vats` (
  `code` varchar(15) DEFAULT NULL,
  `vat_percent` decimal(4,2) DEFAULT NULL,
  `company_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vat_setup`
--

CREATE TABLE `vat_setup` (
  `id` int(32) NOT NULL,
  `taxation` varchar(32) DEFAULT NULL,
  `vat` varchar(32) DEFAULT NULL,
  `custom_text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vat_setup`
--

INSERT INTO `vat_setup` (`id`, `taxation`, `vat`, `custom_text`) VALUES
(1, 'SST', '454545', NULL),
(2, NULL, NULL, 'hjkjhjjh'),
(3, NULL, NULL, 'modal test'),
(4, 'NONE', '6456546', NULL),
(5, 'VAT', '555', NULL),
(6, NULL, NULL, 'BBN'),
(7, 'NONE', '5', NULL),
(8, 'VAT', '5', NULL),
(9, 'SST', '5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_category`
--

CREATE TABLE `vehicle_category` (
  `id` tinyint(32) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `image` varchar(32) DEFAULT NULL,
  `status` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vehicle_category`
--

INSERT INTO `vehicle_category` (`id`, `name`, `image`, `status`) VALUES
(7, 'Passenger', '20230111134954.png', '1'),
(8, 'Bike', '20230111135002.png', '1'),
(9, 'Commercial', '20230111135012.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details`
--

CREATE TABLE `vehicle_details` (
  `product_code` varchar(15) DEFAULT NULL,
  `vin_chassis_no` varchar(17) DEFAULT NULL,
  `vehicle_tracking_id` bigint(20) DEFAULT NULL,
  `vehicle_tracking_code` varchar(11) DEFAULT NULL,
  `engine_number` varchar(14) DEFAULT NULL,
  `registration_number` varchar(0) DEFAULT NULL,
  `year_of_manufacture` smallint(6) DEFAULT NULL,
  `year_of_registration` varchar(0) DEFAULT NULL,
  `vehicle_condition` varchar(11) DEFAULT NULL,
  `auction_grade` varchar(7) DEFAULT NULL,
  `warranty` tinyint(4) DEFAULT NULL,
  `warranty_information` varchar(0) DEFAULT NULL,
  `vehicle_description` varchar(7) DEFAULT NULL,
  `mileage` decimal(7,2) DEFAULT NULL,
  `supplier_code` varchar(15) DEFAULT NULL,
  `pre_order_code` varchar(18) DEFAULT NULL,
  `booking_code` varchar(18) DEFAULT NULL,
  `cogs` decimal(9,2) DEFAULT NULL,
  `total_estimated_cost` decimal(8,2) DEFAULT NULL,
  `total_cost` decimal(9,2) DEFAULT NULL,
  `margin` decimal(8,2) DEFAULT NULL,
  `sales_price` decimal(9,2) DEFAULT NULL,
  `dealer_discount` decimal(7,2) DEFAULT NULL,
  `dealer_price` decimal(9,2) DEFAULT NULL,
  `temporary_sales_price` decimal(9,2) DEFAULT NULL,
  `temporary_dealer_discount` decimal(8,2) DEFAULT NULL,
  `temporary_dealer_price` decimal(9,2) DEFAULT NULL,
  `purchase_type` varchar(6) DEFAULT NULL,
  `purchase_mode` varchar(8) DEFAULT NULL,
  `data_source` varchar(8) DEFAULT NULL,
  `vehicle_location` varchar(8) DEFAULT NULL,
  `customer_code` varchar(15) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL,
  `auction_code` varchar(18) DEFAULT NULL,
  `proforma_invoice_head_code` varchar(18) DEFAULT NULL,
  `proforma_invoice_details_code` varchar(18) DEFAULT NULL,
  `insurance_policy_code` varchar(18) DEFAULT NULL,
  `letter_of_credit_code` varchar(18) DEFAULT NULL,
  `bill_of_lading_code` varchar(18) DEFAULT NULL,
  `bill_of_entry_code` varchar(18) DEFAULT NULL,
  `purchase_code` varchar(18) DEFAULT NULL,
  `opening_stock_details_id` varchar(0) DEFAULT NULL,
  `opening_stock_head_code` varchar(0) DEFAULT NULL,
  `sale_code` varchar(18) DEFAULT NULL,
  `id` tinyint(4) DEFAULT NULL,
  `color_code` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_document`
--

CREATE TABLE `vehicle_document` (
  `id` tinyint(32) NOT NULL,
  `manufacture_id` varchar(32) DEFAULT NULL,
  `Model_id` varchar(32) DEFAULT NULL,
  `year_of_manufacture` varchar(32) DEFAULT NULL,
  `year_of_registration` varchar(32) DEFAULT NULL,
  `vin` varchar(32) DEFAULT NULL,
  `reg` varchar(32) DEFAULT NULL,
  `reg1` varchar(32) DEFAULT NULL,
  `fitness` varchar(32) DEFAULT NULL,
  `fitness_validity_day` varchar(32) DEFAULT NULL,
  `fitness_validity_date` varchar(32) DEFAULT NULL,
  `insurence` varchar(32) DEFAULT NULL,
  `insurence_validity_day` varchar(32) DEFAULT NULL,
  `insurence_validity_date` varchar(32) DEFAULT NULL,
  `tax_token` varchar(32) DEFAULT NULL,
  `tax_token_validity_day` varchar(32) DEFAULT NULL,
  `tax_token_validity_date` varchar(32) DEFAULT NULL,
  `route_permite` varchar(32) DEFAULT NULL,
  `route_permite_validity_day` varchar(32) DEFAULT NULL,
  `route_permite_validity_date` varchar(32) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vehicle_document`
--

INSERT INTO `vehicle_document` (`id`, `manufacture_id`, `Model_id`, `year_of_manufacture`, `year_of_registration`, `vin`, `reg`, `reg1`, `fitness`, `fitness_validity_day`, `fitness_validity_date`, `insurence`, `insurence_validity_day`, `insurence_validity_date`, `tax_token`, `tax_token_validity_day`, `tax_token_validity_date`, `route_permite`, `route_permite_validity_day`, `route_permite_validity_date`, `remark`) VALUES
(2, '12', '5', '2022', '2023', '543454', '1810911222', '543534', 'Recurring', 'Pending', '2023-01-26', 'Not Applicable', 'Days', '2023-01-31', 'Not Applicable', 'Pending', '2023-01-24', 'Recurring', 'Pending', '2023-01-26', 'trfggf'),
(3, '12', '4', '2023', '2021', '543454', '1810911222', '543534', 'Not Applicable', 'Pending', '2023-01-25', 'Not Applicable', 'Pending', '2023-01-20', 'Recurring', 'Active', '2023-01-25', 'Recurring', 'Active', '2023-01-28', 'ghghghghg'),
(4, '20', '6', '2021', '1998', '543454', '1810911222', '543534', 'Not Applicable', 'Pending', '2023-02-01', 'Not Applicable', 'Active', '2023-01-30', 'Not Applicable', 'Active', '2023-01-28', 'Not Applicable', 'Pending', '2023-01-29', 'hgbhghghg'),
(5, '11', '5', '2023', '2023', NULL, NULL, NULL, 'Recurring', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_document_license`
--

CREATE TABLE `vehicle_document_license` (
  `id` tinyint(32) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `document_type` varchar(32) DEFAULT NULL,
  `license_document_name` varchar(32) DEFAULT NULL,
  `registration` varchar(32) DEFAULT NULL,
  `license_document_number` varchar(32) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `renewal_type` varchar(32) DEFAULT NULL,
  `vehicle` varchar(32) DEFAULT NULL,
  `velidaty_date` date DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `status` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vehicle_document_license`
--

INSERT INTO `vehicle_document_license` (`id`, `code`, `document_type`, `license_document_name`, `registration`, `license_document_number`, `address`, `registration_date`, `renewal_type`, `vehicle`, `velidaty_date`, `remarks`, `status`) VALUES
(1, '00000', 'Active', 'Car', '5577', '52014', '3 indira road', '2023-01-13', 'recuring', 'Active', '2023-01-18', 'fsafsdafsa', 'Inactive'),
(2, '00000', 'Inactive', 'Bike', '43434', '23434324', 'rwr343 rwer', '2023-01-27', 'recuring', 'Pending', '2023-01-10', 'a sfsdaf', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_model`
--

CREATE TABLE `vehicle_model` (
  `id` tinyint(32) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `manufacture_id` varchar(32) DEFAULT NULL,
  `category_id` varchar(32) DEFAULT NULL,
  `country_id` varchar(32) DEFAULT NULL,
  `image` varchar(32) DEFAULT NULL,
  `status` tinyint(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vehicle_model`
--

INSERT INTO `vehicle_model` (`id`, `name`, `manufacture_id`, `category_id`, `country_id`, `image`, `status`) VALUES
(4, 'Dump Truck', '18', '9', NULL, '20230111135839.png', 1),
(5, 'Sedan', '11', '7', NULL, '20230111135904.png', 1),
(6, 'Sports', '15', '8', NULL, '20230111135929.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_registrations`
--

CREATE TABLE `vehicle_registrations` (
  `code` varchar(0) DEFAULT NULL,
  `start_date` varchar(0) DEFAULT NULL,
  `sale_code` varchar(0) DEFAULT NULL,
  `registration_by` varchar(0) DEFAULT NULL,
  `agent_code` varchar(0) DEFAULT NULL,
  `amount` varchar(0) DEFAULT NULL,
  `registration_number` varchar(0) DEFAULT NULL,
  `brta_office` varchar(0) DEFAULT NULL,
  `complete_date` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `supervised_by_code` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voucher_details`
--

CREATE TABLE `voucher_details` (
  `code` varchar(18) DEFAULT NULL,
  `head_code` varchar(18) DEFAULT NULL,
  `type` varchar(18) DEFAULT NULL,
  `from_ledger_code` varchar(18) DEFAULT NULL,
  `to_ledger_code` varchar(18) DEFAULT NULL,
  `amount` decimal(9,2) DEFAULT NULL,
  `remarks` varchar(71) DEFAULT NULL,
  `vin_chassis_no` varchar(19) DEFAULT NULL,
  `reference_code` varchar(18) DEFAULT NULL,
  `view_status` varchar(1) DEFAULT NULL,
  `discount` varchar(7) DEFAULT NULL,
  `invoice_no` varchar(35) DEFAULT NULL,
  `payment_charge_code` varchar(0) DEFAULT NULL,
  `vehicle_tracking_id` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voucher_heads`
--

CREATE TABLE `voucher_heads` (
  `code` varchar(18) DEFAULT NULL,
  `date` varchar(19) DEFAULT NULL,
  `voucher_type` varchar(20) DEFAULT NULL,
  `description` varchar(85) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voucher_voids`
--

CREATE TABLE `voucher_voids` (
  `id` varchar(0) DEFAULT NULL,
  `date` varchar(0) DEFAULT NULL,
  `action` varchar(0) DEFAULT NULL,
  `user_code` varchar(0) DEFAULT NULL,
  `voucher_head_code` varchar(0) DEFAULT NULL,
  `remarks` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warranty_claim_registers`
--

CREATE TABLE `warranty_claim_registers` (
  `id` varchar(0) DEFAULT NULL,
  `key_and_document_register_code` varchar(0) DEFAULT NULL,
  `add_date` varchar(0) DEFAULT NULL,
  `description` varchar(0) DEFAULT NULL,
  `employee_code` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `weekend_days`
--

CREATE TABLE `weekend_days` (
  `id` tinyint(4) DEFAULT NULL,
  `day_name` varchar(6) DEFAULT NULL,
  `branch_code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `window_stickers`
--

CREATE TABLE `window_stickers` (
  `code` varchar(0) DEFAULT NULL,
  `product_code` varchar(0) DEFAULT NULL,
  `product_name` varchar(0) DEFAULT NULL,
  `vin_chassis_no` varchar(0) DEFAULT NULL,
  `engine_number` varchar(0) DEFAULT NULL,
  `color_name` varchar(0) DEFAULT NULL,
  `mileage` varchar(0) DEFAULT NULL,
  `vehicle_type` varchar(0) DEFAULT NULL,
  `loan_available` varchar(0) DEFAULT NULL,
  `loan_details` varchar(0) DEFAULT NULL,
  `special_feature` varchar(0) DEFAULT NULL,
  `standard_feature` varchar(0) DEFAULT NULL,
  `price_type` varchar(0) DEFAULT NULL,
  `price` varchar(0) DEFAULT NULL,
  `status` varchar(0) DEFAULT NULL,
  `branch_code` varchar(0) DEFAULT NULL,
  `vehicle_tracking_id` varchar(0) DEFAULT NULL,
  `year_of_manufacture` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_business`
--
ALTER TABLE `add_business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branchs`
--
ALTER TABLE `branchs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citys`
--
ALTER TABLE `citys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `latterhead`
--
ALTER TABLE `latterhead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sales_and_service`
--
ALTER TABLE `sales_and_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vat_setup`
--
ALTER TABLE `vat_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_category`
--
ALTER TABLE `vehicle_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_document`
--
ALTER TABLE `vehicle_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_document_license`
--
ALTER TABLE `vehicle_document_license`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_model`
--
ALTER TABLE `vehicle_model`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_business`
--
ALTER TABLE `add_business`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` tinyint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `branchs`
--
ALTER TABLE `branchs`
  MODIFY `id` tinyint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `citys`
--
ALTER TABLE `citys`
  MODIFY `id` tinyint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` tinyint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` tinyint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` tinyint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` tinyint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `latterhead`
--
ALTER TABLE `latterhead`
  MODIFY `id` tinyint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` tinyint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` tinyint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_and_service`
--
ALTER TABLE `sales_and_service`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` tinyint(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vat_setup`
--
ALTER TABLE `vat_setup`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vehicle_category`
--
ALTER TABLE `vehicle_category`
  MODIFY `id` tinyint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vehicle_document`
--
ALTER TABLE `vehicle_document`
  MODIFY `id` tinyint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicle_document_license`
--
ALTER TABLE `vehicle_document_license`
  MODIFY `id` tinyint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicle_model`
--
ALTER TABLE `vehicle_model`
  MODIFY `id` tinyint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
