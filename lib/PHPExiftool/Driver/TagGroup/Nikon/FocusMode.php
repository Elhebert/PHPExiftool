<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocusMode extends AbstractTagGroup
{

  protected string $id = 'Nikon:FocusMode';

  protected string $name = 'FocusMode';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AVITags
       * line : 191746
       * type : string
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AVITags.Nikon:FocusMode',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::Main
       * line : 196678
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::Main.Nikon:FocusMode',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203152
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::NCTG.Nikon:FocusMode',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
