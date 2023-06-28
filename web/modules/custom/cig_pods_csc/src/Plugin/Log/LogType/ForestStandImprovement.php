<?php

namespace Drupal\cig_pods_csc\Plugin\Log\LogType;

use Drupal\farm_entity\Plugin\Log\LogType\FarmLogType;
use Drupal\farm_field\FarmFieldFactory;

/**
 * Provides the Forest Stand Improvement log type.
 *
 * @LogType(
 * id = "forest_stand_improvement",
 * label = @Translation("Forest Stand Improvement"),
 * )
 */
class ForestStandImprovement extends FarmLogType {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {

    $fields = parent::buildFieldDefinitions();

    $field_info = [
      'p666_implementation_purpose' => [
        'type' => 'entity_reference',
        'label' => 'Supplemental Data Purpose for implementation',
        'description' => 'Supplemental Data Purpose for implementation',
		    'target_type' => 'taxonomy_term',
		    'target_bundle' => '666_implementation_purpose',
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