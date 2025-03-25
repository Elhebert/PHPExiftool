<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leaf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Scale extends AbstractTagGroup
{

  protected string $id = 'Leaf:Scale';

  protected string $name = 'Scale';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::Selection
       * line : 162059
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::Selection.Leaf:Scale',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
