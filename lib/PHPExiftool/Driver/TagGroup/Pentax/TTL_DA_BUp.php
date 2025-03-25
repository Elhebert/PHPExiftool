<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TTL_DA_BUp extends AbstractTagGroup
{

  protected string $id = 'Pentax:TTL_DA_BUp';

  protected string $name = 'TTL_DA_BUp';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::FlashInfo
       * line : 288182
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::FlashInfo.Pentax:TTL_DA_BUp',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
