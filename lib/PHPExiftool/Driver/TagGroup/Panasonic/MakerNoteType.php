<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MakerNoteType extends AbstractTagGroup
{

  protected string $id = 'Panasonic:MakerNoteType';

  protected string $name = 'MakerNoteType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Type2
       * line : 279665
       * type : string
       * writable : false
       * count : 4
       * flags : permanent
       */
      'id' => 'Panasonic::Type2.Panasonic:MakerNoteType',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 4;

}
