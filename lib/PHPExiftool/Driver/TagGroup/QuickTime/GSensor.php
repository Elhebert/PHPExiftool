<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GSensor extends AbstractTagGroup
{

  protected string $id = 'QuickTime:GSensor';

  protected string $name = 'GSensor';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::RVMI_sReV
       * line : 324356
       * type : int16s
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'QuickTime::RVMI_sReV.QuickTime:GSensor',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::Stream
       * line : 324867
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Stream.QuickTime:GSensor',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 3;

}
