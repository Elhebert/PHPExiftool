<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OpticalZoom extends AbstractTagGroup
{

  protected string $id = 'Kodak:OpticalZoom';

  protected string $name = 'OpticalZoom';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::SubIFD0
       * line : 158886
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::SubIFD0.Kodak:OpticalZoom',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::SubIFD2
       * line : 159116
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::SubIFD2.Kodak:OpticalZoom',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Kodak::SubIFD2
       * line : 159279
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::SubIFD2.Kodak:OpticalZoom',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Kodak::SubIFD3
       * line : 159338
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::SubIFD3.Kodak:OpticalZoom',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Kodak::SubIFD5
       * line : 159412
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::SubIFD5.Kodak:OpticalZoom',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Kodak::Type3
       * line : 160041
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type3.Kodak:OpticalZoom',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Kodak::Type5
       * line : 160267
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type5.Kodak:OpticalZoom',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Kodak::Type6
       * line : 160454
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type6.Kodak:OpticalZoom',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
