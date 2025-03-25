<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ZIP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModifyDate extends AbstractTagGroup
{

  protected string $id = 'ZIP:ModifyDate';

  protected string $name = 'ModifyDate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ZIP::GZIP
       * line : 414701
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ZIP::GZIP.ZIP:ModifyDate',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : ZIP::RAR
       * line : 414980
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ZIP::RAR.ZIP:ModifyDate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
