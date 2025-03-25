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
class ToningSaturation extends AbstractTagGroup
{

  protected string $id = 'Nikon:ToningSaturation';

  protected string $name = 'ToningSaturation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::PictureControl
       * line : 203914
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::PictureControl.Nikon:ToningSaturation',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::PictureControl2
       * line : 204237
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::PictureControl2.Nikon:ToningSaturation',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::PictureControl3
       * line : 204563
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::PictureControl3.Nikon:ToningSaturation',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
