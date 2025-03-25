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
class DistortionCorrParamsPresent extends AbstractTagGroup
{

  protected string $id = 'Sony:DistortionCorrParamsPresent';

  protected string $name = 'DistortionCorrParamsPresent';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 368900
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010e.Sony:DistortionCorrParamsPresent',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 372931
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010g.Sony:DistortionCorrParamsPresent',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 375932
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010h.Sony:DistortionCorrParamsPresent',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 378933
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag2010i.Sony:DistortionCorrParamsPresent',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 381249
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9050a.Sony:DistortionCorrParamsPresent',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 383617
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9050b.Sony:DistortionCorrParamsPresent',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag9405a
       * line : 385587
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9405a.Sony:DistortionCorrParamsPresent',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 388229
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9405b.Sony:DistortionCorrParamsPresent',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
