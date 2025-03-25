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
class ReferencedPrintJobSequence extends AbstractTagGroup
{

  protected string $id = 'DICOM:ReferencedPrintJobSequence';

  protected string $name = 'ReferencedPrintJobSequence';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 102270
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:ReferencedPrintJobSequence',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : DICOM::Main
       * line : 102293
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:ReferencedPrintJobSequence',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
