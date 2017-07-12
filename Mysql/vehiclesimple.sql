--
-- Database: `vehiclesimple`
--

-- --------------------------------------------------------

--
-- Table structure for table `vehicule`
--

CREATE TABLE `vehicule` (
  `manufacturer` text NOT NULL,
  `model` text NOT NULL,
  `type_v` text NOT NULL,
  `usage_v` text NOT NULL,
  `license_plate` varchar(90) NOT NULL,
  `weight_category` text NOT NULL,
  `no_seats` text NOT NULL,
  `has_boot` text NOT NULL,
  `has_trailer` text NOT NULL,
  `owner_name` text NOT NULL,
  `owner_company` text NOT NULL,
  `owner_profession` text NOT NULL,
  `transmission` text NOT NULL,
  `colour` text NOT NULL,
  `is_hgv` text NOT NULL,
  `no_doors` int(90) NOT NULL,
  `sunroof` text NOT NULL,
  `has_gps` text NOT NULL,
  `no_wheels` text NOT NULL,
  `engine_cc` text NOT NULL,
  `fuel_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`license_plate`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
