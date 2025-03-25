<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NumChannels extends AbstractTagGroup
{

  protected string $id = 'Photoshop:NumChannels';

  protected string $name = 'NumChannels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Header
       * line : 304989
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Photoshop::Header.Photoshop:NumChannels',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
