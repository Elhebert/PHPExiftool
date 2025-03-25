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
class DynamicRangeOptimizerLevel extends AbstractTagGroup
{

  protected string $id = 'Sony:DynamicRangeOptimizerLevel';

  protected string $name = 'DynamicRangeOptimizerLevel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347264
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings.Sony:DynamicRangeOptimizerLevel',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 348832
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:DynamicRangeOptimizerLevel',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350298
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:DynamicRangeOptimizerLevel',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::FocusInfo
       * line : 353414
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::FocusInfo.Sony:DynamicRangeOptimizerLevel',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 360167
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::MoreSettings.Sony:DynamicRangeOptimizerLevel',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
