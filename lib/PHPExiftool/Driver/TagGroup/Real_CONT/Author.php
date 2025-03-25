<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_CONT;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Author extends AbstractTagGroup
{

  protected string $id = 'Real-CONT:Author';

  protected string $name = 'Author';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::ContentDescr
       * line : 330137
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::ContentDescr.Real-CONT:Author',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
