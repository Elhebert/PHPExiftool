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
class UniqueMatrixFlash extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:UniqueMatrixFlash';

  protected string $name = 'UniqueMatrixFlash';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unique Matrix Flash',
  ];

  protected int $count = 9;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155490
       * type : rational64s
       * writable : true
       * count : 9
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:UniqueMatrixFlash',
      'desc' => [
        'en' => 'Unique Matrix Flash',
      ],
    ],
  ];

}
