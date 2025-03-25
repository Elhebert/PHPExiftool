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
class WhiteBalance extends AbstractTagGroup
{

  protected string $id = 'Sony:WhiteBalance';

  protected string $name = 'WhiteBalance';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 346851
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings.Sony:WhiteBalance',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 348463
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:WhiteBalance',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Main
       * line : 353650
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Main.Sony:WhiteBalance',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Main
       * line : 359454
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Main.Sony:WhiteBalance',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::rtmd
       * line : 393847
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Sony::rtmd.Sony:WhiteBalance',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
