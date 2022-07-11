<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhaseOne;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageHeight extends AbstractTagGroup
{

  protected string $id = 'PhaseOne:ImageHeight';

  protected string $name = 'ImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Height',
    'fr' => 'Hauteur d\'image',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhaseOne::Main
       * line : 303620
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'PhaseOne::Main.PhaseOne:ImageHeight',
      'desc' => [
        'en' => 'Image Height',
        'fr' => 'Hauteur d\'image',
      ],
    ],
  ];

}
