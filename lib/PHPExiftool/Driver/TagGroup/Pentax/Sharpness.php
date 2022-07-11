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
class Sharpness extends AbstractTagGroup
{

  protected string $id = 'Pentax:Sharpness';

  protected string $name = 'Sharpness';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sharpness',
    'fr' => 'Accentuation',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 298408
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:Sharpness',
      'desc' => [
        'en' => 'Sharpness',
        'fr' => 'Accentuation',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::Type2
       * line : 303050
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Type2.Pentax:Sharpness',
      'desc' => [
        'en' => 'Sharpness',
        'fr' => 'Accentuation',
      ],
    ],
  ];

}
