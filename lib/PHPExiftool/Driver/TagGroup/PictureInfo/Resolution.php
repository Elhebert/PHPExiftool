<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PictureInfo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Resolution extends AbstractTagGroup
{

  protected string $id = 'PictureInfo:Resolution';

  protected string $name = 'Resolution';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Resolution',
    'fr' => 'Résolution d\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : APP12::PictureInfo
       * line : 737
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'APP12::PictureInfo.PictureInfo:Resolution',
      'desc' => [
        'en' => 'Resolution',
        'fr' => 'Résolution d\'image',
      ],
    ],
  ];

}
