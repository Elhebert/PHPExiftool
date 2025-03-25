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
class CropTop extends AbstractTagGroup
{

  protected string $id = 'Olympus:CropTop';

  protected string $name = 'CropTop';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::ImageProcessing
       * line : 255353
       * type : int16u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Olympus::ImageProcessing.Olympus:CropTop',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::RawInfo
       * line : 260975
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::RawInfo.Olympus:CropTop',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

  protected int $flags = 2052;

}
