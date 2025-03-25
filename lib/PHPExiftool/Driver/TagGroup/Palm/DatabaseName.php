<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Palm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DatabaseName extends AbstractTagGroup
{

  protected string $id = 'Palm:DatabaseName';

  protected string $name = 'DatabaseName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Palm::Main
       * line : 273822
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'Palm::Main.Palm:DatabaseName',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 32;

}
