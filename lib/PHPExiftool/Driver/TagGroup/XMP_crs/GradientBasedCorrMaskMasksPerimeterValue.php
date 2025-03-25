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
class GradientBasedCorrMaskMasksPerimeterValue extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:GradientBasedCorrMaskMasksPerimeterValue';

  protected string $name = 'GradientBasedCorrMaskMasksPerimeterValue';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 402478
       * type : real
       * writable : true
       * count : 
       * flags : flattened
       */
      'id' => 'XMP::crs.XMP-crs:GradientBasedCorrMaskMasksPerimeterValue',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
