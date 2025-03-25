<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MeasuredLV extends AbstractTagGroup
{

  protected string $id = 'Leica:MeasuredLV';

  protected string $name = 'MeasuredLV';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica2
       * line : 274669
       * type : rational64s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::Leica2.Leica:MeasuredLV',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::Leica6
       * line : 274953
       * type : rational64s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::Leica6.Leica:MeasuredLV',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Panasonic::Leica9
       * line : 274996
       * type : rational64s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::Leica9.Leica:MeasuredLV',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Panasonic::Subdir
       * line : 279643
       * type : int32s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::Subdir.Leica:MeasuredLV',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
