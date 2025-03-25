<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Make extends AbstractTagGroup
{

  protected string $id = 'IFD0:Make';

  protected string $name = 'Make';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 110581
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:Make',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : PanasonicRaw::Main
       * line : 280509
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PanasonicRaw::Main.IFD0:Make',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
