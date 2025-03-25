<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SetClockFromLocationData extends AbstractTagGroup
{

  protected string $id = 'Nikon:SetClockFromLocationData';

  protected string $name = 'SetClockFromLocationData';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 201892
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:SetClockFromLocationData',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2084;

}
