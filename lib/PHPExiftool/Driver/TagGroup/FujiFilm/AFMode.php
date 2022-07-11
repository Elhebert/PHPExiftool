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
class AFMode extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:AFMode';

  protected string $name = 'AFMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Mode',
    'fr' => 'Mode AF',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::Main
       * line : 130147
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'FujiFilm::Main.FujiFilm:AFMode',
      'desc' => [
        'en' => 'AF Mode',
        'fr' => 'Mode AF',
      ],
    ],
  ];

}
