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
class VolumeModifyDate extends AbstractTagGroup
{

  protected string $id = 'ISO:VolumeModifyDate';

  protected string $name = 'VolumeModifyDate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ISO::PrimaryVolume
       * line : 152075
       * type : undef
       * writable : false
       * count : 17
       * flags : 
       */
      'id' => 'ISO::PrimaryVolume.ISO:VolumeModifyDate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 17;

}
