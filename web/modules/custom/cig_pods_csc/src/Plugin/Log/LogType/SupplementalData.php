<?php

namespace Drupal\cig_pods_csc\Plugin\Log\LogType;

use Drupal\farm_entity\Plugin\Log\LogType\FarmLogType;
use Drupal\farm_field\FarmFieldFactory;

/**
 * Provides the Supplemental Data log type.
 *
 * @LogType(
 * id = "supplemental_data",
 * label = @Translation("Supplemental Data"),
 * )
 */
class SupplementalData extends FarmLogType {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {

    $fields = parent::buildFieldDefinitions();

    $field_info = [
      'field_id' => [
        'type' => 'entity_reference',
        'label' => 'Supplemental Data Environmental Benefits Field ID',
        'description' => 'Supplemental Data Environmental Benefits Field ID',
		    'target_type' => 'asset',
		    'target_bundle' => 'field_enrollment',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p311_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 311 Species Category',
        'description' => 'Supplemental Data 311 Species Category',
        'allowed_values' => [
          'Coniferous Trees' => t(string: 'Coniferous Trees'),
          'Deciduous Trees' => t(string: 'Deciduous Trees'),
          'Shrubs' => t(string: 'Shrubs'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p311_species_density' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data Species Density',
        'description' => 'Supplemental Data Species Density',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p366_prior_waste_storage_system' => [
        'type' => 'entity_reference',
        'label' => 'Supplemental Data Waste storage system prior to installing anaerobic digester',
        'description' => 'Supplemental Data Waste storage system prior to installing anaerobic digester',
		    'target_type' => 'taxonomy_term',
		    'target_bundle' => 'waste_storage_system',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p366_digester_type' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Digester type',
        'description' => 'Supplemental Data Digester type',
		    'allowed_values' => [
          'Covered lagoon with energy generation' => t(string: 'Covered lagoon with energy generation'),
          'Covered lagoon with flaring' => t(string: 'Covered lagoon with flaring'),
          'Covered lagoon (no energy generation or flaring)' => t(string: 'Covered lagoon (no energy generation or flaring)'),
          'Complex mix with energy generation' => t(string: 'Complex mix with energy generation'),
          'Plug flow with energy generation' => t(string: 'Plug flow with energy generation'),
          'Other(specify)' => t(string: 'Other(specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p366_digester_type_other' => [
        'type' => 'string',
        'label' => 'Supplemental Data Other digester type',
        'description' => 'Supplemental Data Other digester type',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p366_addtl_feedback_source' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Additional feedstock source',
        'description' => 'Supplemental Data Additional feedstock source',
		    'allowed_values' => [
          'Food waste' => t(string: 'Food waste'),
          'Straw or bedding' => t(string: 'Straw or bedding'),
          'Wastewater' => t(string: 'Wastewater'),
          'Other(Specify)' => t(string: 'Other(Specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p366_addtl_feedback_source_other' => [
        'type' => 'string',
        'label' => 'Supplemental Data Other additional feedstock source',
        'description' => 'Supplemental Data Other additional feedstock source',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p372_prior_fuel_type' => [
        'type' => 'entity_reference',
        'label' => 'Supplemental Data 372 Fuel type before installation',
        'description' => 'Supplemental Data 372 Fuel type before installation',
		    'target_type' => 'taxonomy_term',
		    'target_bundle' => 'fuel_type',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p372_prior_fuel_type_other' => [
        'type' => 'string',
        'label' => 'Supplemental Data Other 372 fuel type before installation',
        'description' => 'Supplemental Data Other 372 fuel type before installation',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p372_prior_fuel_amount' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data Fuel amount before installation',
        'description' => 'Supplemental Data Fuel amount before installation',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p372_prior_fuel_amount_unit' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Fuel amount unit before installation',
        'description' => 'Supplemental Data Fuel amount unit before installation',
		    'allowed_values' => [
          'Cubic feet (natural gas)' => t(string: 'Cubic feet (natural gas)'),
          'Gallons (diesel, gasoline, propane, LPG, kerosene)' => t(string: 'Gallons (diesel, gasoline, propane, LPG, kerosene)'),
          'Kilowatt-hours (electricity)' => t(string: 'Kilowatt-hours (electricity)'),
          'Pounds (wood, coal)' => t(string: 'Pounds (wood, coal)'),
          'Other(Specify)' => t(string: 'Other(Specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p372_prior_fuel_amount_unit_other' => [
        'type' => 'string',
        'label' => 'Supplemental Data Other fuel amount unit before installation',
        'description' => 'Supplemental Data Other fuel amount unit before installation',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p372_fuel_type_after' => [
        'type' => 'entity_reference',
        'label' => 'Supplemental Data 372 Fuel type after installation',
        'description' => 'Supplemental Data 372 Fuel type after installation',
        'target_type' => 'taxonomy_term',
		    'target_bundle' => 'fuel_type',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p372_fuel_type_after_other' => [
        'type' => 'string',
        'label' => 'Supplemental Data Other 372 fuel type after installation',
        'description' => 'Supplemental Data Other 372 fuel type after installation',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p372_fuel_amount_after' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data Fuel amount after installation',
        'description' => 'Supplemental Data Fuel amount after installation',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p372_fuel_amount_unit_after' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Fuel amount unit after installation',
        'description' => 'Supplemental Data Fuel amount unit after installation',
		    'allowed_values' => [
          'Cubic feet (natural gas)' => t(string: 'Cubic feet (natural gas)'),
          'Gallons (diesel, gasoline, propane, LPG, kerosene)' => t(string: 'Gallons (diesel, gasoline, propane, LPG, kerosene)'),
          'Kilowatt-hours (electricity)' => t(string: 'Kilowatt-hours (electricity)'),
          'Pounds (wood, coal)' => t(string: 'Pounds (wood, coal)'),
          'Other(Specify)' => t(string: 'Other(Specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p372_fuel_amount_unit_after_other' => [
        'type' => 'string',
        'label' => 'Supplemental Data Other fuel amount unit after installation',
        'description' => 'Supplemental Data Other fuel amount unit after installation',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p327_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 327 Species category',
        'description' => 'Supplemental Data 327 Species category',
		    'allowed_values' => [
          'Brassicas' => t(string: 'Brassicas'),
          'Grasses' => t(string: 'Grasses'),
          'Legumes' => t(string: 'Legumes'),
          'Non-legume broadleaves' => t(string: 'Non-legume broadleaves'),
          'Shrubs' => t(string: 'Shrubs'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p328_conservation_crop_type' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Conservation Crop Type',
        'description' => 'Supplemental Data Conservation Crop Type',
		    'allowed_values' => [
          'Brassicas' => t(string: 'Brassicas'),
          'Broadleaf' => t(string: 'Broadleaf'),
          'Cool season' => t(string: 'Cool season'),
          'Grass, legume' => t(string: 'Grass, legume'),
          'Warm season' => t(string: 'Warm season'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p328_change_implemented' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Change implemented',
        'description' => 'Supplemental Data Change implemented',
		    'allowed_values' => [
          'Added perennial crop' => t(string: 'Added perennial crop'),
          'Broadleaf' => t(string: 'Broadleaf'),
          'Reduced fallow period' => t(string: 'Reduced fallow period'),
          'Both' => t(string: 'Both'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p328_rotation_tillage_type' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Conservation crop rotation tillage type',
        'description' => 'Supplemental Data Conservation crop rotation tillage type',
		    'allowed_values' => [
          'Conventional (plow, chisel, disk)' => t(string: 'Conventional (plow, chisel, disk)'),
          'No-till direct seed' => t(string: 'No-till direct seed'),
          'Reduced till' => t(string: 'Reduced till'),
          'Strip till' => t(string: 'Strip till'),
          'None' => t(string: 'None'),
          'other (specify)' => t(string: 'other (specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p328_rotation_tillage_type_other' => [
        'type' => 'string',
        'label' => 'Supplemental Data Other conservation crop rotation tillage type',
        'description' => 'Supplemental Data Other conservation crop rotation tillage type',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p328_total_rotation_length' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data Total conservation crop rotation length in days',
        'description' => 'Supplemental Data Total conservation crop rotation length in days',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p332_strip_width' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data Strip width (feet)',
        'description' => 'Supplemental Data Strip width (feet)',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p332_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 332 Species category',
        'description' => 'Supplemental 332 Data Species category',
		    'allowed_values' => [
          'Grasses' => t(string: 'Grasses'),
          'Forbs' => t(string: 'Forbs'),
          'Mix' => t(string: 'Mix'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p340_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 340 Species category',
        'description' => 'Supplemental Data 340 Species category',
		    'allowed_values' => [
          'Brassicas' => t(string: 'Brassicas'),
          'Forbs' => t(string: 'Forbs'),
          'Grasses' => t(string: 'Grasses'),
          'Legume' => t(string: 'Legume'),
          'Non-legume broadleaves' => t(string: 'Non-legume broadleaves'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p340_planned_management' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Cover crop planned management',
        'description' => 'Supplemental Data Cover crop planned management',
		    'allowed_values' => [
          'Grazing' => t(string: 'Grazing'),
          'Haying' => t(string: 'Haying'),
          'Termination' => t(string: 'Termination'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p340_termination_method' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Cover crop termination method',
        'description' => 'Supplemental Data Cover crop termination method',
		    'allowed_values' => [
          'Burning' => t(string: 'Burning'),
          'Herbicide application' => t(string: 'Herbicide application'),
          'Incorporation, mowing' => t(string: 'Incorporation, mowing'),
          'Rolling/crimping' => t(string: 'Rolling/crimping'),
          'Winter kill/frost ' => t(string: 'Winter kill/frost'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p342_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 342 Species category',
        'description' => 'Supplemental Data 342 Species category',
		    'allowed_values' => [
          'Grass' => t(string: 'Grass'),
          'Grass legume/forb mix' => t(string: 'Grass legume/forb mix'),
          'Herbaceous woody mix' => t(string: 'Herbaceous woody mix'),
          'Perennial or reseeding' => t(string: 'Perennial or reseeding'),
          'Shrubs ' => t(string: 'Shrubs'),
          'Trees' => t(string: 'Trees'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p592_crude_protein_percent' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data Crude protein (Percent)',
        'description' => 'Supplemental Crude protein (Percent)',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p592_fat_percent' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data Fat (percent)',
        'description' => 'Supplemental Fat (percent)',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p592_feed_additives' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Feed additives/supplements',
        'description' => 'Supplemental Data Feed additives/supplements',
		    'allowed_values' => [
          'Chemical' => t(string: 'Chemical'),
          'Edible oils/fats' => t(string: 'Edible oils/fats'),
          'Seaweed/kelp' => t(string: 'Seaweed/kelp'),
          'Other(specify)' => t(string: 'Other(specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p592_feed_additives_other' => [
        'type' => 'string',
        'label' => 'Supplemental Data Other Feed additives/supplements',
        'description' => 'Supplemental Other feed additives/supplements',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p386_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 386 Species category',
        'description' => 'Supplemental Data 386 Species category',
		    'allowed_values' => [
          'Forbs,' => t(string: 'Forbs'),
          'Grasses' => t(string: 'Grasses'),
          'Mix' => t(string: 'Mix'),
          'Shrubs' => t(string: 'Shrubs'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p393_strip_width' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data Strip width (Feet)',
        'description' => 'Supplemental Data Strip width (Feet)',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p393_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 393 Species category',
        'description' => 'Supplemental Data 393 Species category',
		    'allowed_values' => [
          'Forbs,' => t(string: 'Forbs'),
          'Grasses' => t(string: 'Grasses'),
          'Mix' => t(string: 'Mix'),
          'Shrubs' => t(string: 'Shrubs'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p379_land_use_previous_years' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Land use in previous years',
        'description' => 'Supplemental Data Land use in previous years',
		    'allowed_values' => [
          'Forest,' => t(string: 'Forest'),
          'Multi-story cropping' => t(string: 'Multi-story cropping'),
          'Row crops' => t(string: 'Row crops'),
          'Pasture/grazing land' => t(string: 'Pasture/grazing land'),
          'Other agroforestry ' => t(string: 'Other agroforestry '),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p666_implementation_purpose' => [
        'type' => 'entity_reference',
        'label' => 'Supplemental Data Purpose for implementation',
        'description' => 'Supplemental Data Purpose for implementation',
		    'target_type' => 'taxonomy_term',
		    'target_bundle' => '666_implementation_purpose',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p412_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 412 Species category',
        'description' => 'Supplemental Data 412 Species category',
		    'allowed_values' => [
          'Flowering plants,' => t(string: 'Flowering plants'),
          'Forbs' => t(string: 'Forbs'),
          'Grasses' => t(string: 'Grasses'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p422_species_density' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 422 Species category',
        'description' => 'Supplemental Data 422 Species category',
		    'allowed_values' => [
          'Grasses' => t(string: 'Grasses'),
          'Shrubs' => t(string: 'Shrubs'),
          'Trees' => t(string: 'Trees'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p422_species_density' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data 422 Species density',
        'description' => 'Supplemental Data 422 Species density',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p603_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 603 Species category',
        'description' => 'Supplemental Data 603 Species category',
		    'allowed_values' => [
          'Forbs,' => t(string: 'Forbs'),
          'Grasses' => t(string: 'Grasses'),
          'Mix' => t(string: 'Mix'),
          'Shrubs' => t(string: 'Shrubs'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p603_barrier_width' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data Barrier Width',
        'description' => 'Supplemental Data Barrier Width',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p603_number_of_rows' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data Number of Rows',
        'description' => 'Supplemental Data Number of Rows',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p484_mulch_type' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Mulch Type',
        'description' => 'Supplemental Data Mulch Type',
		    'allowed_values' => [
          'Gravel,' => t(string: 'Gravel'),
          'Natural' => t(string: 'Natural'),
          'Synthetic' => t(string: 'Synthetic'),
          'Wood' => t(string: 'Wood'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p484_mulch_coverage' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data Mulch cover',
        'description' => 'Supplemental Data Mulch cover',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p590_nutrient_type' => [
        'type' => 'entity_reference',
        'label' => 'Supplemental Data Nutrient type with CPS 590',
        'description' => 'Supplemental Data Nutrient type with CPS 590',
		    'target_type' => 'taxonomy_term',
		    'target_bundle' => 'nutrient_type',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p590_application_method' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Nutrient application method with CPS 590',
        'description' => 'Supplemental Data Nutrient application method with CPS 590',
		    'allowed_values' => [
          'Banded,' => t(string: 'Banded'),
          'Broadcast' => t(string: 'Broadcast'),
          'Injection' => t(string: 'Injection'),
          'Irrigation' => t(string: 'Irrigation'),
          'Surface application' => t(string: 'Surface application'),
          'Surface application with tillage' => t(string: 'Surface application with tillage'),
          'Variable rate' => t(string: 'Variable rate'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p590_prior_application_method' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Nutrient application method in the previous year',
        'description' => 'Supplemental Data Nutrient application method in the previous year',
		    'allowed_values' => [
          'Banded,' => t(string: 'Banded'),
          'Broadcast' => t(string: 'Broadcast'),
          'Injection' => t(string: 'Injection'),
          'Irrigation' => t(string: 'Irrigation'),
          'Surface application' => t(string: 'Surface application'),
          'Surface application with tillage' => t(string: 'Surface application with tillage'),
          'Variable rate' => t(string: 'Variable rate'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p590_application_timing' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Nutrient application timing with CPS 590',
        'description' => 'Supplemental Data Nutrient application timing with CPS 590',
		    'allowed_values' => [
          'Single pre-planting' => t(string: 'Single pre-planting'),
          'Broadcast' => t(string: 'Broadcast'),
          'Single post-planning' => t(string: 'Single post-planning'),
          'Split pre- and post-planting' => t(string: 'Split pre- and post-planting'),
          'Split post-planting' => t(string: 'Split post-planting'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p590_prior_application_timing' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Nutrient application timing in the previous year',
        'description' => 'Supplemental Data Nutrient application timing in the previous year',
		    'allowed_values' => [
          'Single pre-planting' => t(string: 'Single pre-planting'),
          'Broadcast' => t(string: 'Broadcast'),
          'Single post-planning' => t(string: 'Single post-planning'),
          'Split pre- and post-planting' => t(string: 'Split pre- and post-planting'),
          'Split post-planting' => t(string: 'Split post-planting'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p590_application_rate' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data Nutrient application rate with CPS 590',
        'description' => 'Supplemental Data Nutrient application rate with CPS 590',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p590_application_rate_unit' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Nutrient application rate unit with CPS 590',
        'description' => 'Supplemental Data Nutrient application rate unit with CPS 590',
		    'allowed_values' => [
          'Gallons per acre' => t(string: 'Gallons per acre'),
          'Pounds per acre' => t(string: 'Pounds per acre'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p590_application_rate_change' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Nutrient application rate change',
        'description' => 'Supplemental Data Nutrient application rate change',
		    'allowed_values' => [
          'Decrease compared to previous year' => t(string: 'Decrease compared to previous year'),
          'Increase compare to previous year, no change' => t(string: 'Increase compare to previous year, no change'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p512_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Species Category',
        'description' => 'Supplemental Data Species Category',
		    'allowed_values' => [
          'Cool-season broadleaf' => t(string: 'Cool-season broadleaf'),
          'Cool-season grass' => t(string: 'Cool-season grass'),
          'Warm-season broadleaf' => t(string: 'Warm-season broadleaf'),
          'Warm-season grass' => t(string: 'Warm-season grass'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p512_termination_process' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Termination process',
        'description' => 'Supplemental Data Termination process',
		    'allowed_values' => [
          'Grazing' => t(string: 'Grazing'),
          'Haying' => t(string: 'Haying'),
          'Other(Specify)' => t(string: 'Other(Specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p512_other_termination_process' => [
        'type' => 'string',
        'label' => 'Supplemental Data Other termination process',
        'description' => 'Supplemental Data Other termination process',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p528_grazing_type' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Grazing type',
        'description' => 'Supplemental Data Grazing type',
		    'allowed_values' => [
          'Cell grazing' => t(string: 'Cell grazing'),
          'Deferred rotation' => t(string: 'Deferred rotation'),
          'Management rotation' => t(string: 'Warm-season broadleaf'),
          'Rest-rotation' => t(string: 'Rest-rotation'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p550_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 550 Species category',
        'description' => 'Supplemental Data 550 Species category',
		    'allowed_values' => [
          'Forbs' => t(string: 'Forbs'),
          'Grasses' => t(string: 'Grasses'),
          'Legumes' => t(string: 'Legumes'),
          'Shrubs' => t(string: 'Shrubs'),
          'Trees' => t(string: 'Trees'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p329_surface_disturbance' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 329 Surface Disturbance',
        'description' => 'Supplemental Data 329 Surface Disturbance',
		    'allowed_values' => [
          'None' => t(string: 'None'),
          'Seed row only' => t(string: 'Seed row only'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p345_surface_disturbance' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 345 Surface Disturbance',
        'description' => 'Supplemental Data 345 Surface Disturbance',
		    'allowed_values' => [
          'None' => t(string: 'None'),
          'Seed row/ridge tillage for planting' => t(string: 'Seed row/ridge tillage for planting'),
          'Shallow across most of the soil surface' => t(string: 'Shallow across most of the soil surface'),
          'Vertical/mulch' => t(string: 'Vertical/mulch'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p391_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 391 Species Category',
        'description' => 'Supplemental Data 391 Species Category',
		    'allowed_values' => [
          'Coniferous tress' => t(string: 'Coniferous tress'),
          'Deciduous trees' => t(string: 'Deciduous trees'),
          'Shrubs' => t(string: 'Shrubs'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p391_species_density' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data 391 Species Density',
        'description' => 'Supplemental Data 391 Species Density',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p390_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 390 Species Category',
        'description' => 'Supplemental Data 390 Species Category',
		    'allowed_values' => [
          'Ferns' => t(string: 'Ferns'),
          'Forbs' => t(string: 'Forbs'),
          'Grasses' => t(string: 'Grasses'),
          'Legumes' => t(string: 'Legumes'),
          'Rushes' => t(string: 'Rushes'),
          'Sedges' => t(string: 'Sedges'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p367_roof_cover_type' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Roof/cover type',
        'description' => 'Supplemental Data Roof/cover type',
		    'allowed_values' => [
          'Concrete' => t(string: 'Concrete'),
          'Flexible geomembrane' => t(string: 'Flexible geomembrane'),
          'Grasses' => t(string: 'Grasses'),
          'Metal' => t(string: 'Metal'),
          'Timber' => t(string: 'Timber'),
          'Other (specify)' => t(string: 'Other (specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p367_roof_cover_type_other' => [
        'type' => 'string',
        'label' => 'Supplemental Data Other roof/cover type',
        'description' => 'Supplemental Data Other roof/cover type',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p381_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 381 Species category',
        'description' => 'Supplemental Data 381 Species category',
		    'allowed_values' => [
          'Coniferous trees' => t(string: 'Coniferous trees'),
          'Deciduous trees' => t(string: 'Deciduous trees'),
          'Forage' => t(string: 'Forage'),
          'Shrubs' => t(string: 'Shrubs'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p381_species_density' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data 381 Species density',
        'description' => 'Supplemental Data 381 Species density',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p585_strip_width' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data Strip width (Feet)',
        'description' => 'Supplemental Data Strip width (Feet)',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p585_crop_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Crop category',
        'description' => 'Supplemental Data Crop category',
		    'allowed_values' => [
          'Erosion resistant crops' => t(string: 'Erosion resistant crops'),
          'Sediment trapping crops' => t(string: 'Sediment trapping crops'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p585_number_of_strips' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data number of strips',
        'description' => 'Supplemental Data number of strips',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p612_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 612 Species Category',
        'description' => 'Supplemental Data 612 Species Category',
		    'allowed_values' => [
          'Coniferous trees' => t(string: 'Coniferous trees'),
          'Deciduous trees' => t(string: 'Deciduous trees'),
          'Shrubs' => t(string: 'Shrubs'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p612_species_density' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data 612 Species density',
        'description' => 'Supplemental Data 612 Species density',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p601_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 601 Species Category',
        'description' => 'Supplemental Data 601 Species Category',
		    'allowed_values' => [
          'Grasses' => t(string: 'Grasses'),
          'Grass forb mix' => t(string: 'Grass forb mix'),
          'Grass legume mix' => t(string: 'Grass legume mix'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p601_barrier_width' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data Barrier Width (feet)',
        'description' => 'Supplemental Data Barrier Width (feet)',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p632_separation_type' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Separation type',
        'description' => 'Supplemental Data Separation type',
		    'allowed_values' => [
          'Chemical (e.g., salts, polymers)' => t(string: 'Chemical (e.g., salts, polymers)'),
          'Mechanical (e.g., screens, presses)' => t(string: 'Mechanical (e.g., screens, presses)'),
          'Settling basin' => t(string: 'Settling basin'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p632_use_of_solids' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Most common use of solids',
        'description' => 'Supplemental Data Most common use of solids',
		    'allowed_values' => [
          'Bedding' => t(string: 'Bedding'),
          'Field applied' => t(string: 'Field applied'),
          'Other(specify)' => t(string: 'Other(specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p632_use_of_solids_other' => [
        'type' => 'string',
        'label' => 'Supplemental Data Other most common use of solids',
        'description' => 'Supplemental Data SOther most common use of solids',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p313_prior_waste_storage_system' => [
        'type' => 'entity_reference',
        'label' => 'Supplemental Data Waste storage system prior to installing your waste storage facility',
        'description' => 'Supplemental Data Waste storage system prior to installing your waste storage facility',
		    'target_type' => 'taxonomy_term',
		    'target_bundle' => 'waste_storage_system',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p629_treatment_type' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data Treatment Type',
        'description' => 'Supplemental Data Treatment Type',
		    'allowed_values' => [
          'Biological' => t(string: 'Biological'),
          'Chemical' => t(string: 'Chemical'),
          'Mechanical' => t(string: 'Mechanical'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p359_prior_waste_storage_system' => [
        'type' => 'entity_reference',
        'label' => 'Supplemental Data Waste storage system prior to installing waste treatment lagoon',
        'description' => 'Supplemental Data Waste storage system prior to installing waste treatment lagoon',
		    'target_type' => 'taxonomy_term',
		    'target_bundle' => 'waste_storage_system',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p359_lagoon_cover_or_crust' => [
        'type' => 'boolean',
        'label' => 'Supplemental Data Is there a lagoon cover/crust?',
        'description' => 'Supplemental Data Is there a lagoon cover/crust?',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p359_lagoon_aeration' => [
        'type' => 'boolean',
        'label' => 'Supplemental Data Is there lagoon aeration?',
        'description' => 'Supplemental Data Is there lagoon aeration?',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p380_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 380 Species category',
        'description' => 'Supplemental Data 380 Species category',
		    'allowed_values' => [
          'Coniferous trees' => t(string: 'Coniferous trees'),
          'Deciduous trees' => t(string: 'Deciduous trees'),
          'Shrubs' => t(string: 'Shrubs'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'p380_species_density' => [
        'type' => 'fraction',
        'label' => 'Supplemental Data 380 Species Density',
        'description' => 'Supplemental Data 380 Species Density',
        'required' => FALSE,
        'multiple' => FALSE,
      ], 
    ];

    $farmFieldFactory = new FarmFieldFactory();

    foreach ($field_info as $name => $info) {
      $fields[$name] = $farmFieldFactory->bundleFieldDefinition($info)
        ->setDisplayConfigurable('form', TRUE)
        ->setDisplayConfigurable('view', TRUE);
    }

    return $fields;

  }

}