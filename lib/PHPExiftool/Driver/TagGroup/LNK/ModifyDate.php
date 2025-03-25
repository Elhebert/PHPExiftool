<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\LNK;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModifyDate extends AbstractTagGroup
{

  protected string $id = 'LNK:ModifyDate';

  protected string $name = 'ModifyDate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : LNK::Main
       * line : 161431
       * type : int64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'LNK::Main.LNK:ModifyDate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
