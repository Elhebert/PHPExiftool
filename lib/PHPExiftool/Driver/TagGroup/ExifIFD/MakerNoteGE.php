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
class MakerNoteGE extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:MakerNoteGE';

  protected string $name = 'MakerNoteGE';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : DNG::AdobeData
       * line : 104792
       * type : undef
       * writable : true
       * count : 
       * flags : binary,permanent
       */
      'id' => 'DNG::AdobeData.ExifIFD:MakerNoteGE',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 115753
       * type : undef
       * writable : true
       * count : 
       * flags : binary
       */
      'id' => 'Exif::Main.ExifIFD:MakerNoteGE',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2050;

}
