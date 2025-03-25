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
class AFAreaPointSize extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:AFAreaPointSize';

  protected string $name = 'AFAreaPointSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::FocusSettings
       * line : 128627
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'FujiFilm::FocusSettings.FujiFilm:AFAreaPointSize',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
