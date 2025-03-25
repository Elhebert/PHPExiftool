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
class ToningEffect extends AbstractTagGroup
{

  protected string $id = 'Nikon:ToningEffect';

  protected string $name = 'ToningEffect';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199552
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::Main.Nikon:ToningEffect',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::PictureControl
       * line : 203825
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::PictureControl.Nikon:ToningEffect',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::PictureControl2
       * line : 204148
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::PictureControl2.Nikon:ToningEffect',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::PictureControl3
       * line : 204474
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::PictureControl3.Nikon:ToningEffect',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
