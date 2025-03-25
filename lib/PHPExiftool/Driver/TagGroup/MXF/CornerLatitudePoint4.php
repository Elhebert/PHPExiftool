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
class CornerLatitudePoint4 extends AbstractTagGroup
{

  protected string $id = 'MXF:CornerLatitudePoint4';

  protected string $name = 'CornerLatitudePoint4';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170402
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CornerLatitudePoint4',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170405
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CornerLatitudePoint4',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
