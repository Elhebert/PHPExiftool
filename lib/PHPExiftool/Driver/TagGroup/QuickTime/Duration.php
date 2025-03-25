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
class Duration extends AbstractTagGroup
{

  protected string $id = 'QuickTime:Duration';

  protected string $name = 'Duration';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::MovieHeader
       * line : 324121
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::MovieHeader.QuickTime:Duration',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
