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
class ShutterCount extends AbstractTagGroup
{

  protected string $id = 'Nikon:ShutterCount';

  protected string $name = 'ShutterCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199399
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent,unsafe
       */
      'id' => 'Nikon::Main.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203490
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::NCTG.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfo
       * line : 205355
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfo.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::ShotInfo
       * line : 205441
       * type : undef
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfo.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::ShotInfo
       * line : 205490
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfo.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::ShotInfoD300S
       * line : 205529
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD300S.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::ShotInfoD300a
       * line : 205558
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD300a.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Nikon::ShotInfoD300b
       * line : 205728
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD300b.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Nikon::ShotInfoD3S
       * line : 206046
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD3S.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Nikon::ShotInfoD3X
       * line : 206085
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD3X.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Nikon::ShotInfoD3a
       * line : 206114
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD3a.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    11 => [
      /**
       * table_name : Nikon::ShotInfoD3b
       * line : 206222
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD3b.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    12 => [
      /**
       * table_name : Nikon::ShotInfoD3b
       * line : 206233
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD3b.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    13 => [
      /**
       * table_name : Nikon::ShotInfoD40
       * line : 206338
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD40.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    14 => [
      /**
       * table_name : Nikon::ShotInfoD5000
       * line : 207803
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD5000.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    15 => [
      /**
       * table_name : Nikon::ShotInfoD5100
       * line : 207837
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD5100.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    16 => [
      /**
       * table_name : Nikon::ShotInfoD5200
       * line : 207871
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD5200.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    17 => [
      /**
       * table_name : Nikon::ShotInfoD700
       * line : 208293
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD700.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    18 => [
      /**
       * table_name : Nikon::ShotInfoD7000
       * line : 208327
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD7000.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    19 => [
      /**
       * table_name : Nikon::ShotInfoD80
       * line : 208351
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD80.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    20 => [
      /**
       * table_name : Nikon::ShotInfoD800
       * line : 208578
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD800.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
    21 => [
      /**
       * table_name : Nikon::ShotInfoD90
       * line : 209269
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD90.Nikon:ShutterCount',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

  protected int $flags = 2052;

}
