<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Duration extends AbstractTagGroup
{

  protected string $id = 'Flash:Duration';

  protected string $name = 'Duration';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Flash::Main
       * line : 123910
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Flash::Main.Flash:Duration',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Flash::Meta
       * line : 124063
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Flash::Meta.Flash:Duration',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
