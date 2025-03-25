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
class Channels extends AbstractTagGroup
{

  protected string $id = 'Real-RA5:Channels';

  protected string $name = 'Channels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::AudioV5
       * line : 330092
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::AudioV5.Real-RA5:Channels',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
