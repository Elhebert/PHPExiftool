<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MinoltaQuality extends AbstractTagGroup
{

  protected string $id = 'Minolta:MinoltaQuality';

  protected string $name = 'MinoltaQuality';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings
       * line : 177185
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettings.Minolta:MinoltaQuality',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettings5D
       * line : 178403
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettings5D.Minolta:MinoltaQuality',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::CameraSettings7D
       * line : 179383
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettings7D.Minolta:MinoltaQuality',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Minolta::Main
       * line : 183569
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::Main.Minolta:MinoltaQuality',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Minolta::Main
       * line : 183611
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::Main.Minolta:MinoltaQuality',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
