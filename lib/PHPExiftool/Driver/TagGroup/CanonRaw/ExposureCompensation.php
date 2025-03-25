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
class ExposureCompensation extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:ExposureCompensation';

  protected string $name = 'ExposureCompensation';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::ExposureInfo
       * line : 78457
       * type : float
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonRaw::ExposureInfo.CanonRaw:ExposureCompensation',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
