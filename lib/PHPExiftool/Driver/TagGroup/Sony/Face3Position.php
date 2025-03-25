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
class Face3Position extends AbstractTagGroup
{

  protected string $id = 'Sony:Face3Position';

  protected string $name = 'Face3Position';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::FaceInfo
       * line : 352645
       * type : int16u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Sony::FaceInfo.Sony:Face3Position',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::FaceInfo1
       * line : 352697
       * type : int16u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Sony::FaceInfo1.Sony:Face3Position',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::FaceInfo2
       * line : 352749
       * type : int16u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Sony::FaceInfo2.Sony:Face3Position',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::FaceInfoA
       * line : 352840
       * type : int16u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Sony::FaceInfoA.Sony:Face3Position',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
