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
class ColorComponents extends AbstractTagGroup
{

  protected string $id = 'File:ColorComponents';

  protected string $name = 'ColorComponents';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::SOF
       * line : 152887
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::SOF.File:ColorComponents',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : PGF::Main
       * line : 264531
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PGF::Main.File:ColorComponents',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
