-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactusid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(400) NOT NULL,
  `message` varchar(4000) NOT NULL,
  `createddate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` int(11) NOT NULL,
  `FirstName` varchar(300) NOT NULL,
  `LastName` varchar(300) NOT NULL,
  `Cell1` varchar(50) NOT NULL,
  `Cell2` varchar(50) NOT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `ShippingAddress` varchar(600) NOT NULL,
  `City` varchar(200) NOT NULL,
  `NearMostFamousPlace` varchar(400) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `CODAmount` decimal(10,0) NOT NULL,
  `ShippingCost` decimal(10,0) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdelete` bit(1) NOT NULL DEFAULT b'0',
  `OrderStatusId` int(11) NOT NULL DEFAULT '0',
  `OrderNotes` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `OrderStatusId` int(11) NOT NULL,
  `OrderStatus` varchar(200) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductId` int(11) NOT NULL,
  `ProductName` varchar(400) NOT NULL,
  `Slug` varchar(600) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `SalePrice` decimal(10,0) NOT NULL,
  `SaleStartDate` date DEFAULT NULL,
  `SaleEndDate` date DEFAULT NULL,
  `ProductCatId` int(11) NOT NULL,
  `ShortDescription` varchar(1000) DEFAULT NULL,
  `LongDescription` varchar(5000) DEFAULT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsDelete` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productcat`
--

CREATE TABLE `productcat` (
  `ProductCatId` int(11) NOT NULL,
  `CatName` varchar(400) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productgallery`
--

CREATE TABLE `productgallery` (
  `ProductGalleryId` int(11) NOT NULL,
  `ImagePath` varchar(600) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `IsFeatured` bit(1) NOT NULL,
  `IsDelete` bit(1) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tcspayment`
--

CREATE TABLE `tcspayment` (
  `TcsPaymentId` int(11) NOT NULL,
  `CNNumber` varchar(100) NOT NULL,
  `BookingDate` datetime NOT NULL,
  `CODAmount` decimal(10,0) NOT NULL,
  `CODAmountPeriod` varchar(200) NOT NULL,
  `ShippingCharges` decimal(10,0) NOT NULL,
  `ShippingChargesPeriod` varchar(200) NOT NULL,
  `DeliveryStatus` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactusid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`OrderStatusId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`),
  ADD KEY `Slug` (`Slug`);

--
-- Indexes for table `productcat`
--
ALTER TABLE `productcat`
  ADD PRIMARY KEY (`ProductCatId`);

--
-- Indexes for table `productgallery`
--
ALTER TABLE `productgallery`
  ADD PRIMARY KEY (`ProductGalleryId`);

--
-- Indexes for table `tcspayment`
--
ALTER TABLE `tcspayment`
  ADD PRIMARY KEY (`TcsPaymentId`),
  ADD UNIQUE KEY `CNNumber` (`CNNumber`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactusid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `OrderStatusId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `productcat`
--
ALTER TABLE `productcat`
  MODIFY `ProductCatId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `productgallery`
--
ALTER TABLE `productgallery`
  MODIFY `ProductGalleryId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tcspayment`
--
ALTER TABLE `tcspayment`
  MODIFY `TcsPaymentId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
