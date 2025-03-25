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
class ExposureCompensation extends AbstractTagGroup
{

  protected string $id = 'Sony:ExposureCompensation';

  protected string $name = 'ExposureCompensation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::PMP
       * line : 361504
       * type : int16s
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::PMP.Sony:ExposureCompensation',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010a
       * line : 362328
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010a.Sony:ExposureCompensation',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363326
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010b.Sony:ExposureCompensation',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364349
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010c.Sony:ExposureCompensation',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366334
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010e.Sony:ExposureCompensation',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 369341
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010f.Sony:ExposureCompensation',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 370371
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010g.Sony:ExposureCompensation',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 373372
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010h.Sony:ExposureCompensation',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 376373
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010i.Sony:ExposureCompensation',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
