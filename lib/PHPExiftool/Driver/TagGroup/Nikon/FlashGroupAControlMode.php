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
class FlashGroupAControlMode extends AbstractTagGroup
{

  protected string $id = 'Nikon:FlashGroupAControlMode';

  protected string $name = 'FlashGroupAControlMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FlashInfo0100
       * line : 192708
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0100.Nikon:FlashGroupAControlMode',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::FlashInfo0102
       * line : 193212
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0102.Nikon:FlashGroupAControlMode',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::FlashInfo0103
       * line : 193824
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0103.Nikon:FlashGroupAControlMode',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::FlashInfo0106
       * line : 194428
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0106.Nikon:FlashGroupAControlMode',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::FlashInfo0107
       * line : 194935
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0107.Nikon:FlashGroupAControlMode',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
