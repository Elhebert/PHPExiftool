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
class DeviantWhiteTungsten extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:DeviantWhiteTungsten';

  protected string $name = 'DeviantWhiteTungsten';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155174
       * type : rational64s
       * writable : true
       * count : 3
       * flags : permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:DeviantWhiteTungsten',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 3;

  protected int $flags = 2052;

}
