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
class PentaxImageSize extends AbstractTagGroup
{

  protected string $id = 'Pentax:PentaxImageSize';

  protected string $name = 'PentaxImageSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Pentax Image Size',
    'fr' => 'Taille d\'image Pentax',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 295652
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:PentaxImageSize',
      'desc' => [
        'en' => 'Pentax Image Size',
        'fr' => 'Taille d\'image Pentax',
      ],
    ],
  ];

}
