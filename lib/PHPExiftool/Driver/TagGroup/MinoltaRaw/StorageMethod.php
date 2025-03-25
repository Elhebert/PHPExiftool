<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MinoltaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StorageMethod extends AbstractTagGroup
{

  protected string $id = 'MinoltaRaw:StorageMethod';

  protected string $name = 'StorageMethod';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MinoltaRaw::PRD
       * line : 186809
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'MinoltaRaw::PRD.MinoltaRaw:StorageMethod',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
