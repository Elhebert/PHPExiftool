<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimeCreated extends AbstractTagGroup
{

  protected string $id = 'Kodak:TimeCreated';

  protected string $name = 'TimeCreated';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Main
       * line : 157764
       * type : int8u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Kodak::Main.Kodak:TimeCreated',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::Type3
       * line : 160030
       * type : int8u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Kodak::Type3.Kodak:TimeCreated',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
