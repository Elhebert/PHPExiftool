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
class ETTLII extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:ETTLII';

  protected string $name = 'ETTLII';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 73346
       * type : int32s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:ETTLII',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions20D
       * line : 76057
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::Functions20D.CanonCustom:ETTLII',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : CanonCustom::Functions30D
       * line : 76578
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::Functions30D.CanonCustom:ETTLII',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : CanonCustom::Functions350D
       * line : 76946
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::Functions350D.CanonCustom:ETTLII',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : CanonCustom::Functions400D
       * line : 77212
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::Functions400D.CanonCustom:ETTLII',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : CanonCustom::Functions5D
       * line : 77696
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonCustom::Functions5D.CanonCustom:ETTLII',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
