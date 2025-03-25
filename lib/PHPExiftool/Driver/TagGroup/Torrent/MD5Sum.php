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
class MD5Sum extends AbstractTagGroup
{

  protected string $id = 'Torrent:MD5Sum';

  protected string $name = 'MD5Sum';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Torrent::Info
       * line : 394983
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Torrent::Info.Torrent:MD5Sum',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
