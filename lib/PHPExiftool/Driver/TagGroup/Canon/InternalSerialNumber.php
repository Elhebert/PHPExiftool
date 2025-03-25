<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InternalSerialNumber extends AbstractTagGroup
{

  protected string $id = 'Canon:InternalSerialNumber';

  protected string $name = 'InternalSerialNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::Main
       * line : 65885
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::Main.Canon:InternalSerialNumber',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::SerialInfo
       * line : 70121
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::SerialInfo.Canon:InternalSerialNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
