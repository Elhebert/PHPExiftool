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
class KodakImageHeight extends AbstractTagGroup
{

  protected string $id = 'Kodak:KodakImageHeight';

  protected string $name = 'KodakImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::CameraInfo
       * line : 154375
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::CameraInfo.Kodak:KodakImageHeight',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::Main
       * line : 157753
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Main.Kodak:KodakImageHeight',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Kodak::SubIFD0
       * line : 158813
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::SubIFD0.Kodak:KodakImageHeight',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Kodak::SubIFD0
       * line : 158909
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::SubIFD0.Kodak:KodakImageHeight',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Kodak::TextualInfo
       * line : 159649
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::TextualInfo.Kodak:KodakImageHeight',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Kodak::Type2
       * line : 160015
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type2.Kodak:KodakImageHeight',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
