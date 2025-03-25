<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Face1Position extends AbstractTagGroup
{

  protected string $id = 'Pentax:Face1Position';

  protected string $name = 'Face1Position';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::FacePos
       * line : 285640
       * type : int16u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Pentax::FacePos.Pentax:Face1Position',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

  protected int $flags = 2052;

}
