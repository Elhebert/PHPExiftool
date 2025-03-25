<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailImage extends AbstractTagGroup
{

  protected string $id = 'Canon:ThumbnailImage';

  protected string $name = 'ThumbnailImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CNTH
       * line : 4447
       * type : undef
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CNTH.Canon:ThumbnailImage',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::uuid
       * line : 71287
       * type : ?
       * writable : false
       * count : 
       * flags : binary,permanent
       */
      'id' => 'Canon::uuid.Canon:ThumbnailImage',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
