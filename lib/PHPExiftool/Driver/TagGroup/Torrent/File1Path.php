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
class File1Path extends AbstractTagGroup
{

  protected string $id = 'Torrent:File1Path';

  protected string $name = 'File1Path';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Torrent::Files
       * line : 394957
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Torrent::Files.Torrent:File1Path',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
