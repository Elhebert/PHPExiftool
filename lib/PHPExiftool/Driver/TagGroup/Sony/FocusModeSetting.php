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
class FocusModeSetting extends AbstractTagGroup
{

  protected string $id = 'Sony:FocusModeSetting';

  protected string $name = 'FocusModeSetting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraInfo
       * line : 344984
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraInfo.Sony:FocusModeSetting',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraInfo2
       * line : 345675
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraInfo2.Sony:FocusModeSetting',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347014
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings.Sony:FocusModeSetting',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 348626
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:FocusModeSetting',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350066
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:FocusModeSetting',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
