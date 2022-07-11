<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CoringValues extends AbstractTagGroup
{

  protected string $id = 'Olympus:CoringValues';

  protected string $name = 'CoringValues';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Coring Values',
  ];

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::ImageProcessing
       * line : 255666
       * type : int16u
       * writable : true
       * count : 7
       * flags : Permanent
       */
      'id' => 'Olympus::ImageProcessing.Olympus:CoringValues',
      'desc' => [
        'en' => 'Coring Values',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::RawInfo
       * line : 261276
       * type : int16u
       * writable : true
       * count : 11
       * flags : Permanent
       */
      'id' => 'Olympus::RawInfo.Olympus:CoringValues',
      'desc' => [
        'en' => 'Coring Values',
      ],
    ],
  ];

}
