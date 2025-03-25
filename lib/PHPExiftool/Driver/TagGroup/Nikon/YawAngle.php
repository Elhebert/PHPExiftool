<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class YawAngle extends AbstractTagGroup
{

  protected string $id = 'Nikon:YawAngle';

  protected string $name = 'YawAngle';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoD4S
       * line : 206945
       * type : fixed32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD4S.Nikon:YawAngle',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoD500
       * line : 207751
       * type : fixed32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD500.Nikon:YawAngle',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 207940
       * type : fixed32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:YawAngle',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::ShotInfoD810
       * line : 209145
       * type : fixed32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD810.Nikon:YawAngle',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::ShotInfoD850
       * line : 209237
       * type : fixed32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD850.Nikon:YawAngle',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::ShotInfoZ7II
       * line : 209350
       * type : fixed32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoZ7II.Nikon:YawAngle',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::ShotInfoZ9
       * line : 209433
       * type : fixed32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoZ9.Nikon:YawAngle',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
