<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLAC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CueSheet extends AbstractTagGroup
{

  protected string $id = 'FLAC:CueSheet';

  protected string $name = 'CueSheet';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLAC::Main
       * line : 121754
       * type : ?
       * writable : false
       * count : 
       * flags : binary,unknown
       */
      'id' => 'FLAC::Main.FLAC:CueSheet',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 34;

}
