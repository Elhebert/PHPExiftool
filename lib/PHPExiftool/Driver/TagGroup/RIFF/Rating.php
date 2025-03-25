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
class Rating extends AbstractTagGroup
{

  protected string $id = 'RIFF:Rating';

  protected string $name = 'Rating';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Info
       * line : 328366
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Info.RIFF:Rating',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
