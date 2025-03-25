<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ICC_Untagged extends AbstractTagGroup
{

  protected string $id = 'Photoshop:ICC_Untagged';

  protected string $name = 'ICC_Untagged';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Main
       * line : 305538
       * type : int8u
       * writable : false
       * count : 
       * flags : unknown
       */
      'id' => 'Photoshop::Main.Photoshop:ICC_Untagged',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 32;

}
