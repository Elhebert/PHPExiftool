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
class BackgroundColorValue extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:BackgroundColorValue';

  protected string $name = 'BackgroundColorValue';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Background Color Value',
    'fr' => 'Valeur de couleur d\'arrière-plan',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 113693
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:BackgroundColorValue',
      'desc' => [
        'en' => 'Background Color Value',
        'fr' => 'Valeur de couleur d\'arrière-plan',
      ],
    ],
  ];

}
