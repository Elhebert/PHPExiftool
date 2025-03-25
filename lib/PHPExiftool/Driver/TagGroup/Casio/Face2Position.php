<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Face2Position extends AbstractTagGroup
{

  protected string $id = 'Casio:Face2Position';

  protected string $name = 'Face2Position';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Casio::FaceInfo1
       * line : 83887
       * type : int16u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Casio::FaceInfo1.Casio:Face2Position',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Casio::FaceInfo2
       * line : 84033
       * type : int16u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Casio::FaceInfo2.Casio:Face2Position',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
