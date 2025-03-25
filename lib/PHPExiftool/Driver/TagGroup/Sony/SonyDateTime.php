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
class SonyDateTime extends AbstractTagGroup
{

  protected string $id = 'Sony:SonyDateTime';

  protected string $name = 'SonyDateTime';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::ShotInfo
       * line : 362023
       * type : string
       * writable : true
       * count : 20
       * flags : permanent
       */
      'id' => 'Sony::ShotInfo.Sony:SonyDateTime',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 362982
       * type : undef
       * writable : true
       * count : 7
       * flags : permanent
       */
      'id' => 'Sony::Tag2010b.Sony:SonyDateTime',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364005
       * type : undef
       * writable : true
       * count : 7
       * flags : permanent
       */
      'id' => 'Sony::Tag2010c.Sony:SonyDateTime',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365006
       * type : undef
       * writable : true
       * count : 7
       * flags : permanent
       */
      'id' => 'Sony::Tag2010d.Sony:SonyDateTime',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 365990
       * type : undef
       * writable : true
       * count : 7
       * flags : permanent
       */
      'id' => 'Sony::Tag2010e.Sony:SonyDateTime',
      'desc' => [
      ],
    ],
  ];

  protected int $flags = 2052;

}
