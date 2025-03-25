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
class HDRSetting extends AbstractTagGroup
{

  protected string $id = 'Sony:HDRSetting';

  protected string $name = 'HDRSetting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350809
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:HDRSetting',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 360686
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::MoreSettings.Sony:HDRSetting',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010a
       * line : 362297
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010a.Sony:HDRSetting',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363295
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010b.Sony:HDRSetting',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364318
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010c.Sony:HDRSetting',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365319
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010d.Sony:HDRSetting',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366303
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010e.Sony:HDRSetting',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 369310
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010f.Sony:HDRSetting',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 370340
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010g.Sony:HDRSetting',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 373341
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010h.Sony:HDRSetting',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 376342
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010i.Sony:HDRSetting',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
