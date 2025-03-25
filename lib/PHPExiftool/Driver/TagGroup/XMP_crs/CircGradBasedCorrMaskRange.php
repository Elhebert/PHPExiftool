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
class CircGradBasedCorrMaskRange extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:CircGradBasedCorrMaskRange';

  protected string $name = 'CircGradBasedCorrMaskRange';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 401611
       * type : struct
       * writable : true
       * count : 
       * flags : flattened,list
       */
      'id' => 'XMP::crs.XMP-crs:CircGradBasedCorrMaskRange',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2112;

}
