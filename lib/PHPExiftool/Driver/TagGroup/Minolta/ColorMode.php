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
class ColorMode extends AbstractTagGroup
{

  protected string $id = 'Minolta:ColorMode';

  protected string $name = 'ColorMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings
       * line : 177985
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettings.Minolta:ColorMode',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 180892
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:ColorMode',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::Main
       * line : 183100
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::Main.Minolta:ColorMode',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Minolta::Main
       * line : 183246
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::Main.Minolta:ColorMode',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 185356
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:ColorMode',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
