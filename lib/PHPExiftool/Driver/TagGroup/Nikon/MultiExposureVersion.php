<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MultiExposureVersion extends AbstractTagGroup
{

  protected string $id = 'Nikon:MultiExposureVersion';

  protected string $name = 'MultiExposureVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MultiExposure
       * line : 201973
       * type : string
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::MultiExposure.Nikon:MultiExposureVersion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
