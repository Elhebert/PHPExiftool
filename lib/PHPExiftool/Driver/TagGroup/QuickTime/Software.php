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
class Software extends AbstractTagGroup
{

  protected string $id = 'QuickTime:Software';

  protected string $name = 'Software';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::MetaData
       * line : 323978
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::MetaData.QuickTime:Software',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
