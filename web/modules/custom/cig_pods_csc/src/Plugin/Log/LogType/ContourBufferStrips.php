<?php

namespace Drupal\cig_pods_csc\Plugin\Log\LogType;

use Drupal\farm_entity\Plugin\Log\LogType\FarmLogType;
use Drupal\farm_field\FarmFieldFactory;

/**
 * Provides the Contour Buffer Strips log type.
 *
 * @LogType(
 * id = "contour_buffer_strips",
 * label = @Translation("ContourBufferStrips"),
 * )
 */
class ContourBufferStrips extends FarmLogType {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {

    $fields = parent::buildFieldDefinitions();

    $field_info = [
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
