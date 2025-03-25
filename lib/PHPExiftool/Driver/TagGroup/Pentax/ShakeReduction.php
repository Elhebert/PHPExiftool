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
class ShakeReduction extends AbstractTagGroup
{

  protected string $id = 'Pentax:ShakeReduction';

  protected string $name = 'ShakeReduction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::SRInfo
       * line : 301597
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::SRInfo.Pentax:ShakeReduction',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::SRInfo2
       * line : 301677
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::SRInfo2.Pentax:ShakeReduction',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
