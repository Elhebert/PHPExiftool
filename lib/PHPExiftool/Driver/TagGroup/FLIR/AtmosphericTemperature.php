<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AtmosphericTemperature extends AbstractTagGroup
{

  protected string $id = 'FLIR:AtmosphericTemperature';

  protected string $name = 'AtmosphericTemperature';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::CameraInfo
       * line : 122195
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::CameraInfo.FLIR:AtmosphericTemperature',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : FLIR::FPF
       * line : 122599
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::FPF.FLIR:AtmosphericTemperature',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : FLIR::Params
       * line : 123574
       * type : float
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'FLIR::Params.FLIR:AtmosphericTemperature',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
