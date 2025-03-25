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
class CameraOrientation extends AbstractTagGroup
{

  protected string $id = 'Canon:CameraOrientation';

  protected string $name = 'CameraOrientation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1000D
       * line : 4595
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1000D.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1DX
       * line : 9194
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1DX.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo1DmkIII
       * line : 13614
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1DmkIII.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo1DmkIV
       * line : 17973
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1DmkIV.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Canon::CameraInfo40D
       * line : 19998
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo40D.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Canon::CameraInfo450D
       * line : 22032
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo450D.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Canon::CameraInfo500D
       * line : 24080
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo500D.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 26382
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Canon::CameraInfo550D
       * line : 28681
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo550D.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 32292
       * type : int8s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 35087
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    11 => [
      /**
       * table_name : Canon::CameraInfo5DmkIII
       * line : 37334
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo5DmkIII.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    12 => [
      /**
       * table_name : Canon::CameraInfo600D
       * line : 39543
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo600D.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    13 => [
      /**
       * table_name : Canon::CameraInfo60D
       * line : 41679
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo60D.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    14 => [
      /**
       * table_name : Canon::CameraInfo60D
       * line : 41731
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo60D.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    15 => [
      /**
       * table_name : Canon::CameraInfo650D
       * line : 43432
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo650D.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    16 => [
      /**
       * table_name : Canon::CameraInfo6D
       * line : 45590
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo6D.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    17 => [
      /**
       * table_name : Canon::CameraInfo70D
       * line : 47725
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo70D.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    18 => [
      /**
       * table_name : Canon::CameraInfo750D
       * line : 49425
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo750D.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    19 => [
      /**
       * table_name : Canon::CameraInfo7D
       * line : 51625
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo7D.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
    20 => [
      /**
       * table_name : Canon::CameraInfo80D
       * line : 53714
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo80D.Canon:CameraOrientation',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
