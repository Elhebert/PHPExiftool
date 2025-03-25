<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ITunes;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CatalogNumber extends AbstractTagGroup
{

  protected string $id = 'iTunes:CatalogNumber';

  protected string $name = 'CatalogNumber';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::iTunesInfo
       * line : 326602
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::iTunesInfo.iTunes:CatalogNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
