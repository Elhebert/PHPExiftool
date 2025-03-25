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
class FlashFiring extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:FlashFiring';

  protected string $name = 'FlashFiring';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 73386
       * type : int32s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:FlashFiring',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions20D
       * line : 75869
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::Functions20D.CanonCustom:FlashFiring',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : CanonCustom::Functions30D
       * line : 76390
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::Functions30D.CanonCustom:FlashFiring',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : CanonCustom::Functions5D
       * line : 77508
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::Functions5D.CanonCustom:FlashFiring',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
