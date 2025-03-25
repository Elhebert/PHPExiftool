<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MakerNotes extends AbstractTagGroup
{

  protected string $id = 'RIFF:MakerNotes';

  protected string $name = 'MakerNotes';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Exif
       * line : 327888
       * type : ?
       * writable : false
       * count : 
       * flags : binary
       */
      'id' => 'RIFF::Exif.RIFF:MakerNotes',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2;

}
