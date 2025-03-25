<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModifyDate extends AbstractTagGroup
{

  protected string $id = 'PDF:ModifyDate';

  protected string $name = 'ModifyDate';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::Info
       * line : 264213
       * type : date
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PDF::Info.PDF:ModifyDate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
