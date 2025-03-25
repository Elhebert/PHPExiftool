<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RecognizedFace1Position extends AbstractTagGroup
{

  protected string $id = 'Panasonic:RecognizedFace1Position';

  protected string $name = 'RecognizedFace1Position';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::FaceRecInfo
       * line : 274204
       * type : int16u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Panasonic::FaceRecInfo.Panasonic:RecognizedFace1Position',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
