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
class MCUVersion extends AbstractTagGroup
{

  protected string $id = 'Nikon:MCUVersion';

  protected string $name = 'MCUVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::LensData00
       * line : 195608
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::LensData00.Nikon:MCUVersion',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::LensData01
       * line : 195740
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::LensData01.Nikon:MCUVersion',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::LensData0204
       * line : 195881
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::LensData0204.Nikon:MCUVersion',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196088
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:MCUVersion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
