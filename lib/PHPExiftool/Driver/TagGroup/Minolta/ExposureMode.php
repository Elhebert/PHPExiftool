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
class ExposureMode extends AbstractTagGroup
{

  protected string $id = 'Minolta:ExposureMode';

  protected string $name = 'ExposureMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings
       * line : 177028
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettings.Minolta:ExposureMode',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettings5D
       * line : 178307
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettings5D.Minolta:ExposureMode',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::CameraSettings7D
       * line : 179268
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettings7D.Minolta:ExposureMode',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 180123
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:ExposureMode',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 185226
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:ExposureMode',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
