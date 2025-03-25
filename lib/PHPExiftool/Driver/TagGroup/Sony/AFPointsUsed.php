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
class AFPointsUsed extends AbstractTagGroup
{

  protected string $id = 'Sony:AFPointsUsed';

  protected string $name = 'AFPointsUsed';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFInfo
       * line : 341654
       * type : int8u
       * writable : true
       * count : 10
       * flags : permanent
       */
      'id' => 'Sony::AFInfo.Sony:AFPointsUsed',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::AFInfo
       * line : 343031
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::AFInfo.Sony:AFPointsUsed',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Main
       * line : 355358
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Main.Sony:AFPointsUsed',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Main
       * line : 355462
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Main.Sony:AFPointsUsed',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 10;

  protected int $flags = 2052;

}
