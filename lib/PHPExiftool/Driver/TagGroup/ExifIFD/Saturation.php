<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Saturation extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:Saturation';

  protected string $name = 'Saturation';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 117594
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:Saturation',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 120923
       * type : string
       * writable : true
       * count : 
       * flags : avoid
       */
      'id' => 'Exif::Main.ExifIFD:Saturation',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
