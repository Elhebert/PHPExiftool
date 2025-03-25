<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageHeight extends AbstractTagGroup
{

  protected string $id = 'RIFF:ImageHeight';

  protected string $name = 'ImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::AVIHeader
       * line : 326963
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::AVIHeader.RIFF:ImageHeight',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : RIFF::VP8
       * line : 328979
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::VP8.RIFF:ImageHeight',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : RIFF::VP8L
       * line : 329022
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::VP8L.RIFF:ImageHeight',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : RIFF::VP8X
       * line : 329062
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::VP8X.RIFF:ImageHeight',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
