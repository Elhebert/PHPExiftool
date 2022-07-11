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
class MultiExposureAutoGain extends AbstractTagGroup
{

  protected string $id = 'Nikon:MultiExposureAutoGain';

  protected string $name = 'MultiExposureAutoGain';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Multi Exposure Auto Gain',
    'fr' => 'Auto-expo des surimpressions',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MultiExposure
       * line : 202370
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::MultiExposure.Nikon:MultiExposureAutoGain',
      'desc' => [
        'en' => 'Multi Exposure Auto Gain',
        'fr' => 'Auto-expo des surimpressions',
      ],
    ],
  ];

}
