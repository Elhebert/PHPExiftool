<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UnknownBlock extends AbstractTagGroup
{

  protected string $id = 'Leica:UnknownBlock';

  protected string $name = 'UnknownBlock';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica6
       * line : 274925
       * type : ?
       * writable : false
       * count : 
       * flags : binary,permanent,unknown
       */
      'id' => 'Panasonic::Leica6.Leica:UnknownBlock',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 38;

}
