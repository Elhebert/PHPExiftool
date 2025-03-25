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
class FocalLength extends AbstractTagGroup
{

  protected string $id = 'Sony:FocalLength';

  protected string $name = 'FocalLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 345947
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:FocalLength',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::PMP
       * line : 361522
       * type : int16s
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::PMP.Sony:FocalLength',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366910
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010e.Sony:FocalLength',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 369911
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010f.Sony:FocalLength',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 370941
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010g.Sony:FocalLength',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 373942
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010h.Sony:FocalLength',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 376943
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010i.Sony:FocalLength',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag9416
       * line : 393343
       * type : int16u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9416.Sony:FocalLength',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
