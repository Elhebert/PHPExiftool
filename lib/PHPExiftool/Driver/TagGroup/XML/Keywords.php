<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Keywords extends AbstractTagGroup
{

  protected string $id = 'XML:Keywords';

  protected string $name = 'Keywords';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : OOXML::Main
       * line : 249354
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'OOXML::Main.XML:Keywords',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : iWork::Main
       * line : 415116
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'iWork::Main.XML:Keywords',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
