<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawDevWhiteBalanceValue extends AbstractTagGroup
{

  protected string $id = 'Olympus:RawDevWhiteBalanceValue';

  protected string $name = 'RawDevWhiteBalanceValue';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::RawDevelopment
       * line : 260231
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::RawDevelopment.Olympus:RawDevWhiteBalanceValue',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::RawDevelopment2
       * line : 260439
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::RawDevelopment2.Olympus:RawDevWhiteBalanceValue',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
