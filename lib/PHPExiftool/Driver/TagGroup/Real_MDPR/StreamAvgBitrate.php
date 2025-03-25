<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_MDPR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StreamAvgBitrate extends AbstractTagGroup
{

  protected string $id = 'Real-MDPR:StreamAvgBitrate';

  protected string $name = 'StreamAvgBitrate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::MediaProps
       * line : 330377
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::MediaProps.Real-MDPR:StreamAvgBitrate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
