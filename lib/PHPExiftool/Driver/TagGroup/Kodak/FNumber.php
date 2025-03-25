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
class FNumber extends AbstractTagGroup
{

  protected string $id = 'Kodak:FNumber';

  protected string $name = 'FNumber';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::CameraInfo
       * line : 154400
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::CameraInfo.Kodak:FNumber',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::Free
       * line : 154574
       * type : int16u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Free.Kodak:FNumber',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Kodak::MOV
       * line : 157610
       * type : rational64u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::MOV.Kodak:FNumber',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Kodak::Main
       * line : 157884
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Main.Kodak:FNumber',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Kodak::SubIFD0
       * line : 158835
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::SubIFD0.Kodak:FNumber',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Kodak::SubIFD2
       * line : 159283
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::SubIFD2.Kodak:FNumber',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Kodak::Type10
       * line : 159872
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type10.Kodak:FNumber',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Kodak::Type3
       * line : 160100
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type3.Kodak:FNumber',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Kodak::Type5
       * line : 160234
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type5.Kodak:FNumber',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Kodak::Type6
       * line : 160421
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type6.Kodak:FNumber',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Kodak::Type9
       * line : 160555
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type9.Kodak:FNumber',
      'desc' => [
      ],
    ],
    11 => [
      /**
       * table_name : Kodak::Type9
       * line : 160573
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type9.Kodak:FNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
