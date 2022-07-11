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
class RecordLocationData extends AbstractTagGroup
{

  protected string $id = 'Nikon:RecordLocationData';

  protected string $name = 'RecordLocationData';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Record Location Data',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 202279
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:RecordLocationData',
      'desc' => [
        'en' => 'Record Location Data',
      ],
    ],
  ];

}
