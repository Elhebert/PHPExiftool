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
class BytesPerLine extends AbstractTagGroup
{

  protected string $id = 'File:BytesPerLine';

  protected string $name = 'BytesPerLine';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PCX::Main
       * line : 263979
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PCX::Main.File:BytesPerLine',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
