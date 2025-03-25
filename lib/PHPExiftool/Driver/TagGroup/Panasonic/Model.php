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
class Model extends AbstractTagGroup
{

  protected string $id = 'Panasonic:Model';

  protected string $name = 'Model';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::PANA
       * line : 278720
       * type : string
       * writable : false
       * count : 16
       * flags : permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:Model',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::PANA
       * line : 278738
       * type : string
       * writable : false
       * count : 16
       * flags : permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:Model',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Panasonic::PANA
       * line : 278756
       * type : string
       * writable : false
       * count : 30
       * flags : permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:Model',
      'desc' => [
      ],
    ],
  ];

  protected int $flags = 4;

}
