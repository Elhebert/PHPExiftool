<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ISO extends AbstractTagGroup
{

  protected string $id = 'Pentax:ISO';

  protected string $name = 'ISO';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::MOV
       * line : 294728
       * type : int16u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::MOV.Pentax:ISO',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::Main
       * line : 297102
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::Main.Pentax:ISO',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::Main
       * line : 300628
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::Main.Pentax:ISO',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::PENT
       * line : 301058
       * type : int32u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::PENT.Pentax:ISO',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Pentax::Type2
       * line : 302925
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::Type2.Pentax:ISO',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
