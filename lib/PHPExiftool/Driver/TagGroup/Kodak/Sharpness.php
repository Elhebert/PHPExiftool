<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Sharpness extends AbstractTagGroup
{

  protected string $id = 'Kodak:Sharpness';

  protected string $name = 'Sharpness';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Main
       * line : 158326
       * type : int8s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Main.Kodak:Sharpness',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::Type3
       * line : 160045
       * type : int8s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type3.Kodak:Sharpness',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
