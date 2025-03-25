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
class VideoTestResult extends AbstractTagGroup
{

  protected string $id = 'MXF:VideoTestResult';

  protected string $name = 'VideoTestResult';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 167954
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:VideoTestResult',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 167957
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:VideoTestResult',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
