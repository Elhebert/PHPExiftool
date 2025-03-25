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
class PrintInfo2 extends AbstractTagGroup
{

  protected string $id = 'Photoshop:PrintInfo2';

  protected string $name = 'PrintInfo2';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Main
       * line : 305659
       * type : ?
       * writable : false
       * count : 
       * flags : unknown
       */
      'id' => 'Photoshop::Main.Photoshop:PrintInfo2',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 32;

}
