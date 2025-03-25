<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InternalSerialNumber extends AbstractTagGroup
{

  protected string $id = 'Panasonic:InternalSerialNumber';

  protected string $name = 'InternalSerialNumber';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Main
       * line : 275993
       * type : undef
       * writable : true
       * count : 16
       * flags : permanent
       */
      'id' => 'Panasonic::Main.Panasonic:InternalSerialNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 16;

  protected int $flags = 2052;

}
