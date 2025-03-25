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
class DynamicRangeSetting extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:DynamicRangeSetting';

  protected string $name = 'DynamicRangeSetting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::Main
       * line : 130634
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'FujiFilm::Main.FujiFilm:DynamicRangeSetting',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
