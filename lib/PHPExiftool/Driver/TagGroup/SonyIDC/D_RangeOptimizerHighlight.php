<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SonyIDC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class D_RangeOptimizerHighlight extends AbstractTagGroup
{

  protected string $id = 'SonyIDC:D-RangeOptimizerHighlight';

  protected string $name = 'D-RangeOptimizerHighlight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : SonyIDC::Main
       * line : 394271
       * type : int32s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'SonyIDC::Main.SonyIDC:D-RangeOptimizerHighlight',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
