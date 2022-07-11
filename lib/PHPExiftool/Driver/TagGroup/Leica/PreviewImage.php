<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImage extends AbstractTagGroup
{

  protected string $id = 'Leica:PreviewImage';

  protected string $name = 'PreviewImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Image',
    'fr' => 'Aperçu',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica6
       * line : 275255
       * type : undef
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica6.Leica:PreviewImage',
      'desc' => [
        'en' => 'Preview Image',
        'fr' => 'Aperçu',
      ],
    ],
  ];

}
