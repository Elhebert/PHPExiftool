<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NITF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BlocksPerColumn extends AbstractTagGroup
{

  protected string $id = 'NITF:BlocksPerColumn';

  protected string $name = 'BlocksPerColumn';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::NITF
       * line : 152781
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::NITF.NITF:BlocksPerColumn',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
