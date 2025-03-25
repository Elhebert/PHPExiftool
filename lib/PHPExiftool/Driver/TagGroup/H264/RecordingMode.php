<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\H264;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RecordingMode extends AbstractTagGroup
{

  protected string $id = 'H264:RecordingMode';

  protected string $name = 'RecordingMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : H264::RecInfo
       * line : 142045
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::RecInfo.H264:RecordingMode',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
