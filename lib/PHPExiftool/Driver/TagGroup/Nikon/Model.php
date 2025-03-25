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
class Model extends AbstractTagGroup
{

  protected string $id = 'Nikon:Model';

  protected string $name = 'Model';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AVITags
       * line : 191156
       * type : string
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AVITags.Nikon:Model',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::MOV
       * line : 196332
       * type : string
       * writable : false
       * count : 8
       * flags : permanent
       */
      'id' => 'Nikon::MOV.Nikon:Model',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::NCTG
       * line : 202131
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::NCTG.Nikon:Model',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 8;

  protected int $flags = 4;

}
