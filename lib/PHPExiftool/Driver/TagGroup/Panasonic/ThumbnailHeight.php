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
class ThumbnailHeight extends AbstractTagGroup
{

  protected string $id = 'Panasonic:ThumbnailHeight';

  protected string $name = 'ThumbnailHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::PANA
       * line : 278792
       * type : int16u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:ThumbnailHeight',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::PANA
       * line : 278824
       * type : int32uRev
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:ThumbnailHeight',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Panasonic::PANA
       * line : 278863
       * type : int32uRev
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:ThumbnailHeight',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
