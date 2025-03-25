<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BracketProgram extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:BracketProgram';

  protected string $name = 'BracketProgram';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 247546
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:BracketProgram',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : NikonSettings::Main
       * line : 247578
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:BracketProgram',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : NikonSettings::Main
       * line : 247613
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:BracketProgram',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
