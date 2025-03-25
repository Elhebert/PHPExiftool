<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DJI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DJI_DTAT extends AbstractTagGroup
{

  protected string $id = 'DJI:DJI_DTAT';

  protected string $name = 'DJI_DTAT';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::Main
       * line : 152623
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::Main.DJI:DJI_DTAT',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
