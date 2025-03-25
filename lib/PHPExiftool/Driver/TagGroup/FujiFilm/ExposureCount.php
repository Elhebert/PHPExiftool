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
class ExposureCount extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:ExposureCount';

  protected string $name = 'ExposureCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::Main
       * line : 130085
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'FujiFilm::Main.FujiFilm:ExposureCount',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
