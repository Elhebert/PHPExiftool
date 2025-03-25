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
class YResolution extends AbstractTagGroup
{

  protected string $id = 'File:YResolution';

  protected string $name = 'YResolution';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121605
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Extra.File:YResolution',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : PCX::Main
       * line : 263956
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PCX::Main.File:YResolution',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
