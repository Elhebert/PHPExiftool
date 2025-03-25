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
class NumberOfImagesArchived extends AbstractTagGroup
{

  protected string $id = 'DICOM:NumberOfImagesArchived';

  protected string $name = 'NumberOfImagesArchived';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 98483
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:NumberOfImagesArchived',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
