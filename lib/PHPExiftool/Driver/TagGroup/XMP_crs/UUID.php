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
class UUID extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:UUID';

  protected string $name = 'UUID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 404581
       * type : string
       * writable : true
       * count : 
       * flags : avoid
       */
      'id' => 'XMP::crs.XMP-crs:UUID',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2049;

}
