<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureGainTungsten extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:ExposureGainTungsten';

  protected string $name = 'ExposureGainTungsten';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Gain Tungsten',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155609
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:ExposureGainTungsten',
      'desc' => [
        'en' => 'Exposure Gain Tungsten',
      ],
    ],
  ];

}
