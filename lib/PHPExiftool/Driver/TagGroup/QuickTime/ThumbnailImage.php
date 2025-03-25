<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailImage extends AbstractTagGroup
{

  protected string $id = 'QuickTime:ThumbnailImage';

  protected string $name = 'ThumbnailImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Main
       * line : 323766
       * type : ?
       * writable : false
       * count : 
       * flags : binary
       */
      'id' => 'QuickTime::Main.QuickTime:ThumbnailImage',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::Main
       * line : 323823
       * type : ?
       * writable : false
       * count : 
       * flags : binary
       */
      'id' => 'QuickTime::Main.QuickTime:ThumbnailImage',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : QuickTime::Main
       * line : 323841
       * type : ?
       * writable : false
       * count : 
       * flags : binary
       */
      'id' => 'QuickTime::Main.QuickTime:ThumbnailImage',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2;

}
