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
class FocusInfoVersion extends AbstractTagGroup
{

  protected string $id = 'Olympus:FocusInfoVersion';

  protected string $name = 'FocusInfoVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::FocusInfo
       * line : 254694
       * type : undef
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Olympus::FocusInfo.Olympus:FocusInfoVersion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
