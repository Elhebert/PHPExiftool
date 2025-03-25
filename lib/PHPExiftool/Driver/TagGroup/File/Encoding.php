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
class Encoding extends AbstractTagGroup
{

  protected string $id = 'File:Encoding';

  protected string $name = 'Encoding';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIF::Main
       * line : 122113
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIF::Main.File:Encoding',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : PCX::Main
       * line : 263881
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PCX::Main.File:Encoding',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
