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
class DateTimeOriginal extends AbstractTagGroup
{

  protected string $id = 'PhaseOne:DateTimeOriginal';

  protected string $name = 'DateTimeOriginal';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Date/Time Original',
    'fr' => 'Date de la création des données originales',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhaseOne::Main
       * line : 303667
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'PhaseOne::Main.PhaseOne:DateTimeOriginal',
      'desc' => [
        'en' => 'Date/Time Original',
        'fr' => 'Date de la création des données originales',
      ],
    ],
  ];

}
