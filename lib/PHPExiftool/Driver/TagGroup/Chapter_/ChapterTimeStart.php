<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Chapter_;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChapterTimeStart extends AbstractTagGroup
{

  protected string $id = 'Chapter#:ChapterTimeStart';

  protected string $name = 'ChapterTimeStart';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Matroska::Main
       * line : 173214
       * type : unsigned
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Matroska::Main.Chapter#:ChapterTimeStart',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
