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
class BlueSaturation extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:BlueSaturation';

  protected string $name = 'BlueSaturation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Blue Saturation',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 401884
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::crs.XMP-crs:BlueSaturation',
      'desc' => [
        'en' => 'Blue Saturation',
      ],
    ],
  ];

}
