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
class BWFilter extends AbstractTagGroup
{

  protected string $id = 'MinoltaRaw:BWFilter';

  protected string $name = 'BWFilter';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MinoltaRaw::RIF
       * line : 187545
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'MinoltaRaw::RIF.MinoltaRaw:BWFilter',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
