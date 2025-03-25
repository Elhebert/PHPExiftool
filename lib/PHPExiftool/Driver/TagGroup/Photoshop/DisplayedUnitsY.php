<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DisplayedUnitsY extends AbstractTagGroup
{

  protected string $id = 'Photoshop:DisplayedUnitsY';

  protected string $name = 'DisplayedUnitsY';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Resolution
       * line : 305809
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Photoshop::Resolution.Photoshop:DisplayedUnitsY',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
