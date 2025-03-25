<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ItemList;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Grouping extends AbstractTagGroup
{

  protected string $id = 'ItemList:Grouping';

  protected string $name = 'Grouping';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::ItemList
       * line : 322180
       * type : string
       * writable : true
       * count : 
       * flags : avoid
       */
      'id' => 'QuickTime::ItemList.ItemList:Grouping',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::ItemList
       * line : 323080
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::ItemList.ItemList:Grouping',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
