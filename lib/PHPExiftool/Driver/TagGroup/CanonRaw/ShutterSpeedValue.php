<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ShutterSpeedValue extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:ShutterSpeedValue';

  protected string $name = 'ShutterSpeedValue';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::ExposureInfo
       * line : 78475
       * type : float
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonRaw::ExposureInfo.CanonRaw:ShutterSpeedValue',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
