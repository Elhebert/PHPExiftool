<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContentCompressionSettings extends AbstractTagGroup
{

  protected string $id = 'Matroska:ContentCompressionSettings';

  protected string $name = 'ContentCompressionSettings';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Content Compression Settings',
  ];

  protected int $count = 0;

  protected int $flags = 34;

  protected array $tags = [
    0 => [
      /**
       * table_name : Matroska::Main
       * line : 173777
       * type : ?
       * writable : false
       * count : 
       * flags : Binary,Unknown
       */
      'id' => 'Matroska::Main.Matroska:ContentCompressionSettings',
      'desc' => [
        'en' => 'Content Compression Settings',
      ],
    ],
  ];

}
