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
class RIMMToCRGB1Spline extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:RIMMToCRGB1Spline';

  protected string $name = 'RIMMToCRGB1Spline';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'RIMM To CRGB1 Spline',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 157405
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:RIMMToCRGB1Spline',
      'desc' => [
        'en' => 'RIMM To CRGB1 Spline',
      ],
    ],
  ];

}
