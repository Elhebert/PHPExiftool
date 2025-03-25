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
class MonitorBrightness extends AbstractTagGroup
{

  protected string $id = 'Nikon:MonitorBrightness';

  protected string $name = 'MonitorBrightness';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 201852
       * type : int8u
       * writable : false
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:MonitorBrightness',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 36;

}
