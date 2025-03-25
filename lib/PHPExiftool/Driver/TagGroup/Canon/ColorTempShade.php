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
class ColorTempShade extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempShade';

  protected string $name = 'ColorTempShade';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59218
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempShade',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59496
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempShade',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData1
       * line : 59752
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData1.Canon:ColorTempShade',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60022
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempShade',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60549
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempShade',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60796
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempShade',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61141
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData3.Canon:ColorTempShade',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61515
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempShade',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61903
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempShade',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62324
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempShade',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62795
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempShade',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
