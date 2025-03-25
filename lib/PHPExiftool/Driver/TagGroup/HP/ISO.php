<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ISO extends AbstractTagGroup
{

  protected string $id = 'HP:ISO';

  protected string $name = 'ISO';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : HP::Type4
       * line : 142208
       * type : int16u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'HP::Type4.HP:ISO',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : HP::Type6
       * line : 142287
       * type : int16u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'HP::Type6.HP:ISO',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
