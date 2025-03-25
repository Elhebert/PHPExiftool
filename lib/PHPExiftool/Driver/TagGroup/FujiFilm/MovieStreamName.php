<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FujiFilm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MovieStreamName extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:MovieStreamName';

  protected string $name = 'MovieStreamName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::FFMV
       * line : 128390
       * type : string
       * writable : false
       * count : 34
       * flags : permanent
       */
      'id' => 'FujiFilm::FFMV.FujiFilm:MovieStreamName',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 34;

  protected int $flags = 4;

}
