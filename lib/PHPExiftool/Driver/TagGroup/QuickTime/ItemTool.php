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
class ItemTool extends AbstractTagGroup
{

  protected string $id = 'QuickTime:ItemTool';

  protected string $name = 'ItemTool';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Rights
       * line : 324378
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Rights.QuickTime:ItemTool',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
