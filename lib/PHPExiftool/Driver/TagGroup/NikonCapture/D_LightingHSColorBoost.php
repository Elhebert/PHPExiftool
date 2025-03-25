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
class D_LightingHSColorBoost extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:D-LightingHSColorBoost';

  protected string $name = 'D-LightingHSColorBoost';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::DLightingHS
       * line : 210288
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCapture::DLightingHS.NikonCapture:D-LightingHSColorBoost',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
