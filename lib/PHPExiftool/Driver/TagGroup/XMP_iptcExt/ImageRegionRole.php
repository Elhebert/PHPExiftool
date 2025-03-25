<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageRegionRole extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcExt:ImageRegionRole';

  protected string $name = 'ImageRegionRole';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcExt
       * line : 409422
       * type : struct
       * writable : true
       * count : 
       * flags : bag,flattened,list
       */
      'id' => 'XMP::iptcExt.XMP-iptcExt:ImageRegionRole',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2368;

}
