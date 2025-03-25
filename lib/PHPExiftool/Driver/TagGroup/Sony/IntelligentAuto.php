<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IntelligentAuto extends AbstractTagGroup
{

  protected string $id = 'Sony:IntelligentAuto';

  protected string $name = 'IntelligentAuto';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Main
       * line : 359433
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Main.Sony:IntelligentAuto',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9404a
       * line : 385055
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9404a.Sony:IntelligentAuto',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag9404b
       * line : 385309
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9404b.Sony:IntelligentAuto',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag9404c
       * line : 385566
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9404c.Sony:IntelligentAuto',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
