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
class LensType extends AbstractTagGroup
{

  protected string $id = 'Pentax:LensType';

  protected string $name = 'LensType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::LensInfo
       * line : 288833
       * type : int8u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Pentax::LensInfo.Pentax:LensType',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::LensInfo2
       * line : 289756
       * type : int8u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Pentax::LensInfo2.Pentax:LensType',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::LensInfo3
       * line : 290679
       * type : int8u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Pentax::LensInfo3.Pentax:LensType',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::LensInfo4
       * line : 291602
       * type : int8u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Pentax::LensInfo4.Pentax:LensType',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Pentax::LensInfo5
       * line : 292525
       * type : int8u
       * writable : true
       * count : 5
       * flags : permanent
       */
      'id' => 'Pentax::LensInfo5.Pentax:LensType',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Pentax::LensRec
       * line : 293479
       * type : int8u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Pentax::LensRec.Pentax:LensType',
      'desc' => [
      ],
    ],
  ];

  protected int $flags = 2052;

}
