<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhaseOne;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PhaseOne_0x0225 extends AbstractTagGroup
{

  protected string $id = 'PhaseOne:PhaseOne_0x0225';

  protected string $name = 'PhaseOne_0x0225';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PhaseOne::Main
       * line : 303430
       * type : int16s
       * writable : false
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'PhaseOne::Main.PhaseOne:PhaseOne_0x0225',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 36;

}
