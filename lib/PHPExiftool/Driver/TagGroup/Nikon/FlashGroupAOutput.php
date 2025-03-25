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
class FlashGroupAOutput extends AbstractTagGroup
{

  protected string $id = 'Nikon:FlashGroupAOutput';

  protected string $name = 'FlashGroupAOutput';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FlashInfo0100
       * line : 192823
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0100.Nikon:FlashGroupAOutput',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::FlashInfo0102
       * line : 193383
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0102.Nikon:FlashGroupAOutput',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::FlashInfo0103
       * line : 193995
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0103.Nikon:FlashGroupAOutput',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::FlashInfo0106
       * line : 194619
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0106.Nikon:FlashGroupAOutput',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::FlashInfo0107
       * line : 195106
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0107.Nikon:FlashGroupAOutput',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
