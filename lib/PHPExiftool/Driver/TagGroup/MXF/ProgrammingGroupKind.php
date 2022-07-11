<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProgrammingGroupKind extends AbstractTagGroup
{

  protected string $id = 'MXF:ProgrammingGroupKind';

  protected string $name = 'ProgrammingGroupKind';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Programming Group Kind',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170216
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ProgrammingGroupKind',
      'desc' => [
        'en' => 'Programming Group Kind',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171380
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ProgrammingGroupKind',
      'desc' => [
        'en' => 'Programming Group Kind',
      ],
    ],
  ];

}
