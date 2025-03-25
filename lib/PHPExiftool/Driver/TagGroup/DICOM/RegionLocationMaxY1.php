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
class RegionLocationMaxY1 extends AbstractTagGroup
{

  protected string $id = 'DICOM:RegionLocationMaxY1';

  protected string $name = 'RegionLocationMaxY1';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 96267
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:RegionLocationMaxY1',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
