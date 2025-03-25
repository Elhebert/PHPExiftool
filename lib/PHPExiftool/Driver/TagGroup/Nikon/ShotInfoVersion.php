<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ShotInfoVersion extends AbstractTagGroup
{

  protected string $id = 'Nikon:ShotInfoVersion';

  protected string $name = 'ShotInfoVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfo
       * line : 205295
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfo.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoD300S
       * line : 205505
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD300S.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoD300a
       * line : 205544
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD300a.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::ShotInfoD300b
       * line : 205704
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD300b.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::ShotInfoD3S
       * line : 206005
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD3S.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::ShotInfoD3X
       * line : 206061
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD3X.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::ShotInfoD3a
       * line : 206100
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD3a.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Nikon::ShotInfoD3b
       * line : 206184
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD3b.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Nikon::ShotInfoD4
       * line : 206306
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD4.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Nikon::ShotInfoD40
       * line : 206329
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD40.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Nikon::ShotInfoD4S
       * line : 206383
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD4S.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    11 => [
      /**
       * table_name : Nikon::ShotInfoD500
       * line : 207013
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD500.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    12 => [
      /**
       * table_name : Nikon::ShotInfoD5000
       * line : 207779
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD5000.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    13 => [
      /**
       * table_name : Nikon::ShotInfoD5100
       * line : 207818
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD5100.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    14 => [
      /**
       * table_name : Nikon::ShotInfoD5200
       * line : 207852
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD5200.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    15 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 207886
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    16 => [
      /**
       * table_name : Nikon::ShotInfoD610
       * line : 208246
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD610.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    17 => [
      /**
       * table_name : Nikon::ShotInfoD700
       * line : 208269
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD700.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    18 => [
      /**
       * table_name : Nikon::ShotInfoD7000
       * line : 208308
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD7000.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    19 => [
      /**
       * table_name : Nikon::ShotInfoD80
       * line : 208342
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD80.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    20 => [
      /**
       * table_name : Nikon::ShotInfoD800
       * line : 208529
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD800.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    21 => [
      /**
       * table_name : Nikon::ShotInfoD810
       * line : 208593
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD810.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    22 => [
      /**
       * table_name : Nikon::ShotInfoD850
       * line : 209153
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD850.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    23 => [
      /**
       * table_name : Nikon::ShotInfoD90
       * line : 209245
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD90.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    24 => [
      /**
       * table_name : Nikon::ShotInfoZ7II
       * line : 209284
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoZ7II.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
    25 => [
      /**
       * table_name : Nikon::ShotInfoZ9
       * line : 209367
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoZ9.Nikon:ShotInfoVersion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
