<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoAlphaPremultipleColorCyan extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpDM:VideoAlphaPremultipleColorCyan';

  protected string $name = 'VideoAlphaPremultipleColorCyan';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpDM
       * line : 413633
       * type : real
       * writable : true
       * count : 
       * flags : flattened
       */
      'id' => 'XMP::xmpDM.XMP-xmpDM:VideoAlphaPremultipleColorCyan',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
