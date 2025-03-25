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
class MakerNotes0x51 extends AbstractTagGroup
{

  protected string $id = 'Nikon:MakerNotes0x51';

  protected string $name = 'MakerNotes0x51';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197168
       * type : undef
       * writable : true
       * count : 
       * flags : binary,unsafe
       */
      'id' => 'Nikon::Main.Nikon:MakerNotes0x51',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2066;

}
