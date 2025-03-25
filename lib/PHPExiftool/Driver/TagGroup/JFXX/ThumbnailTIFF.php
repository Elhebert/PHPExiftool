<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JFXX;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailTIFF extends AbstractTagGroup
{

  protected string $id = 'JFXX:ThumbnailTIFF';

  protected string $name = 'ThumbnailTIFF';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : JFIF::Extension
       * line : 152217
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JFIF::Extension.JFXX:ThumbnailTIFF',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : JFIF::Extension
       * line : 152221
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JFIF::Extension.JFXX:ThumbnailTIFF',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
