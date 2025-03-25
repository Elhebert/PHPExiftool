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
class SpecialMode extends AbstractTagGroup
{

  protected string $id = 'Olympus:SpecialMode';

  protected string $name = 'SpecialMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::Main
       * line : 256898
       * type : int32u
       * writable : false
       * count : 3
       * flags : permanent
       */
      'id' => 'Olympus::Main.Olympus:SpecialMode',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 3;

  protected int $flags = 4;

}
