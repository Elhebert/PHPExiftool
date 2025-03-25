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
class MaskGroupBasedCorrMaskRangeSampleType extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:MaskGroupBasedCorrMaskRangeSampleType';

  protected string $name = 'MaskGroupBasedCorrMaskRangeSampleType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 403028
       * type : integer
       * writable : true
       * count : 
       * flags : flattened,list
       */
      'id' => 'XMP::crs.XMP-crs:MaskGroupBasedCorrMaskRangeSampleType',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2112;

}
