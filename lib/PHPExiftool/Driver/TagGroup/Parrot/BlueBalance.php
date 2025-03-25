<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BlueBalance extends AbstractTagGroup
{

  protected string $id = 'Parrot:BlueBalance';

  protected string $name = 'BlueBalance';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::V3
       * line : 282569
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V3.Parrot:BlueBalance',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
