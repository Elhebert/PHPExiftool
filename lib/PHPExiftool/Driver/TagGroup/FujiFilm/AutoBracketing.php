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
class AutoBracketing extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:AutoBracketing';

  protected string $name = 'AutoBracketing';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Auto Bracketing',
    'fr' => 'Bracketing auto',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::Main
       * line : 130616
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'FujiFilm::Main.FujiFilm:AutoBracketing',
      'desc' => [
        'en' => 'Auto Bracketing',
        'fr' => 'Bracketing auto',
      ],
    ],
    1 => [
      /**
       * table_name : FujiFilm::Main
       * line : 130647
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'FujiFilm::Main.FujiFilm:AutoBracketing',
      'desc' => [
        'en' => 'Auto Bracketing',
        'fr' => 'Bracketing auto',
      ],
    ],
  ];

}
