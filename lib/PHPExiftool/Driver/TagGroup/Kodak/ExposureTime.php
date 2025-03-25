<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureTime extends AbstractTagGroup
{

  protected string $id = 'Kodak:ExposureTime';

  protected string $name = 'ExposureTime';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::CameraInfo
       * line : 154418
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::CameraInfo.Kodak:ExposureTime',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::Free
       * line : 154538
       * type : rational32u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Free.Kodak:ExposureTime',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Kodak::MOV
       * line : 157592
       * type : int32u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::MOV.Kodak:ExposureTime',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Kodak::Main
       * line : 157902
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Main.Kodak:ExposureTime',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Kodak::SubIFD0
       * line : 158853
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::SubIFD0.Kodak:ExposureTime',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Kodak::SubIFD2
       * line : 159301
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::SubIFD2.Kodak:ExposureTime',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Kodak::Type10
       * line : 159854
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type10.Kodak:ExposureTime',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Kodak::Type3
       * line : 160082
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type3.Kodak:ExposureTime',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Kodak::Type5
       * line : 160148
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type5.Kodak:ExposureTime',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Kodak::Type6
       * line : 160391
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type6.Kodak:ExposureTime',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Kodak::Type9
       * line : 160591
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type9.Kodak:ExposureTime',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
