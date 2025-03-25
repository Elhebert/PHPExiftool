<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FrameCenterLongitude extends AbstractTagGroup
{

  protected string $id = 'MXF:FrameCenterLongitude';

  protected string $name = 'FrameCenterLongitude';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168299
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FrameCenterLongitude',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 168302
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FrameCenterLongitude',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : MXF::Main
       * line : 170381
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FrameCenterLongitude',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
