<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailWidth extends AbstractTagGroup
{

  protected string $id = 'XMP-xmp:ThumbnailWidth';

  protected string $name = 'ThumbnailWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Thumbnail Width',
    'fr' => 'Hauteur de la vignette',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmp
       * line : 413104
       * type : integer
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::xmp.XMP-xmp:ThumbnailWidth',
      'desc' => [
        'en' => 'Thumbnail Width',
        'fr' => 'Hauteur de la vignette',
      ],
    ],
  ];

}
