<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorRepresentation extends AbstractTagGroup
{

  protected string $id = 'QuickTime:ColorRepresentation';

  protected string $name = 'ColorRepresentation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Color Representation',
    'fr' => 'Représentation de couleur',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::ImageDesc
       * line : 314335
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::ImageDesc.QuickTime:ColorRepresentation',
      'desc' => [
        'en' => 'Color Representation',
        'fr' => 'Représentation de couleur',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::ItemPropCont
       * line : 323541
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::ItemPropCont.QuickTime:ColorRepresentation',
      'desc' => [
        'en' => 'Color Representation',
        'fr' => 'Représentation de couleur',
      ],
    ],
  ];

}
