<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_RA4;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BitsPerSample extends AbstractTagGroup
{

  protected string $id = 'Real-RA4:BitsPerSample';

  protected string $name = 'BitsPerSample';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::AudioV4
       * line : 329838
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::AudioV4.Real-RA4:BitsPerSample',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
