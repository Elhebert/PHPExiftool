<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorMode extends AbstractTagGroup
{

  protected string $id = 'Kodak:ColorMode';

  protected string $name = 'ColorMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Mode',
    'fr' => 'Mode colorimétrique',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Main
       * line : 158559
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Main.Kodak:ColorMode',
      'desc' => [
        'en' => 'Color Mode',
        'fr' => 'Mode colorimétrique',
      ],
    ],
  ];

}
