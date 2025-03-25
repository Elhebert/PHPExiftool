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
class AutoDistortionControl extends AbstractTagGroup
{

  protected string $id = 'Nikon:AutoDistortionControl';

  protected string $name = 'AutoDistortionControl';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::DistortInfo
       * line : 192201
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::DistortInfo.Nikon:AutoDistortionControl',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::MenuSettingsZ7II
       * line : 199789
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::MenuSettingsZ7II.Nikon:AutoDistortionControl',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
