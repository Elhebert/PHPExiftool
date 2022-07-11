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
class SensorWidth extends AbstractTagGroup
{

  protected string $id = 'PhaseOne:SensorWidth';

  protected string $name = 'SensorWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sensor Width',
    'fr' => 'Largeur du capteur',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhaseOne::Main
       * line : 303576
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'PhaseOne::Main.PhaseOne:SensorWidth',
      'desc' => [
        'en' => 'Sensor Width',
        'fr' => 'Largeur du capteur',
      ],
    ],
  ];

}
