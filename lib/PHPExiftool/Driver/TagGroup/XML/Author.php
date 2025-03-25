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
class Author extends AbstractTagGroup
{

  protected string $id = 'XML:Author';

  protected string $name = 'Author';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : iWork::Main
       * line : 415062
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'iWork::Main.XML:Author',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
