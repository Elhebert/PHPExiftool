<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LocationName extends AbstractTagGroup
{

  protected string $id = 'Samsung:LocationName';

  protected string $name = 'LocationName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Type2
       * line : 335229
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Samsung::Type2.Samsung:LocationName',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
