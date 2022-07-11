<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RetouchAreaSpotType extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:RetouchAreaSpotType';

  protected string $name = 'RetouchAreaSpotType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Retouch Area Spot Type',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 401309
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Flattened
       */
      'id' => 'XMP::crd.XMP-crd:RetouchAreaSpotType',
      'desc' => [
        'en' => 'Retouch Area Spot Type',
      ],
    ],
  ];

}
