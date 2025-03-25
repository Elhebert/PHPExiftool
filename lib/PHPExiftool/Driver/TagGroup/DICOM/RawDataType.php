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
class RawDataType extends AbstractTagGroup
{

  protected string $id = 'DICOM:RawDataType';

  protected string $name = 'RawDataType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 97783
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:RawDataType',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : DICOM::Main
       * line : 100418
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:RawDataType',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : DICOM::Main
       * line : 100421
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:RawDataType',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : DICOM::Main
       * line : 100427
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:RawDataType',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
