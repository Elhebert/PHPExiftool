<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_PixelLive;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Genre extends AbstractTagGroup
{

  protected string $id = 'XMP-PixelLive:Genre';

  protected string $name = 'Genre';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::PixelLive
       * line : 397495
       * type : ?
       * writable : false
       * count : 
       * flags : avoid
       */
      'id' => 'XMP::PixelLive.XMP-PixelLive:Genre',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 1;

}
