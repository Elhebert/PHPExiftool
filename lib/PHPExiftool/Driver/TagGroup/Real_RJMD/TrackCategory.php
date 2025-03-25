<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_RJMD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TrackCategory extends AbstractTagGroup
{

  protected string $id = 'Real-RJMD:TrackCategory';

  protected string $name = 'TrackCategory';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::Metadata
       * line : 330466
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::Metadata.Real-RJMD:TrackCategory',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
