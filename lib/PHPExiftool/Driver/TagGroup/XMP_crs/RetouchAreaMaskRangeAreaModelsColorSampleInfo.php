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
class RetouchAreaMaskRangeAreaModelsColorSampleInfo extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:RetouchAreaMaskRangeAreaModelsColorSampleInfo';

  protected string $name = 'RetouchAreaMaskRangeAreaModelsColorSampleInfo';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Retouch Area Mask Range Area Models Color Sample Info',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 404346
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::crs.XMP-crs:RetouchAreaMaskRangeAreaModelsColorSampleInfo',
      'desc' => [
        'en' => 'Retouch Area Mask Range Area Models Color Sample Info',
      ],
    ],
  ];

}
