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
class CompositeImageCount extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:CompositeImageCount';

  protected string $name = 'CompositeImageCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 117957
       * type : int16u
       * writable : true
       * count : 2
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:CompositeImageCount',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

  protected int $flags = 2048;

}
