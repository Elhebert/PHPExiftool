<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocusPositionVertical extends AbstractTagGroup
{

  protected string $id = 'Nikon:FocusPositionVertical';

  protected string $name = 'FocusPositionVertical';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AFInfo2V0400
       * line : 191041
       * type : int8u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2V0400.Nikon:FocusPositionVertical',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
