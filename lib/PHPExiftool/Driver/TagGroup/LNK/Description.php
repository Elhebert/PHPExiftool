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
class Description extends AbstractTagGroup
{

  protected string $id = 'LNK:Description';

  protected string $name = 'Description';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : LNK::Main
       * line : 161543
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'LNK::Main.LNK:Description',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
