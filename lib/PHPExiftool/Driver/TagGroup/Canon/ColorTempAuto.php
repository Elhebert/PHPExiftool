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
class ColorTempAuto extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempAuto';

  protected string $name = 'ColorTempAuto';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59166
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempAuto',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59444
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempAuto',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData1
       * line : 59722
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData1.Canon:ColorTempAuto',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData10
       * line : 59871
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempAuto',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60321
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempAuto',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60745
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempAuto',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61100
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData3.Canon:ColorTempAuto',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61419
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempAuto',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61752
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempAuto',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62162
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempAuto',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62644
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempAuto',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
