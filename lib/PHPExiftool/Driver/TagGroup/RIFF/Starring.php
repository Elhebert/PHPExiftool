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
class Starring extends AbstractTagGroup
{

  protected string $id = 'RIFF:Starring';

  protected string $name = 'Starring';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Info
       * line : 328460
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Info.RIFF:Starring',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : RIFF::Info
       * line : 328513
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Info.RIFF:Starring',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
