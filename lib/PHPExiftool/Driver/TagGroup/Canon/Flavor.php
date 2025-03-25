<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Flavor extends AbstractTagGroup
{

  protected string $id = 'Canon:Flavor';

  protected string $name = 'Flavor';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::Main
       * line : 65986
       * type : ?
       * writable : false
       * count : 
       * flags : binary,permanent,unknown
       */
      'id' => 'Canon::Main.Canon:Flavor',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 38;

}
