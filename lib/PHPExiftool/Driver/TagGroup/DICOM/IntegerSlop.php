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
class IntegerSlop extends AbstractTagGroup
{

  protected string $id = 'DICOM:IntegerSlop';

  protected string $name = 'IntegerSlop';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 98243
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:IntegerSlop',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : DICOM::Main
       * line : 98246
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:IntegerSlop',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : DICOM::Main
       * line : 98249
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:IntegerSlop',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : DICOM::Main
       * line : 98252
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:IntegerSlop',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : DICOM::Main
       * line : 98255
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:IntegerSlop',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
