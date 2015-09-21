<?php
/**
 * Define autoloader
 * @param string $class_name
 */
function __autoload($class_name){
    include 'class.' . $class_name . '.inc';
}

echo '<h2>Instantiating AddressResidences</h2>';
$address_residence = new AddressResidence();

echo '<h2>Setting properties ...</h2>';
$address_residence->street_address_1 = '555 Fake Street';
$address_residence->city_name = 'Townsville';
$address_residence->subdivision_name = 'State';
$address_residence->postal_code = '112345';
$address_residence->country_name = 'United States of America';

echo $address_residence;
echo '<tt><pre>' . var_export($address_residence, TRUE) .'</pre></tt>';

echo '<h2>Testing Address __construct with an array</h2>';
$addres_business = new AddressBusiness(array(
    'street_address_1'=> '123 Phony Ave',
    'city_name' => 'Villageland',
    'subdivision_name' => 'Region',
    'country_name' => 'Canada'
));
echo $addres_business;
echo '<tt><pre>' . var_export($addres_business, TRUE) .'</pre></tt>';

echo '<h2>Instantiating AddressPark</h2>';
$address_park = new AddressPark(array(
    'street_address_1' => '789 Missing Circle',
    'street_address_2' => 'Suite 0',
    'city_name' => 'Hamlet',
    'subdivision_name' =>'Territory',
));
echo $address_park;
echo '<tt><pre>' . var_export($address_park, TRUE).'</pre></tt>';

echo '<h2>Loading from database</h2>';
$address_db= Address::load(1);
echo '<tt><pre>' . var_export($address_db, TRUE) .'</pre></tt>';