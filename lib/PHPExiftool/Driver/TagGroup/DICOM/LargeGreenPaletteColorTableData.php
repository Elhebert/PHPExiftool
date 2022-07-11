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
class LargeGreenPaletteColorTableData extends AbstractTagGroup
{

  protected string $id = 'DICOM:LargeGreenPaletteColorTableData';

  protected string $name = 'LargeGreenPaletteColorTableData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Large Green Palette Color Table Data',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 99348
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'DICOM::Main.DICOM:LargeGreenPaletteColorTableData',
      'desc' => [
        'en' => 'Large Green Palette Color Table Data',
      ],
    ],
  ];

}
