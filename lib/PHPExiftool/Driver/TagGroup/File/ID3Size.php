<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ID3Size extends AbstractTagGroup
{

  protected string $id = 'File:ID3Size';

  protected string $name = 'ID3Size';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121399
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Extra.File:ID3Size',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
