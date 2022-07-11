<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PaintCorrectionRangeMask extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:PaintCorrectionRangeMask';

  protected string $name = 'PaintCorrectionRangeMask';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Paint Correction Range Mask',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 404079
       * type : struct
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::crs.XMP-crs:PaintCorrectionRangeMask',
      'desc' => [
        'en' => 'Paint Correction Range Mask',
      ],
    ],
  ];

}
