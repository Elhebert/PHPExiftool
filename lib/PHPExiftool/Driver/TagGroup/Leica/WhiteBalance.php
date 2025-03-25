<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalance extends AbstractTagGroup
{

  protected string $id = 'Leica:WhiteBalance';

  protected string $name = 'WhiteBalance';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica2
       * line : 274354
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::Leica2.Leica:WhiteBalance',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::Subdir
       * line : 279141
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::Subdir.Leica:WhiteBalance',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
