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
class Quality2 extends AbstractTagGroup
{

  protected string $id = 'Sony:Quality2';

  protected string $name = 'Quality2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010a
       * line : 362553
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010a.Sony:Quality2',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363551
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010b.Sony:Quality2',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364574
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010c.Sony:Quality2',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366559
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010e.Sony:Quality2',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 369566
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010f.Sony:Quality2',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 370596
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010g.Sony:Quality2',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 373597
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010h.Sony:Quality2',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 376598
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010i.Sony:Quality2',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag9400a
       * line : 384151
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9400a.Sony:Quality2',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Sony::Tag9400b
       * line : 384384
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9400b.Sony:Quality2',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Sony::Tag9400c
       * line : 384631
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9400c.Sony:Quality2',
      'desc' => [
      ],
    ],
    11 => [
      /**
       * table_name : Sony::Tag9400c
       * line : 384651
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9400c.Sony:Quality2',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
