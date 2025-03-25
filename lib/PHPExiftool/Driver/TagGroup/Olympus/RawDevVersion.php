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
class RawDevVersion extends AbstractTagGroup
{

  protected string $id = 'Olympus:RawDevVersion';

  protected string $name = 'RawDevVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::RawDevelopment
       * line : 260221
       * type : undef
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Olympus::RawDevelopment.Olympus:RawDevVersion',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::RawDevelopment2
       * line : 260413
       * type : undef
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Olympus::RawDevelopment2.Olympus:RawDevVersion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
