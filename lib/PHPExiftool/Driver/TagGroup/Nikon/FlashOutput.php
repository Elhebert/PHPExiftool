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
class FlashOutput extends AbstractTagGroup
{

  protected string $id = 'Nikon:FlashOutput';

  protected string $name = 'FlashOutput';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FlashInfo0100
       * line : 192540
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0100.Nikon:FlashOutput',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::FlashInfo0102
       * line : 193044
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0102.Nikon:FlashOutput',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::FlashInfo0103
       * line : 193616
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0103.Nikon:FlashOutput',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::FlashInfo0106
       * line : 194599
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0106.Nikon:FlashOutput',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::MenuSettingsZ7II
       * line : 199985
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Nikon::MenuSettingsZ7II.Nikon:FlashOutput',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 201042
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:FlashOutput',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208169
       * type : ?
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:FlashOutput',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
