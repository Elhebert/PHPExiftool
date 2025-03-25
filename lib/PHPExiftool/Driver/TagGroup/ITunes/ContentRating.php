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
class ContentRating extends AbstractTagGroup
{

  protected string $id = 'iTunes:ContentRating';

  protected string $name = 'ContentRating';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::iTunesInfo
       * line : 326667
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::iTunesInfo.iTunes:ContentRating',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
