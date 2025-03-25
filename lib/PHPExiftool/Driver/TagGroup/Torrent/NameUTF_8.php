<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Torrent;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NameUTF_8 extends AbstractTagGroup
{

  protected string $id = 'Torrent:NameUTF-8';

  protected string $name = 'NameUTF-8';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Torrent::Info
       * line : 394994
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Torrent::Info.Torrent:NameUTF-8',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
