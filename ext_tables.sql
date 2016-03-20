#
# Table structure for table 'tt_address'
#
CREATE TABLE tt_address (
	tx_odsosm_lon decimal(9,6) NOT NULL DEFAULT '0.000000',
	tx_odsosm_lat decimal(8,6) NOT NULL DEFAULT '0.000000'
);

#
# Table structure for table 'tt_address_group'
#
CREATE TABLE tt_address_group (
	tx_odsosm_marker int(10) unsigned NOT NULL DEFAULT '0'
);
