<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhaseOne;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensorCalibration_0x0413 extends AbstractTagGroup
{

  protected string $id = 'PhaseOne:SensorCalibration_0x0413';

  protected string $name = 'SensorCalibration_0x0413';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PhaseOne::SensorCalibration
       * line : 303642
       * type : double
       * writable : false
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'PhaseOne::SensorCalibration.PhaseOne:SensorCalibration_0x0413',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 36;

}
