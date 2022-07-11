<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HDMIOutputResolution extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:HDMIOutputResolution';

  protected string $name = 'HDMIOutputResolution';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'HDMI Output Resolution',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 245214
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:HDMIOutputResolution',
      'desc' => [
        'en' => 'HDMI Output Resolution',
      ],
    ],
  ];

}
