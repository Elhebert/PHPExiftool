<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_meas;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MeasurementBacking extends AbstractTagGroup
{

  protected string $id = 'ICC-meas:MeasurementBacking';

  protected string $name = 'MeasurementBacking';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Measurement
       * line : 146933
       * type : fixed32s
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'ICC_Profile::Measurement.ICC-meas:MeasurementBacking',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 3;

}
