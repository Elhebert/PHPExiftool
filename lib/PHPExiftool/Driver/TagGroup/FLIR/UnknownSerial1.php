<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UnknownSerial1 extends AbstractTagGroup
{

  protected string $id = 'FLIR:UnknownSerial1';

  protected string $name = 'UnknownSerial1';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::SerialNums
       * line : 123696
       * type : string
       * writable : false
       * count : 33
       * flags : permanent,unknown
       */
      'id' => 'FLIR::SerialNums.FLIR:UnknownSerial1',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 33;

  protected int $flags = 36;

}
