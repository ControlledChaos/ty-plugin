<?php
/**
 * SCallback for the Schema organization type field.
 *
 * @package    TY_Plugin
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace TY_Plugin\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$types = [

	// First option save null.
	null          => __( 'Select one&hellip;', 'ty-plugin' ),
	'Airline'     => __( 'Airline', 'ty-plugin' ),
	'Corporation' => __( 'Corporation', 'ty-plugin' ),

	// Educational Organizations.
	'EducationalOrganization' => __( 'Educational Organization', 'ty-plugin' ),
		'CollegeOrUniversity' => __( '— College or University', 'ty-plugin' ),
		'ElementarySchool'    => __( '— Elementary School', 'ty-plugin' ),
		'HighSchool'          => __( '— High School', 'ty-plugin' ),
		'MiddleSchool'        => __( '— Middle School', 'ty-plugin' ),
		'Preschool'           => __( '— Preschool', 'ty-plugin' ),
		'School'              => __( '— School', 'ty-plugin' ),

	'GovernmentOrganization'  => __( 'Government Organization', 'ty-plugin' ),

	// Local Businesses.
	'LocalBusiness' => __( 'Local Business', 'ty-plugin' ),
		'AnimalShelter' => __( '— Animal Shelter', 'ty-plugin' ),

		// Automotive Businesses.
		'AutomotiveBusiness' => __( '— Automotive Business', 'ty-plugin' ),
			'AutoBodyShop'     => __( '—— Auto Body Shop', 'ty-plugin' ),
			'AutoDealer'       => __( '—— Auto Dealer', 'ty-plugin' ),
			'AutoPartsStore'   => __( '—— Auto Parts Store', 'ty-plugin' ),
			'AutoRental'       => __( '—— Auto Rental', 'ty-plugin' ),
			'AutoRepair'       => __( '—— Auto Repair', 'ty-plugin' ),
			'AutoWash'         => __( '—— Auto Wash', 'ty-plugin' ),
			'GasStation'       => __( '—— Gas Station', 'ty-plugin' ),
			'MotorcycleDealer' => __( '—— Motorcycle Dealer', 'ty-plugin' ),
			'MotorcycleRepair' => __( '—— Motorcycle Repair', 'ty-plugin' ),

		'ChildCare'            => __( '— Child Care', 'ty-plugin' ),
		'Dentist'              => __( '— Dentist', 'ty-plugin' ),
		'DryCleaningOrLaundry' => __( '— Dry Cleaning or Laundry', 'ty-plugin' ),

		// Emergency Services.
		'EmergencyService' => __( '— Emergency Service', 'ty-plugin' ),
			'FireStation'   => __( '—— Fire Station', 'ty-plugin' ),
			'Hospital'      => __( '—— Hospital', 'ty-plugin' ),
			'PoliceStation' => __( '—— Police Station', 'ty-plugin' ),

		'EmploymentAgency' => __( '— Employment Agency', 'ty-plugin' ),

		// Entertainment Businesses.
		'EntertainmentBusiness' => __( '— Entertainment Business', 'ty-plugin' ),
			'AdultEntertainment' => __( '—— Adult Entertainment', 'ty-plugin' ),
			'AmusementPark'      => __( '—— Amusement Park', 'ty-plugin' ),
			'ArtGallery'         => __( '—— Art Gallery', 'ty-plugin' ),
			'Casino'             => __( '—— Casino', 'ty-plugin' ),
			'ComedyClub'         => __( '—— Comedy Club', 'ty-plugin' ),
			'MovieTheater'       => __( '—— Movie Theater', 'ty-plugin' ),
			'NightClub'          => __( '—— Night Club', 'ty-plugin' ),

		// Financial Services.
		'FinancialService' => __( '— Financial Service', 'ty-plugin' ),
			'AccountingService' => __( '—— Accounting Service', 'ty-plugin' ),
			'AutomatedTeller'   => __( '—— Automated Teller', 'ty-plugin' ),
			'BankOrCreditUnion' => __( '—— Bank or Credit Union', 'ty-plugin' ),
			'InsuranceAgency'   => __( '—— Insurance Agency', 'ty-plugin' ),

		// Food Establishments.
		'FoodEstablishment' => __( '— Food Establishment', 'ty-plugin' ),
			'Bakery'             => __( '—— Bakery', 'ty-plugin' ),
			'BarOrPub'           => __( '—— Bar or Pub', 'ty-plugin' ),
			'Brewery'            => __( '—— Brewery', 'ty-plugin' ),
			'CafeOrCoffeeShop'   => __( '—— Cafe or Coffee Shop', 'ty-plugin' ),
			'FastFoodRestaurant' => __( '—— Fast Food Restaurant', 'ty-plugin' ),
			'IceCreamShop'       => __( '—— Ice Cream Shop', 'ty-plugin' ),
			'Restaurant'         => __( '—— Restaurant', 'ty-plugin' ),
			'Winery'             => __( '—— Winery', 'ty-plugin' ),

		// Government Offices.
		'GovernmentOffice' => __( '— Government Office', 'ty-plugin' ),
			'PostOffice' => __( '—— Post Office', 'ty-plugin' ),

		// Health and Beauty Businesses.
		'HealthAndBeautyBusiness' => __( '— Health and Beauty Business', 'ty-plugin' ),
			'BeautySalon'  => __( '—— Beauty Salon', 'ty-plugin' ),
			'DaySpa'       => __( '—— Day Spa', 'ty-plugin' ),
			'HairSalon'    => __( '—— Hair Salon', 'ty-plugin' ),
			'HealthClub'   => __( '—— Health Club', 'ty-plugin' ),
			'NailSalon'    => __( '—— Nail Salon', 'ty-plugin' ),
			'TattooParlor' => __( '—— Tattoo Parlor', 'ty-plugin' ),

		// Home and Construction Businesses.
		'HomeAndConstructionBusiness' => __( '— Home and Construction Business', 'ty-plugin' ),
			'Electrician'       => __( '—— Electrician', 'ty-plugin' ),
			'GeneralContractor' => __( '—— General Contractor', 'ty-plugin' ),
			'HVACBusiness'      => __( '—— HVAC Business', 'ty-plugin' ),
			'HousePainter'      => __( '—— House Painter', 'ty-plugin' ),
			'Locksmith'         => __( '—— Locksmith', 'ty-plugin' ),
			'MovingCompany'     => __( '—— MovingCompany', 'ty-plugin' ),
			'Plumber'           => __( '—— Plumber', 'ty-plugin' ),
			'RoofingContractor' => __( '—— Roofing Contractor', 'ty-plugin' ),

		'InternetCafe' => __( '— Internet Cafe', 'ty-plugin' ),

		// Legal Services.
		'LegalService' => __( '— Legal Service', 'ty-plugin' ),
			'Attorney' => __( '—— Attorney', 'ty-plugin' ),
			'Notary'   => __( '—— Notary', 'ty-plugin' ),

		'Library' => __( '— Library', 'ty-plugin' ),

		// Lodging Businesses.
		'LodgingBusiness' => __( '— Lodging Business', 'ty-plugin' ),
			'BedAndBreakfast' => __( '—— Bed and Breakfast', 'ty-plugin' ),
			'Campground'      => __( '—— Campground', 'ty-plugin' ),
			'Hostel'          => __( '—— Hostel', 'ty-plugin' ),
			'Hotel'           => __( '—— Hotel', 'ty-plugin' ),
			'Motel'           => __( '—— Motel', 'ty-plugin' ),
			'Resort'          => __( '—— Resort', 'ty-plugin' ),

		'ProfessionalService' => __( '— Professional Service', 'ty-plugin' ),
		'RadioStation'        => __( '— Radio Station', 'ty-plugin' ),
		'RealEstateAgent'     => __( '— Real Estate Agent', 'ty-plugin' ),
		'RecyclingCenter'     => __( '— Recycling Center', 'ty-plugin' ),
		'SelfStorage'         => __( '— Self Storage', 'ty-plugin' ),
		'ShoppingCenter'      => __( '— Shopping Center', 'ty-plugin' ),

		// Sports Activity Locations.
		'SportsActivityLocation' => __( '— Sports Activity Location', 'ty-plugin' ),
			'BowlingAlley'       => __( '—— Bowling Alley', 'ty-plugin' ),
			'ExerciseGym'        => __( '—— Exercise Gym', 'ty-plugin' ),
			'GolfCourse'         => __( '—— Golf Course', 'ty-plugin' ),
			'HealthClub'         => __( '—— Health Club', 'ty-plugin' ),
			'PublicSwimmingPool' => __( '—— Public Swimming Pool', 'ty-plugin' ),
			'SkiResort'          => __( '—— Ski Resort', 'ty-plugin' ),
			'SportsClub'         => __( '—— Sports Club', 'ty-plugin' ),
			'StadiumOrArena'     => __( '—— Stadium or Arena', 'ty-plugin' ),
			'TennisComplex'      => __( '—— Tennis Complex', 'ty-plugin' ),

		// Store types.
		'Store' => __( '— Store', 'ty-plugin' ),
			'AutoPartsStore'      => __( '—— Auto Parts Store', 'ty-plugin' ),
			'BikeStore'           => __( '—— Bike Store', 'ty-plugin' ),
			'BookStore'           => __( '—— Book Store', 'ty-plugin' ),
			'ClothingStore'       => __( '—— Clothing Store', 'ty-plugin' ),
			'ComputerStore'       => __( '—— Computer Store', 'ty-plugin' ),
			'ConvenienceStore'    => __( '—— Convenience Store', 'ty-plugin' ),
			'DepartmentStore'     => __( '—— Department Store', 'ty-plugin' ),
			'ElectronicsStore'    => __( '—— Electronics Store', 'ty-plugin' ),
			'Florist'             => __( '—— Florist', 'ty-plugin' ),
			'FurnitureStore'      => __( '—— Furniture Store', 'ty-plugin' ),
			'GardenStore'         => __( '—— Garden Store', 'ty-plugin' ),
			'GroceryStore'        => __( '—— Grocery Store', 'ty-plugin' ),
			'HardwareStore'       => __( '—— Hardware Store', 'ty-plugin' ),
			'HobbyShop'           => __( '—— Hobby Shop', 'ty-plugin' ),
			'HomeGoodsStore'      => __( '—— Home Goods Store', 'ty-plugin' ),
			'JewelryStore'        => __( '—— Jewelry Store', 'ty-plugin' ),
			'LiquorStore'         => __( '—— Liquor Store', 'ty-plugin' ),
			'MensClothingStore'   => __( '—— Mens Clothing Store', 'ty-plugin' ),
			'MobilePhoneStore'    => __( '—— Mobile Phone Store', 'ty-plugin' ),
			'MovieRentalStore'    => __( '—— Movie Rental Store', 'ty-plugin' ),
			'MusicStore'          => __( '—— Music Store', 'ty-plugin' ),
			'OfficeEquipmentStore'=> __( '—— Office Equipment Store', 'ty-plugin' ),
			'OutletStore'         => __( '—— Outlet Store', 'ty-plugin' ),
			'PawnShop'            => __( '—— Pawn Shop', 'ty-plugin' ),
			'PetStore'            => __( '—— Pet Store', 'ty-plugin' ),
			'ShoeStore'           => __( '—— Shoe Store', 'ty-plugin' ),
			'SportingGoodsStore'  => __( '—— Sporting Goods Store', 'ty-plugin' ),
			'TireShop'            => __( '—— Tire Shop', 'ty-plugin' ),
			'ToyStore'            => __( '—— Toy Store', 'ty-plugin' ),
			'WholesaleStore'      => __( '—— Wholesale Store', 'ty-plugin' ),

		'TelevisionStation'        => __( '— Television Station', 'ty-plugin' ),
		'TouristInformationCenter' => __( '— Tourist Information Center', 'ty-plugin' ),
		'TravelAgency'             => __( '— Travel Agency', 'ty-plugin' ),

	'MedicalOrganization' => __( 'Medical Organization', 'ty-plugin' ),
	'NGO'                 => __( 'NGO (Non-Governmental Organization', 'ty-plugin' ),
	'PerformingGroup'     => __( 'Performing Group', 'ty-plugin' ),
	'SportsOrganization'  => __( 'Sports Organization', 'ty-plugin' )
];

$options = get_option( 'schema_org_type' );

$html = '<p><select id="schema_org_type" name="schema_org_type">';

foreach( $types as $type => $value ) {

	$selected = ( $options == $type ) ? 'selected="' . esc_attr( 'selected' ) . '"' : '';

	$html .= '<option value="' . esc_attr( $type ) . '" ' . $selected . '>' . esc_html( $value ) . '</option>';

}

$html .= '</select>';
$html .= sprintf(
	'<label for="schema_org_type"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
	$args[0],
	esc_attr( esc_url( 'https://schema.org/docs/full.html#C.Organization' ) ),
	esc_attr( __( 'Read documentation for organization types', 'ty-plugin' ) )
);
$html .= '</p>';

echo $html;