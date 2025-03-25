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
class LensID extends AbstractTagGroup
{

  protected string $id = 'Composite:LensID';

  protected string $name = 'LensID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90401
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:LensID',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Composite
       * line : 90413
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:LensID',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Composite
       * line : 90792
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:LensID',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Composite
       * line : 93755
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:LensID',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Composite
       * line : 94542
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:LensID',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
