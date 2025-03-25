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
class SceneDetectData extends AbstractTagGroup
{

  protected string $id = 'Olympus:SceneDetectData';

  protected string $name = 'SceneDetectData';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::FocusInfo
       * line : 254741
       * type : int32u
       * writable : true
       * count : 720
       * flags : binary,permanent,unknown
       */
      'id' => 'Olympus::FocusInfo.Olympus:SceneDetectData',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::Main
       * line : 259064
       * type : int32u
       * writable : true
       * count : 720
       * flags : binary,permanent,unknown
       */
      'id' => 'Olympus::Main.Olympus:SceneDetectData',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 720;

  protected int $flags = 2086;

}
