<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VignetteControl extends AbstractTagGroup
{

  protected string $id = 'Nikon:VignetteControl';

  protected string $name = 'VignetteControl';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197054
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::Main.Nikon:VignetteControl',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203341
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::NCTG.Nikon:VignetteControl',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
