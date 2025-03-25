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
class Rotation extends AbstractTagGroup
{

  protected string $id = 'Minolta:Rotation';

  protected string $name = 'Rotation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings5D
       * line : 178973
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettings5D.Minolta:Rotation',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettings5D
       * line : 179046
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettings5D.Minolta:Rotation',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::CameraSettings7D
       * line : 179907
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettings7D.Minolta:Rotation',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 182356
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:Rotation',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 185057
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:Rotation',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
