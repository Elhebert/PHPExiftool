<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SanyoThumbnail extends AbstractTagGroup
{

  protected string $id = 'Sanyo:SanyoThumbnail';

  protected string $name = 'SanyoThumbnail';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sanyo::Main
       * line : 336109
       * type : undef
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sanyo::Main.Sanyo:SanyoThumbnail',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
