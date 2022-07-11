<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageSize extends AbstractTagGroup
{

  protected string $id = 'Kodak:PreviewImageSize';

  protected string $name = 'PreviewImageSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Image Size',
    'fr' => 'Taille d\'image miniature',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Type10
       * line : 160186
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Kodak::Type10.Kodak:PreviewImageSize',
      'desc' => [
        'en' => 'Preview Image Size',
        'fr' => 'Taille d\'image miniature',
      ],
    ],
  ];

}
