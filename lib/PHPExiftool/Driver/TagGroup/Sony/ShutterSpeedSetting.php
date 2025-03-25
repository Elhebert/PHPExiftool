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
class ShutterSpeedSetting extends AbstractTagGroup
{

  protected string $id = 'Sony:ShutterSpeedSetting';

  protected string $name = 'ShutterSpeedSetting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347736
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings.Sony:ShutterSpeedSetting',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349128
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:ShutterSpeedSetting',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 349754
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:ShutterSpeedSetting',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
