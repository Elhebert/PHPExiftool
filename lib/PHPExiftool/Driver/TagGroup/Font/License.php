<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Font;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class License extends AbstractTagGroup
{

  protected string $id = 'Font:License';

  protected string $name = 'License';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Font::Name
       * line : 127915
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::Name.Font:License',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
