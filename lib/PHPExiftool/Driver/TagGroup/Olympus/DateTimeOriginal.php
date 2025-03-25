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
class DateTimeOriginal extends AbstractTagGroup
{

  protected string $id = 'Olympus:DateTimeOriginal';

  protected string $name = 'DateTimeOriginal';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::OLYM
       * line : 260182
       * type : string
       * writable : false
       * count : 24
       * flags : permanent
       */
      'id' => 'Olympus::OLYM.Olympus:DateTimeOriginal',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::WAV
       * line : 262239
       * type : undef
       * writable : false
       * count : 12
       * flags : permanent
       */
      'id' => 'Olympus::WAV.Olympus:DateTimeOriginal',
      'desc' => [
      ],
    ],
  ];

  protected int $flags = 4;

}
