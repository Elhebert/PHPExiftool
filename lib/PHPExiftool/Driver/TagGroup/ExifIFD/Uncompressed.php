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
class Uncompressed extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:Uncompressed';

  protected string $name = 'Uncompressed';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Uncompressed',
    'fr' => 'Non.comprimé',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 118810
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:Uncompressed',
      'desc' => [
        'en' => 'Uncompressed',
        'fr' => 'Non.comprimé',
      ],
    ],
  ];

}
