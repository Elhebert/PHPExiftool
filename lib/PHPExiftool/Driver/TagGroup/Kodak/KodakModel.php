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
class KodakModel extends AbstractTagGroup
{

  protected string $id = 'Kodak:KodakModel';

  protected string $name = 'KodakModel';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Main
       * line : 157669
       * type : string
       * writable : true
       * count : 8
       * flags : permanent
       */
      'id' => 'Kodak::Main.Kodak:KodakModel',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::Type11
       * line : 159951
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type11.Kodak:KodakModel',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Kodak::Type2
       * line : 160008
       * type : string
       * writable : true
       * count : 32
       * flags : permanent
       */
      'id' => 'Kodak::Type2.Kodak:KodakModel',
      'desc' => [
      ],
    ],
  ];

  protected int $flags = 2052;

}
