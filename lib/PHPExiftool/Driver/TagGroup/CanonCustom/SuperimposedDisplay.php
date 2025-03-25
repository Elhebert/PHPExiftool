<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SuperimposedDisplay extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:SuperimposedDisplay';

  protected string $name = 'SuperimposedDisplay';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions10D
       * line : 71636
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::Functions10D.CanonCustom:SuperimposedDisplay',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 74181
       * type : int32s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:SuperimposedDisplay',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : CanonCustom::Functions20D
       * line : 75953
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::Functions20D.CanonCustom:SuperimposedDisplay',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : CanonCustom::Functions30D
       * line : 76474
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::Functions30D.CanonCustom:SuperimposedDisplay',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : CanonCustom::Functions5D
       * line : 77592
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::Functions5D.CanonCustom:SuperimposedDisplay',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : CanonCustom::FunctionsD30
       * line : 78219
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::FunctionsD30.CanonCustom:SuperimposedDisplay',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
