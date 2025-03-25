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
class FNumber extends AbstractTagGroup
{

  protected string $id = 'Olympus:FNumber';

  protected string $name = 'FNumber';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::AVI
       * line : 250335
       * type : rational64u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::AVI.Olympus:FNumber',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::MOV1
       * line : 256534
       * type : rational64u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::MOV1.Olympus:FNumber',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Olympus::MOV2
       * line : 256646
       * type : rational64u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::MOV2.Olympus:FNumber',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Olympus::MP4
       * line : 256784
       * type : rational64u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::MP4.Olympus:FNumber',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Olympus::OLYM
       * line : 260164
       * type : rational64u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::OLYM.Olympus:FNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
