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
class KodakImageWidth extends AbstractTagGroup
{

  protected string $id = 'Kodak:KodakImageWidth';

  protected string $name = 'KodakImageWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::CameraInfo
       * line : 154371
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::CameraInfo.Kodak:KodakImageWidth',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::Main
       * line : 157749
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Main.Kodak:KodakImageWidth',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Kodak::SubIFD0
       * line : 158809
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::SubIFD0.Kodak:KodakImageWidth',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Kodak::SubIFD0
       * line : 158905
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::SubIFD0.Kodak:KodakImageWidth',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Kodak::TextualInfo
       * line : 159832
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::TextualInfo.Kodak:KodakImageWidth',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Kodak::Type2
       * line : 160011
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type2.Kodak:KodakImageWidth',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
