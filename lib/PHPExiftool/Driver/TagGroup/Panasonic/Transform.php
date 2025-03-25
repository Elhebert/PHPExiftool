<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Transform extends AbstractTagGroup
{

  protected string $id = 'Panasonic:Transform';

  protected string $name = 'Transform';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Main
       * line : 277261
       * type : undef
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Panasonic::Main.Panasonic:Transform',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::Main
       * line : 278670
       * type : undef
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Panasonic::Main.Panasonic:Transform',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

  protected int $flags = 2052;

}
