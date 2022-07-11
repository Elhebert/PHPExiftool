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
class RetouchAreaMaskMasksPerimeterValue extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:RetouchAreaMaskMasksPerimeterValue';

  protected string $name = 'RetouchAreaMaskMasksPerimeterValue';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Retouch Area Mask Masks Perimeter Value',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 404502
       * type : real
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::crs.XMP-crs:RetouchAreaMaskMasksPerimeterValue',
      'desc' => [
        'en' => 'Retouch Area Mask Masks Perimeter Value',
      ],
    ],
  ];

}
