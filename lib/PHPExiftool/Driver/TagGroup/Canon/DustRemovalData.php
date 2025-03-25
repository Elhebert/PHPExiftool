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
class DustRemovalData extends AbstractTagGroup
{

  protected string $id = 'Canon:DustRemovalData';

  protected string $name = 'DustRemovalData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::Main
       * line : 65893
       * type : undef
       * writable : true
       * count : 
       * flags : binary,permanent,unsafe
       */
      'id' => 'Canon::Main.Canon:DustRemovalData',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2070;

}
