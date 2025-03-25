<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ManometerReading extends AbstractTagGroup
{

  protected string $id = 'Olympus:ManometerReading';

  protected string $name = 'ManometerReading';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::CameraSettings
       * line : 252973
       * type : int32s
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Olympus::CameraSettings.Olympus:ManometerReading',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

  protected int $flags = 2052;

}
