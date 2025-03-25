<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MinoltaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorMode extends AbstractTagGroup
{

  protected string $id = 'MinoltaRaw:ColorMode';

  protected string $name = 'ColorMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MinoltaRaw::RIF
       * line : 187006
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'MinoltaRaw::RIF.MinoltaRaw:ColorMode',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : MinoltaRaw::RIF
       * line : 187152
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'MinoltaRaw::RIF.MinoltaRaw:ColorMode',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
