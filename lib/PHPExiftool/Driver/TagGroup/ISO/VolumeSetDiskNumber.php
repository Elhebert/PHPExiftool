<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ISO;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VolumeSetDiskNumber extends AbstractTagGroup
{

  protected string $id = 'ISO:VolumeSetDiskNumber';

  protected string $name = 'VolumeSetDiskNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ISO::PrimaryVolume
       * line : 152006
       * type : int16u
       * writable : false
       * count : 
       * flags : unknown
       */
      'id' => 'ISO::PrimaryVolume.ISO:VolumeSetDiskNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 32;

}
