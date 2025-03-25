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
class Make extends AbstractTagGroup
{

  protected string $id = 'Nikon:Make';

  protected string $name = 'Make';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AVITags
       * line : 191138
       * type : string
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AVITags.Nikon:Make',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::MOV
       * line : 196314
       * type : string
       * writable : false
       * count : 24
       * flags : permanent
       */
      'id' => 'Nikon::MOV.Nikon:Make',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::NCTG
       * line : 202113
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::NCTG.Nikon:Make',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 24;

  protected int $flags = 4;

}
