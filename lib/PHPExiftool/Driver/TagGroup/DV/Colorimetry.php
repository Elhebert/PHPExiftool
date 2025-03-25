<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DV;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Colorimetry extends AbstractTagGroup
{

  protected string $id = 'DV:Colorimetry';

  protected string $name = 'Colorimetry';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : DV::Main
       * line : 105960
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DV::Main.DV:Colorimetry',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
