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
class KelvinWB_13 extends AbstractTagGroup
{

  protected string $id = 'Pentax:KelvinWB_13';

  protected string $name = 'KelvinWB_13';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Kelvin WB 13',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::KelvinWB
       * line : 288812
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::KelvinWB.Pentax:KelvinWB_13',
      'desc' => [
        'en' => 'Kelvin WB 13',
      ],
    ],
  ];

}
