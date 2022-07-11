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
class HDRLevel extends AbstractTagGroup
{

  protected string $id = 'Nikon:HDRLevel';

  protected string $name = 'HDRLevel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'HDR Level',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::HDRInfo
       * line : 195646
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::HDRInfo.Nikon:HDRLevel',
      'desc' => [
        'en' => 'HDR Level',
      ],
    ],
  ];

}
