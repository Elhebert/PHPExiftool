<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalance extends AbstractTagGroup
{

  protected string $id = 'Ricoh:WhiteBalance';

  protected string $name = 'WhiteBalance';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::ImageInfo
       * line : 332098
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Ricoh::ImageInfo.Ricoh:WhiteBalance',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Ricoh::Main
       * line : 332636
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Ricoh::Main.Ricoh:WhiteBalance',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
