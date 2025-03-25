<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SmartAlbumColor extends AbstractTagGroup
{

  protected string $id = 'Samsung:SmartAlbumColor';

  protected string $name = 'SmartAlbumColor';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Type2
       * line : 335182
       * type : int16u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Samsung::Type2.Samsung:SmartAlbumColor',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Samsung::Type2
       * line : 335192
       * type : int16u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Samsung::Type2.Samsung:SmartAlbumColor',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

  protected int $flags = 2052;

}
