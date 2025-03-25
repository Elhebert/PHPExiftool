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
class SequenceFileNumber extends AbstractTagGroup
{

  protected string $id = 'Sony:SequenceFileNumber';

  protected string $name = 'SequenceFileNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 362905
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010b.Sony:SequenceFileNumber',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 363910
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010c.Sony:SequenceFileNumber',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 364929
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010d.Sony:SequenceFileNumber',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 365895
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010e.Sony:SequenceFileNumber',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9400a
       * line : 383951
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9400a.Sony:SequenceFileNumber',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9400b
       * line : 384184
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9400b.Sony:SequenceFileNumber',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag9400c
       * line : 384541
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9400c.Sony:SequenceFileNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
