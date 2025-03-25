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
class MaxFocalLength extends AbstractTagGroup
{

  protected string $id = 'Canon:MaxFocalLength';

  protected string $name = 'MaxFocalLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1000D
       * line : 6470
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1000D.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1D
       * line : 8052
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1D.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo1DX
       * line : 11212
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1DX.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo1DmkII
       * line : 12785
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1DmkII.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Canon::CameraInfo1DmkIII
       * line : 15632
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1DmkIII.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Canon::CameraInfo1DmkIIN
       * line : 17232
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1DmkIIN.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Canon::CameraInfo1DmkIV
       * line : 19848
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1DmkIV.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Canon::CameraInfo40D
       * line : 21873
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo40D.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Canon::CameraInfo500D
       * line : 26206
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo500D.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 28508
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Canon::CameraInfo550D
       * line : 30699
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo550D.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    11 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 32905
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    12 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 37213
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    13 => [
      /**
       * table_name : Canon::CameraInfo5DmkIII
       * line : 39352
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo5DmkIII.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    14 => [
      /**
       * table_name : Canon::CameraInfo600D
       * line : 41561
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo600D.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    15 => [
      /**
       * table_name : Canon::CameraInfo60D
       * line : 43314
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo60D.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    16 => [
      /**
       * table_name : Canon::CameraInfo650D
       * line : 45450
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo650D.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    17 => [
      /**
       * table_name : Canon::CameraInfo6D
       * line : 47608
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo6D.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    18 => [
      /**
       * table_name : Canon::CameraInfo70D
       * line : 49308
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo70D.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    19 => [
      /**
       * table_name : Canon::CameraInfo750D
       * line : 51443
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo750D.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    20 => [
      /**
       * table_name : Canon::CameraInfo7D
       * line : 53597
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo7D.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    21 => [
      /**
       * table_name : Canon::CameraInfo80D
       * line : 55297
       * type : int16uRev
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo80D.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
    22 => [
      /**
       * table_name : Canon::CameraSettings
       * line : 58448
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraSettings.Canon:MaxFocalLength',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
