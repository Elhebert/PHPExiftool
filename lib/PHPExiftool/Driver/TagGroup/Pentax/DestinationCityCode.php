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
class DestinationCityCode extends AbstractTagGroup
{

  protected string $id = 'Pentax:DestinationCityCode';

  protected string $name = 'DestinationCityCode';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Destination City Code',
    'fr' => 'Code ville de destination',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Type2
       * line : 303361
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::Type2.Pentax:DestinationCityCode',
      'desc' => [
        'en' => 'Destination City Code',
        'fr' => 'Code ville de destination',
      ],
    ],
  ];

}
