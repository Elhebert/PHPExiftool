<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\System;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ZoneIdentifier extends AbstractTagGroup
{

  protected string $id = 'System:ZoneIdentifier';

  protected string $name = 'ZoneIdentifier';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121621
       * type : ?
       * writable : true
       * count : 
       * flags : unsafe
       */
      'id' => 'Extra.System:ZoneIdentifier',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2064;

}
