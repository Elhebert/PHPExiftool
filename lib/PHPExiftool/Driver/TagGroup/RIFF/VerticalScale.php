<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VerticalScale extends AbstractTagGroup
{

  protected string $id = 'RIFF:VerticalScale';

  protected string $name = 'VerticalScale';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::VP8
       * line : 328997
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::VP8.RIFF:VerticalScale',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
