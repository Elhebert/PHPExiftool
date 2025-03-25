<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFPointsInFocus extends AbstractTagGroup
{

  protected string $id = 'Pentax:AFPointsInFocus';

  protected string $name = 'AFPointsInFocus';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::AFInfo
       * line : 283476
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::AFInfo.Pentax:AFPointsInFocus',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::AFPointInfo
       * line : 283656
       * type : int8u
       * writable : false
       * count : 9
       * flags : permanent
       */
      'id' => 'Pentax::AFPointInfo.Pentax:AFPointsInFocus',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::Main
       * line : 296787
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::Main.Pentax:AFPointsInFocus',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::Main
       * line : 296949
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::Main.Pentax:AFPointsInFocus',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Pentax::Main
       * line : 299417
       * type : int32u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::Main.Pentax:AFPointsInFocus',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 9;

  protected int $flags = 2052;

}
