<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Model extends AbstractTagGroup
{

  protected string $id = 'Olympus:Model';

  protected string $name = 'Model';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::AVI
       * line : 249433
       * type : string
       * writable : false
       * count : 24
       * flags : permanent
       */
      'id' => 'Olympus::AVI.Olympus:Model',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::DSS
       * line : 253020
       * type : string
       * writable : false
       * count : 16
       * flags : permanent
       */
      'id' => 'Olympus::DSS.Olympus:Model',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Olympus::MOV1
       * line : 255628
       * type : string
       * writable : false
       * count : 8
       * flags : permanent
       */
      'id' => 'Olympus::MOV1.Olympus:Model',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Olympus::MOV2
       * line : 256610
       * type : string
       * writable : false
       * count : 24
       * flags : permanent
       */
      'id' => 'Olympus::MOV2.Olympus:Model',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Olympus::MP4
       * line : 256737
       * type : string
       * writable : false
       * count : 24
       * flags : permanent
       */
      'id' => 'Olympus::MP4.Olympus:Model',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Olympus::OLYM
       * line : 259262
       * type : string
       * writable : false
       * count : 24
       * flags : permanent
       */
      'id' => 'Olympus::OLYM.Olympus:Model',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Olympus::WAV
       * line : 262211
       * type : string
       * writable : false
       * count : 16
       * flags : permanent
       */
      'id' => 'Olympus::WAV.Olympus:Model',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Olympus::prms
       * line : 262343
       * type : string
       * writable : false
       * count : 24
       * flags : permanent
       */
      'id' => 'Olympus::prms.Olympus:Model',
      'desc' => [
      ],
    ],
  ];

  protected int $flags = 4;

}
