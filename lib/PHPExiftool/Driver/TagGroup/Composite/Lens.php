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
class Lens extends AbstractTagGroup
{

  protected string $id = 'Composite:Lens';

  protected string $name = 'Lens';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90164
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:Lens',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
