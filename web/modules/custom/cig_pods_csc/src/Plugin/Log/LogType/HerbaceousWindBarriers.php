<?php

namespace Drupal\cig_pods_csc\Plugin\Log\LogType;

use Drupal\farm_entity\Plugin\Log\LogType\FarmLogType;
use Drupal\farm_field\FarmFieldFactory;

/**
 * Provides the Herbaceous Wind Barriers log type.
 *
 * @LogType(
 * id = "herbaceous_wind_barriers",
 * label = @Translation("Herbaceous Wind Barriers"),
 * )
 */
class HerbaceousWindBarriers extends FarmLogType {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {

    $fields = parent::buildFieldDefinitions();

    $field_info = [
      'project_id' => [
        'type' => 'entity_reference',
        'label' => 'Project ID',
        'description' => 'Project ID',
        'target_type' => 'asset',
        'target_bundle' => 'project_summary',
        'required' => TRUE,
        'multiple' => FALSE,
      ],
      'field_id' => [
        'type' => 'entity_reference',
        'label' => 'Field ID',
        'description' => 'Field ID',
		    'target_type' => 'asset',
		    'target_bundle' => 'field_enrollment',
        'required' => TRUE,
        'multiple' => FALSE,
      ],
      'p603_species_category' => [
        'type' => 'list_string',
        'label' => 'Supplemental Data 603 Species category',
        'description' => 'Supplemental Data 603 Species category',
		    'allowed_values' => [
          'Forbs' => t(string: 'Forbs'),
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