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
class ExtraInfoVersion extends AbstractTagGroup
{

  protected string $id = 'Sony:ExtraInfoVersion';

  protected string $name = 'ExtraInfoVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::ExtraInfo
       * line : 352167
       * type : int8u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Sony::ExtraInfo.Sony:ExtraInfoVersion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
