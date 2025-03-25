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
class HighLowKeyAdj extends AbstractTagGroup
{

  protected string $id = 'Pentax:HighLowKeyAdj';

  protected string $name = 'HighLowKeyAdj';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 299988
       * type : int16s
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Pentax::Main.Pentax:HighLowKeyAdj',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

  protected int $flags = 2052;

}
