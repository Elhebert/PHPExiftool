<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FrameRate extends AbstractTagGroup
{

  protected string $id = 'Microsoft:FrameRate';

  protected string $name = 'FrameRate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 174658
       * type : ?
       * writable : false
       * count : 
       * flags : avoid
       */
      'id' => 'Microsoft::Xtra.Microsoft:FrameRate',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 175898
       * type : ?
       * writable : false
       * count : 
       * flags : avoid
       */
      'id' => 'Microsoft::Xtra.Microsoft:FrameRate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 1;

}
