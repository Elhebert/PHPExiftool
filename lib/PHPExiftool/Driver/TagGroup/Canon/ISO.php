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
class ISO extends AbstractTagGroup
{

  protected string $id = 'Canon:ISO';

  protected string $name = 'ISO';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1000D
       * line : 4519
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1000D.Canon:ISO',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1DX
       * line : 9150
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1DX.Canon:ISO',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo1DmkII
       * line : 13510
       * type : string
       * writable : true
       * count : 5
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1DmkII.Canon:ISO',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo1DmkIII
       * line : 13566
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1DmkIII.Canon:ISO',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Canon::CameraInfo1DmkIIN
       * line : 17809
       * type : string
       * writable : true
       * count : 5
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1DmkIIN.Canon:ISO',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Canon::CameraInfo1DmkIV
       * line : 17868
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1DmkIV.Canon:ISO',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Canon::CameraInfo40D
       * line : 19922
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo40D.Canon:ISO',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Canon::CameraInfo450D
       * line : 21956
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo450D.Canon:ISO',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Canon::CameraInfo500D
       * line : 23981
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo500D.Canon:ISO',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 26283
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:ISO',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Canon::CameraInfo550D
       * line : 28582
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo550D.Canon:ISO',
      'desc' => [
      ],
    ],
    11 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 30773
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:ISO',
      'desc' => [
      ],
    ],
    12 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 34984
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:ISO',
      'desc' => [
      ],
    ],
    13 => [
      /**
       * table_name : Canon::CameraInfo5DmkIII
       * line : 37290
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo5DmkIII.Canon:ISO',
      'desc' => [
      ],
    ],
    14 => [
      /**
       * table_name : Canon::CameraInfo600D
       * line : 39444
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo600D.Canon:ISO',
      'desc' => [
      ],
    ],
    15 => [
      /**
       * table_name : Canon::CameraInfo60D
       * line : 41635
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo60D.Canon:ISO',
      'desc' => [
      ],
    ],
    16 => [
      /**
       * table_name : Canon::CameraInfo650D
       * line : 43388
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo650D.Canon:ISO',
      'desc' => [
      ],
    ],
    17 => [
      /**
       * table_name : Canon::CameraInfo6D
       * line : 45546
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo6D.Canon:ISO',
      'desc' => [
      ],
    ],
    18 => [
      /**
       * table_name : Canon::CameraInfo70D
       * line : 47681
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo70D.Canon:ISO',
      'desc' => [
      ],
    ],
    19 => [
      /**
       * table_name : Canon::CameraInfo750D
       * line : 49381
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo750D.Canon:ISO',
      'desc' => [
      ],
    ],
    20 => [
      /**
       * table_name : Canon::CameraInfo7D
       * line : 51517
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo7D.Canon:ISO',
      'desc' => [
      ],
    ],
    21 => [
      /**
       * table_name : Canon::CameraInfo80D
       * line : 53670
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo80D.Canon:ISO',
      'desc' => [
      ],
    ],
    22 => [
      /**
       * table_name : Canon::CameraInfoPowerShot
       * line : 55335
       * type : int32s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfoPowerShot.Canon:ISO',
      'desc' => [
      ],
    ],
    23 => [
      /**
       * table_name : Canon::CameraInfoPowerShot2
       * line : 55424
       * type : int32s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfoPowerShot2.Canon:ISO',
      'desc' => [
      ],
    ],
    24 => [
      /**
       * table_name : Canon::ExposureInfo
       * line : 63253
       * type : int32u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ExposureInfo.Canon:ISO',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 5;

  protected int $flags = 2052;

}
