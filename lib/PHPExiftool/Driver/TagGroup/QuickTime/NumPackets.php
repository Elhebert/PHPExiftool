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
class NumPackets extends AbstractTagGroup
{

  protected string $id = 'QuickTime:NumPackets';

  protected string $name = 'NumPackets';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::HintTrackInfo
       * line : 313779
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::HintTrackInfo.QuickTime:NumPackets',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::HintTrackInfo
       * line : 313783
       * type : int64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::HintTrackInfo.QuickTime:NumPackets',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
