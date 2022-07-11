<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LongExposureNoiseReduction extends AbstractTagGroup
{

  protected string $id = 'Canon:LongExposureNoiseReduction';

  protected string $name = 'LongExposureNoiseReduction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Long Exposure Noise Reduction',
    'fr' => 'Réduct. bruit longue expo.',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::LightingOpt
       * line : 64288
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::LightingOpt.Canon:LongExposureNoiseReduction',
      'desc' => [
        'en' => 'Long Exposure Noise Reduction',
        'fr' => 'Réduct. bruit longue expo.',
      ],
    ],
  ];

}
