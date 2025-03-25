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
class Face4Position extends AbstractTagGroup
{

  protected string $id = 'Sony:Face4Position';

  protected string $name = 'Face4Position';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::FaceInfo
       * line : 352651
       * type : int16u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Sony::FaceInfo.Sony:Face4Position',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::FaceInfo1
       * line : 352703
       * type : int16u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Sony::FaceInfo1.Sony:Face4Position',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::FaceInfo2
       * line : 352755
       * type : int16u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Sony::FaceInfo2.Sony:Face4Position',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::FaceInfoA
       * line : 352846
       * type : int16u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Sony::FaceInfoA.Sony:Face4Position',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
