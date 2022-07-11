<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFPointSelected extends AbstractTagGroup
{

  protected string $id = 'Pentax:AFPointSelected';

  protected string $name = 'AFPointSelected';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Point Selected',
    'fr' => 'Point AF sélectionné',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 296415
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:AFPointSelected',
      'desc' => [
        'en' => 'AF Point Selected',
        'fr' => 'Point AF sélectionné',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::Main
       * line : 296693
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:AFPointSelected',
      'desc' => [
        'en' => 'AF Point Selected',
        'fr' => 'Point AF sélectionné',
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::Main
       * line : 296983
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:AFPointSelected',
      'desc' => [
        'en' => 'AF Point Selected',
        'fr' => 'Point AF sélectionné',
      ],
    ],
  ];

}
