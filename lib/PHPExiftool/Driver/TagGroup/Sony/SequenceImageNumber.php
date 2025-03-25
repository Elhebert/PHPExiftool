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
class SequenceImageNumber extends AbstractTagGroup
{

  protected string $id = 'Sony:SequenceImageNumber';

  protected string $name = 'SequenceImageNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 362902
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010b.Sony:SequenceImageNumber',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 363907
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010c.Sony:SequenceImageNumber',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 364926
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010d.Sony:SequenceImageNumber',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 365892
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010e.Sony:SequenceImageNumber',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9400a
       * line : 383948
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9400a.Sony:SequenceImageNumber',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9400b
       * line : 384181
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9400b.Sony:SequenceImageNumber',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag9400c
       * line : 384491
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9400c.Sony:SequenceImageNumber',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 387614
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9405b.Sony:SequenceImageNumber',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag9416
       * line : 391067
       * type : int32u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9416.Sony:SequenceImageNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
