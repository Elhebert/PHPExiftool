<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhaseOne;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawData extends AbstractTagGroup
{

  protected string $id = 'PhaseOne:RawData';

  protected string $name = 'RawData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PhaseOne::Main
       * line : 303319
       * type : undef
       * writable : true
       * count : 
       * flags : binary,permanent
       */
      'id' => 'PhaseOne::Main.PhaseOne:RawData',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2054;

}
