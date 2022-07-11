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
class PaintCorrectionRangeMaskAreaModelsComponents extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:PaintCorrectionRangeMaskAreaModelsComponents';

  protected string $name = 'PaintCorrectionRangeMaskAreaModelsComponents';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Paint Correction Range Mask Area Models Components',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 404085
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List,Seq
       */
      'id' => 'XMP::crs.XMP-crs:PaintCorrectionRangeMaskAreaModelsComponents',
      'desc' => [
        'en' => 'Paint Correction Range Mask Area Models Components',
      ],
    ],
  ];

}
