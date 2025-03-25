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
class NoiseReduction extends AbstractTagGroup
{

  protected string $id = 'Nikon:NoiseReduction';

  protected string $name = 'NoiseReduction';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AVITags
       * line : 191840
       * type : string
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AVITags.Nikon:NoiseReduction',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::Main
       * line : 197483
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::Main.Nikon:NoiseReduction',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
