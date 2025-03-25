<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModifyDate extends AbstractTagGroup
{

  protected string $id = 'QuickTime:ModifyDate';

  protected string $name = 'ModifyDate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::MetaData
       * line : 324029
       * type : ?
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'QuickTime::MetaData.QuickTime:ModifyDate',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::MovieHeader
       * line : 324100
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'QuickTime::MovieHeader.QuickTime:ModifyDate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
