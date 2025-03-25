<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorCompensationFilter extends AbstractTagGroup
{

  protected string $id = 'Minolta:ColorCompensationFilter';

  protected string $name = 'ColorCompensationFilter';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 181477
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:ColorCompensationFilter',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 182461
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:ColorCompensationFilter',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::Main
       * line : 184769
       * type : int32s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::Main.Minolta:ColorCompensationFilter',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
