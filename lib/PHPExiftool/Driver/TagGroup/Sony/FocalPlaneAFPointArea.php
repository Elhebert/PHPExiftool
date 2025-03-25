<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocalPlaneAFPointArea extends AbstractTagGroup
{

  protected string $id = 'Sony:FocalPlaneAFPointArea';

  protected string $name = 'FocalPlaneAFPointArea';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag202a
       * line : 378962
       * type : int16u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Sony::Tag202a.Sony:FocalPlaneAFPointArea',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

  protected int $flags = 2052;

}
