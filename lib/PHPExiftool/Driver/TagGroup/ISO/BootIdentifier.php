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
class BootIdentifier extends AbstractTagGroup
{

  protected string $id = 'ISO:BootIdentifier';

  protected string $name = 'BootIdentifier';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ISO::BootRecord
       * line : 151982
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'ISO::BootRecord.ISO:BootIdentifier',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 32;

}
