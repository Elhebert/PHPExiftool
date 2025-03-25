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
class Make extends AbstractTagGroup
{

  protected string $id = 'Panasonic:Make';

  protected string $name = 'Make';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::PANA
       * line : 278702
       * type : string
       * writable : false
       * count : 22
       * flags : permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:Make',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 22;

  protected int $flags = 4;

}
