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
class CircGradBasedCorrRangeMaskDepthMax extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:CircGradBasedCorrRangeMaskDepthMax';

  protected string $name = 'CircGradBasedCorrRangeMaskDepthMax';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 401905
       * type : real
       * writable : true
       * count : 
       * flags : flattened,list
       */
      'id' => 'XMP::crs.XMP-crs:CircGradBasedCorrRangeMaskDepthMax',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2112;

}
