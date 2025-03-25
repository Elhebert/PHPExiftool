<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailImage extends AbstractTagGroup
{

  protected string $id = 'Panasonic:ThumbnailImage';

  protected string $name = 'ThumbnailImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::PANA
       * line : 278799
       * type : undef
       * writable : false
       * count : 16384
       * flags : permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:ThumbnailImage',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::PANA
       * line : 278838
       * type : undef
       * writable : false
       * count : 
       * flags : binary,permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:ThumbnailImage',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Panasonic::PANA
       * line : 278877
       * type : undef
       * writable : false
       * count : 
       * flags : binary,permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:ThumbnailImage',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 16384;

  protected int $flags = 4;

}
