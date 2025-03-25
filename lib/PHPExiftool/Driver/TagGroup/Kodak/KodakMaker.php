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
class KodakMaker extends AbstractTagGroup
{

  protected string $id = 'Kodak:KodakMaker';

  protected string $name = 'KodakMaker';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Type2
       * line : 160005
       * type : string
       * writable : true
       * count : 32
       * flags : permanent
       */
      'id' => 'Kodak::Type2.Kodak:KodakMaker',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 32;

  protected int $flags = 2052;

}
