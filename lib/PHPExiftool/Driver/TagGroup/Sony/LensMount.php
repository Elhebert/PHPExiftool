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
class LensMount extends AbstractTagGroup
{

  protected string $id = 'Sony:LensMount';

  protected string $name = 'LensMount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351230
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:LensMount',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366969
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010e.Sony:LensMount',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 371000
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010g.Sony:LensMount',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 374001
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010h.Sony:LensMount',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 377002
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010i.Sony:LensMount',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 379304
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9050a.Sony:LensMount',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 381672
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9050b.Sony:LensMount',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag9405a
       * line : 385628
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9405a.Sony:LensMount',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 388270
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9405b.Sony:LensMount',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Sony::Tag9416
       * line : 391300
       * type : int8u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9416.Sony:LensMount',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Sony::Tag9416
       * line : 391331
       * type : int8u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9416.Sony:LensMount',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
