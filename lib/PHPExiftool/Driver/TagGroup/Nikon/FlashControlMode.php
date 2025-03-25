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
class FlashControlMode extends AbstractTagGroup
{

  protected string $id = 'Nikon:FlashControlMode';

  protected string $name = 'FlashControlMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FlashInfo0100
       * line : 192479
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0100.Nikon:FlashControlMode',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::FlashInfo0102
       * line : 192983
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0102.Nikon:FlashControlMode',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::FlashInfo0103
       * line : 193555
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0103.Nikon:FlashControlMode',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::FlashInfo0106
       * line : 194179
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0106.Nikon:FlashControlMode',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::MenuSettingsZ7II
       * line : 199822
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::MenuSettingsZ7II.Nikon:FlashControlMode',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 200876
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:FlashControlMode',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208006
       * type : ?
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:FlashControlMode',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
