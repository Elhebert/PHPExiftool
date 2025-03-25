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
class OperatingSystem extends AbstractTagGroup
{

  protected string $id = 'ZIP:OperatingSystem';

  protected string $name = 'OperatingSystem';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ZIP::GZIP
       * line : 414739
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ZIP::GZIP.ZIP:OperatingSystem',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : ZIP::RAR
       * line : 414961
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ZIP::RAR.ZIP:OperatingSystem',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
