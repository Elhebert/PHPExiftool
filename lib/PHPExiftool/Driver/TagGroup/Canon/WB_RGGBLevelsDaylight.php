<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGGBLevelsDaylight extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsDaylight';

  protected string $name = 'WB_RGGBLevelsDaylight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorBalance
       * line : 58870
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Canon::ColorBalance.Canon:WB_RGGBLevelsDaylight',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59195
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsDaylight',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59473
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsDaylight',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData1
       * line : 59729
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Canon::ColorData1.Canon:WB_RGGBLevelsDaylight',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData10
       * line : 59999
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsDaylight',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60526
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsDaylight',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60773
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsDaylight',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61118
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsDaylight',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61492
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsDaylight',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61880
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsDaylight',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62301
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsDaylight',
      'desc' => [
      ],
    ],
    11 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62772
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsDaylight',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
