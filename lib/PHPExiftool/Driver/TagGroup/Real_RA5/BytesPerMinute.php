<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_RA5;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BytesPerMinute extends AbstractTagGroup
{

  protected string $id = 'Real-RA5:BytesPerMinute';

  protected string $name = 'BytesPerMinute';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::AudioV5
       * line : 330022
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::AudioV5.Real-RA5:BytesPerMinute',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
