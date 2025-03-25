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
class ColorTempCloudy extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempCloudy';

  protected string $name = 'ColorTempCloudy';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59233
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempCloudy',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59511
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempCloudy',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData1
       * line : 59767
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData1.Canon:ColorTempCloudy',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60037
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempCloudy',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60564
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempCloudy',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60811
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempCloudy',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61156
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData3.Canon:ColorTempCloudy',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61530
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempCloudy',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61918
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempCloudy',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62339
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempCloudy',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62810
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempCloudy',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
