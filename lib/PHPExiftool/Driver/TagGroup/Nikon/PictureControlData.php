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
class PictureControlData extends AbstractTagGroup
{

  protected string $id = 'Nikon:PictureControlData';

  protected string $name = 'PictureControlData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197038
       * type : undef
       * writable : true
       * count : 
       * flags : binary,unsafe
       */
      'id' => 'Nikon::Main.Nikon:PictureControlData',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::Main
       * line : 197042
       * type : undef
       * writable : true
       * count : 
       * flags : binary,unsafe
       */
      'id' => 'Nikon::Main.Nikon:PictureControlData',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::Main
       * line : 197046
       * type : undef
       * writable : true
       * count : 
       * flags : binary,unsafe
       */
      'id' => 'Nikon::Main.Nikon:PictureControlData',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::Main
       * line : 197050
       * type : undef
       * writable : true
       * count : 
       * flags : binary,unsafe
       */
      'id' => 'Nikon::Main.Nikon:PictureControlData',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::Main
       * line : 199564
       * type : undef
       * writable : true
       * count : 
       * flags : binary,unsafe
       */
      'id' => 'Nikon::Main.Nikon:PictureControlData',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203325
       * type : undef
       * writable : true
       * count : 
       * flags : binary,unsafe
       */
      'id' => 'Nikon::NCTG.Nikon:PictureControlData',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203329
       * type : undef
       * writable : true
       * count : 
       * flags : binary,unsafe
       */
      'id' => 'Nikon::NCTG.Nikon:PictureControlData',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203333
       * type : undef
       * writable : true
       * count : 
       * flags : binary,unsafe
       */
      'id' => 'Nikon::NCTG.Nikon:PictureControlData',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203337
       * type : undef
       * writable : true
       * count : 
       * flags : binary,unsafe
       */
      'id' => 'Nikon::NCTG.Nikon:PictureControlData',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2066;

}
