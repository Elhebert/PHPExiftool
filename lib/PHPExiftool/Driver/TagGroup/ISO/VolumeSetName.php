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
class VolumeSetName extends AbstractTagGroup
{

  protected string $id = 'ISO:VolumeSetName';

  protected string $name = 'VolumeSetName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ISO::PrimaryVolume
       * line : 152026
       * type : string
       * writable : false
       * count : 128
       * flags : 
       */
      'id' => 'ISO::PrimaryVolume.ISO:VolumeSetName',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 128;

}
