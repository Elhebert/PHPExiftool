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
class PentaxModelID extends AbstractTagGroup
{

  protected string $id = 'Pentax:PentaxModelID';

  protected string $name = 'PentaxModelID';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::CameraInfo
       * line : 283899
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::CameraInfo.Pentax:PentaxModelID',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::Main
       * line : 294791
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::Main.Pentax:PentaxModelID',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
