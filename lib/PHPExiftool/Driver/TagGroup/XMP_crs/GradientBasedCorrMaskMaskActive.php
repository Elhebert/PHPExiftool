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
class GradientBasedCorrMaskMaskActive extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:GradientBasedCorrMaskMaskActive';

  protected string $name = 'GradientBasedCorrMaskMaskActive';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 402388
       * type : boolean
       * writable : true
       * count : 
       * flags : flattened
       */
      'id' => 'XMP::crs.XMP-crs:GradientBasedCorrMaskMaskActive',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
