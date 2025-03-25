<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DateTimeOriginal extends AbstractTagGroup
{

  protected string $id = 'Sony:DateTimeOriginal';

  protected string $name = 'DateTimeOriginal';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::PMP
       * line : 361432
       * type : int8u
       * writable : false
       * count : 6
       * flags : permanent
       */
      'id' => 'Sony::PMP.Sony:DateTimeOriginal',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 6;

  protected int $flags = 4;

}
