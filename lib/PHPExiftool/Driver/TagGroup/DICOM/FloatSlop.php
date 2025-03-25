<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FloatSlop extends AbstractTagGroup
{

  protected string $id = 'DICOM:FloatSlop';

  protected string $name = 'FloatSlop';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 98258
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:FloatSlop',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : DICOM::Main
       * line : 98261
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:FloatSlop',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : DICOM::Main
       * line : 98264
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:FloatSlop',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : DICOM::Main
       * line : 98267
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:FloatSlop',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : DICOM::Main
       * line : 98270
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:FloatSlop',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
