<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawData extends AbstractTagGroup
{

  protected string $id = 'Samsung:RawData';

  protected string $name = 'RawData';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Type2
       * line : 335608
       * type : int32s
       * writable : true
       * count : 12
       * flags : permanent,unknown
       */
      'id' => 'Samsung::Type2.Samsung:RawData',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 12;

  protected int $flags = 2084;

}
