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
class System extends AbstractTagGroup
{

  protected string $id = 'ISO:System';

  protected string $name = 'System';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ISO::PrimaryVolume
       * line : 151990
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'ISO::PrimaryVolume.ISO:System',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 32;

}
