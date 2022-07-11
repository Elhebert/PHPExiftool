<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SlowShutter extends AbstractTagGroup
{

  protected string $id = 'Canon:SlowShutter';

  protected string $name = 'SlowShutter';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Slow Shutter',
    'fr' => 'Vitesse d\'obturation lente',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ShotInfo
       * line : 70475
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ShotInfo.Canon:SlowShutter',
      'desc' => [
        'en' => 'Slow Shutter',
        'fr' => 'Vitesse d\'obturation lente',
      ],
    ],
  ];

}
