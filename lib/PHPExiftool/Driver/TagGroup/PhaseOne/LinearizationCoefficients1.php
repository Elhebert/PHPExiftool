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
class LinearizationCoefficients1 extends AbstractTagGroup
{

  protected string $id = 'PhaseOne:LinearizationCoefficients1';

  protected string $name = 'LinearizationCoefficients1';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PhaseOne::SensorCalibration
       * line : 303660
       * type : float
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'PhaseOne::SensorCalibration.PhaseOne:LinearizationCoefficients1',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
