<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageWidth extends AbstractTagGroup
{

  protected string $id = 'File:ImageWidth';

  protected string $name = 'ImageWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : BMP::Main
       * line : 3200
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BMP::Main.File:ImageWidth',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : BMP::OS2
       * line : 3496
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BMP::OS2.File:ImageWidth',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : BPG::Main
       * line : 3692
       * type : var_ue7
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BPG::Main.File:ImageWidth',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : DPX::Main
       * line : 105539
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DPX::Main.File:ImageWidth',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Extra
       * line : 121426
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Extra.File:ImageWidth',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : FLIF::Main
       * line : 122073
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIF::Main.File:ImageWidth',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : JPEG::SOF
       * line : 152991
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::SOF.File:ImageWidth',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : MRC::Main
       * line : 166804
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MRC::Main.File:ImageWidth',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Other::PFM
       * line : 263813
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Other::PFM.File:ImageWidth',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : PCX::Main
       * line : 263904
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PCX::Main.File:ImageWidth',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : PGF::Main
       * line : 264469
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PGF::Main.File:ImageWidth',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
