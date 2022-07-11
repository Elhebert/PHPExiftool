<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VerticalFuncButtonPlaybackMode extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:VerticalFuncButtonPlaybackMode';

  protected string $name = 'VerticalFuncButtonPlaybackMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Vertical Func Button Playback Mode',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 241393
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:VerticalFuncButtonPlaybackMode',
      'desc' => [
        'en' => 'Vertical Func Button Playback Mode',
      ],
    ],
  ];

}
