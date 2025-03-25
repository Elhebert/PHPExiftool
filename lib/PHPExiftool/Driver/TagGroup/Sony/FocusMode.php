<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocusMode extends AbstractTagGroup
{

  protected string $id = 'Sony:FocusMode';

  protected string $name = 'FocusMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFInfo
       * line : 340856
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::AFInfo.Sony:FocusMode',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::AFInfo
       * line : 341603
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::AFInfo.Sony:FocusMode',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 346066
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:FocusMode',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 346319
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:FocusMode',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 348052
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings.Sony:FocusMode',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349444
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:FocusMode',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Main
       * line : 354477
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Main.Sony:FocusMode',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Main
       * line : 358942
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Main.Sony:FocusMode',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Main
       * line : 359312
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Main.Sony:FocusMode',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 360584
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::MoreSettings.Sony:FocusMode',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Sony::Tag9402
       * line : 384698
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9402.Sony:FocusMode',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
