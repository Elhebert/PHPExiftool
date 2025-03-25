<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Sequence extends AbstractTagGroup
{

  protected string $id = 'Reconyx:Sequence';

  protected string $name = 'Sequence';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Reconyx::Main
       * line : 330622
       * type : int16u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Reconyx::Main.Reconyx:Sequence',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Reconyx::Type2
       * line : 330857
       * type : int8u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Reconyx::Type2.Reconyx:Sequence',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Reconyx::Type3
       * line : 331082
       * type : int16u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Reconyx::Type3.Reconyx:Sequence',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

  protected int $flags = 2052;

}
