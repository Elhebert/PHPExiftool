<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DateTime2 extends AbstractTagGroup
{

  protected string $id = 'Olympus:DateTime2';

  protected string $name = 'DateTime2';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::AVI
       * line : 250356
       * type : string
       * writable : false
       * count : 24
       * flags : permanent
       */
      'id' => 'Olympus::AVI.Olympus:DateTime2',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::OLYM
       * line : 260200
       * type : string
       * writable : false
       * count : 24
       * flags : permanent
       */
      'id' => 'Olympus::OLYM.Olympus:DateTime2',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Olympus::prms
       * line : 263248
       * type : string
       * writable : false
       * count : 24
       * flags : permanent
       */
      'id' => 'Olympus::prms.Olympus:DateTime2',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 24;

  protected int $flags = 4;

}
