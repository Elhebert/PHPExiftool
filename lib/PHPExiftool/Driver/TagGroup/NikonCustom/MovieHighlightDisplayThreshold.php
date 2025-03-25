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
class MovieHighlightDisplayThreshold extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:MovieHighlightDisplayThreshold';

  protected string $name = 'MovieHighlightDisplayThreshold';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 242446
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:MovieHighlightDisplayThreshold',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2084;

}
