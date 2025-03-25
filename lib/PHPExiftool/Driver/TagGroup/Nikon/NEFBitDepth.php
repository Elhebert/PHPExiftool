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
class NEFBitDepth extends AbstractTagGroup
{

  protected string $id = 'Nikon:NEFBitDepth';

  protected string $name = 'NEFBitDepth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199618
       * type : int16u
       * writable : true
       * count : 4
       * flags : permanent,unsafe
       */
      'id' => 'Nikon::Main.Nikon:NEFBitDepth',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2068;

}
