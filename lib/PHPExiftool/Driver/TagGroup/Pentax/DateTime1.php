<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DateTime1 extends AbstractTagGroup
{

  protected string $id = 'Pentax:DateTime1';

  protected string $name = 'DateTime1';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Junk2
       * line : 288381
       * type : string
       * writable : false
       * count : 24
       * flags : permanent
       */
      'id' => 'Pentax::Junk2.Pentax:DateTime1',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::PENT
       * line : 301052
       * type : string
       * writable : false
       * count : 24
       * flags : permanent
       */
      'id' => 'Pentax::PENT.Pentax:DateTime1',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 24;

  protected int $flags = 4;

}
