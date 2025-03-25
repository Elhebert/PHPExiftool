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
class FocusDistance extends AbstractTagGroup
{

  protected string $id = 'Minolta:FocusDistance';

  protected string $name = 'FocusDistance';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings
       * line : 177546
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettings.Minolta:FocusDistance',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 185694
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:FocusDistance',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
