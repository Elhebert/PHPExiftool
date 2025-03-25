<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\EXE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CPUByteOrder extends AbstractTagGroup
{

  protected string $id = 'EXE:CPUByteOrder';

  protected string $name = 'CPUByteOrder';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : EXE::ELF
       * line : 107993
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'EXE::ELF.EXE:CPUByteOrder',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : EXE::MachO
       * line : 108161
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'EXE::MachO.EXE:CPUByteOrder',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
