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
class FlashMode extends AbstractTagGroup
{

  protected string $id = 'Kodak:FlashMode';

  protected string $name = 'FlashMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Main
       * line : 158093
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Main.Kodak:FlashMode',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::Type5
       * line : 160288
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type5.Kodak:FlashMode',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
