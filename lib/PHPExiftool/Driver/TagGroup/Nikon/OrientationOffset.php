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
class OrientationOffset extends AbstractTagGroup
{

  protected string $id = 'Nikon:OrientationOffset';

  protected string $name = 'OrientationOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoD500
       * line : 207047
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD500.Nikon:OrientationOffset',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 207914
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:OrientationOffset',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoD810
       * line : 208621
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD810.Nikon:OrientationOffset',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::ShotInfoD850
       * line : 209175
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD850.Nikon:OrientationOffset',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::ShotInfoZ7II
       * line : 209318
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoZ7II.Nikon:OrientationOffset',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::ShotInfoZ9
       * line : 209401
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoZ9.Nikon:OrientationOffset',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
