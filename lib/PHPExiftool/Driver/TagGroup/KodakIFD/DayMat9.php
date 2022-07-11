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
class DayMat9 extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:DayMat9';

  protected string $name = 'DayMat9';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Day Mat 9',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 156807
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:DayMat9',
      'desc' => [
        'en' => 'Day Mat 9',
      ],
    ],
  ];

}
