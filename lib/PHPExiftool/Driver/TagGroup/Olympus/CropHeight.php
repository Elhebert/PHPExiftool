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
class CropHeight extends AbstractTagGroup
{

  protected string $id = 'Olympus:CropHeight';

  protected string $name = 'CropHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::ImageProcessing
       * line : 255367
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::ImageProcessing.Olympus:CropHeight',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::RawInfo
       * line : 260989
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::RawInfo.Olympus:CropHeight',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
