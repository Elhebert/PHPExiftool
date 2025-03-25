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
class ByteOrder extends AbstractTagGroup
{

  protected string $id = 'File:ByteOrder';

  protected string $name = 'ByteOrder';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : DPX::Main
       * line : 105292
       * type : undef
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'DPX::Main.File:ByteOrder',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Other::PFM
       * line : 263758
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Other::PFM.File:ByteOrder',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

}
