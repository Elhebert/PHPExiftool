<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_MDPR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Software extends AbstractTagGroup
{

  protected string $id = 'Real-MDPR:Software';

  protected string $name = 'Software';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::FileInfo
       * line : 330281
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::FileInfo.Real-MDPR:Software',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
