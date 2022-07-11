<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareVersion extends AbstractTagGroup
{

  protected string $id = 'HP:FirmwareVersion';

  protected string $name = 'FirmwareVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Firmware Version',
    'fr' => 'Version de firmware',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : HP::TDHD
       * line : 142455
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'HP::TDHD.HP:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
  ];

}
