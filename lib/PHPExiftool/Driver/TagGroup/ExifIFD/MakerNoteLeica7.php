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
class MakerNoteLeica7 extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:MakerNoteLeica7';

  protected string $name = 'MakerNoteLeica7';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : DNG::AdobeData
       * line : 105043
       * type : undef
       * writable : true
       * count : 
       * flags : binary,permanent
       */
      'id' => 'DNG::AdobeData.ExifIFD:MakerNoteLeica7',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 116004
       * type : undef
       * writable : true
       * count : 
       * flags : binary
       */
      'id' => 'Exif::Main.ExifIFD:MakerNoteLeica7',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2050;

}
