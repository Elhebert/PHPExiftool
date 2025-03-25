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
class Sharpness extends AbstractTagGroup
{

  protected string $id = 'Nikon:Sharpness';

  protected string $name = 'Sharpness';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AVITags
       * line : 191804
       * type : string
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AVITags.Nikon:Sharpness',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::Main
       * line : 196660
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::Main.Nikon:Sharpness',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::PictureControl
       * line : 203681
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::PictureControl.Nikon:Sharpness',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::PictureControl2
       * line : 203992
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::PictureControl2.Nikon:Sharpness',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::PictureControl3
       * line : 204315
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::PictureControl3.Nikon:Sharpness',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
