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
class KhufuI5Thresholds extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:KhufuI5Thresholds';

  protected string $name = 'KhufuI5Thresholds';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 156888
       * type : ?
       * writable : false
       * count : 
       * flags : binary,permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:KhufuI5Thresholds',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 6;

}
