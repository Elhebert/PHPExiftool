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
class LimitAF_AreaModeSelWideAF_L extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:LimitAF-AreaModeSelWideAF_L';

  protected string $name = 'LimitAF-AreaModeSelWideAF_L';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 247136
       * type : ?
       * writable : false
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'NikonSettings::Main.NikonSettings:LimitAF-AreaModeSelWideAF_L',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 36;

}
