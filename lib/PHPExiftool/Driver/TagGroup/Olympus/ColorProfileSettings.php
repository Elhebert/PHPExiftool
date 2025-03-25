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
class ColorProfileSettings extends AbstractTagGroup
{

  protected string $id = 'Olympus:ColorProfileSettings';

  protected string $name = 'ColorProfileSettings';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::CameraSettings
       * line : 252789
       * type : int16s
       * writable : true
       * count : 14
       * flags : permanent
       */
      'id' => 'Olympus::CameraSettings.Olympus:ColorProfileSettings',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 14;

  protected int $flags = 2052;

}
