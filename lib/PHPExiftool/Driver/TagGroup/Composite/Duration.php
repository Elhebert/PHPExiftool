<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Duration extends AbstractTagGroup
{

  protected string $id = 'Composite:Duration';

  protected string $name = 'Duration';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90023
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:Duration',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Composite
       * line : 90031
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:Duration',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Composite
       * line : 90552
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:Duration',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Composite
       * line : 90747
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:Duration',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Composite
       * line : 93739
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:Duration',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Composite
       * line : 93747
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:Duration',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Composite
       * line : 93878
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:Duration',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
