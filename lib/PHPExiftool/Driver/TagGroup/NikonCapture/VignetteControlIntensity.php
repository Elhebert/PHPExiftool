<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCapture;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VignetteControlIntensity extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:VignetteControlIntensity';

  protected string $name = 'VignetteControlIntensity';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::Main
       * line : 210836
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCapture::Main.NikonCapture:VignetteControlIntensity',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
