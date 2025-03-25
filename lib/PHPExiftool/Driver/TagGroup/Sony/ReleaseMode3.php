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
class ReleaseMode3 extends AbstractTagGroup
{

  protected string $id = 'Sony:ReleaseMode3';

  protected string $name = 'ReleaseMode3';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010a
       * line : 362051
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010a.Sony:ReleaseMode3',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363049
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010b.Sony:ReleaseMode3',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364072
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010c.Sony:ReleaseMode3',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365073
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010d.Sony:ReleaseMode3',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366057
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010e.Sony:ReleaseMode3',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 369064
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010f.Sony:ReleaseMode3',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 370094
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010g.Sony:ReleaseMode3',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 373095
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010h.Sony:ReleaseMode3',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 376096
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010i.Sony:ReleaseMode3',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
