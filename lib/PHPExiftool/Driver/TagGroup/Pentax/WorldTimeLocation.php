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
class WorldTimeLocation extends AbstractTagGroup
{

  protected string $id = 'Pentax:WorldTimeLocation';

  protected string $name = 'WorldTimeLocation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 298146
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::Main.Pentax:WorldTimeLocation',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::TimeInfo
       * line : 301832
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::TimeInfo.Pentax:WorldTimeLocation',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
