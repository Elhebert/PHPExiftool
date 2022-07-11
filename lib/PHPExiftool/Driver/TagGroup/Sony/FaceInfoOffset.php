<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FaceInfoOffset extends AbstractTagGroup
{

  protected string $id = 'Sony:FaceInfoOffset';

  protected string $name = 'FaceInfoOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Face Info Offset',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::ShotInfo
       * line : 362363
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::ShotInfo.Sony:FaceInfoOffset',
      'desc' => [
        'en' => 'Face Info Offset',
      ],
    ],
  ];

}
