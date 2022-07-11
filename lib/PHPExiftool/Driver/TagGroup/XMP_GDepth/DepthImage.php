<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_GDepth;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DepthImage extends AbstractTagGroup
{

  protected string $id = 'XMP-GDepth:DepthImage';

  protected string $name = 'DepthImage';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Depth Image',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GDepth
       * line : 397265
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::GDepth.XMP-GDepth:DepthImage',
      'desc' => [
        'en' => 'Depth Image',
      ],
    ],
  ];

}
