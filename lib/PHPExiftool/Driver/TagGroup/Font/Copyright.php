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
class Copyright extends AbstractTagGroup
{

  protected string $id = 'Font:Copyright';

  protected string $name = 'Copyright';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Font::Name
       * line : 127836
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::Name.Font:Copyright',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Font::PFM
       * line : 127967
       * type : string
       * writable : false
       * count : 60
       * flags : 
       */
      'id' => 'Font::PFM.Font:Copyright',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Font::PSInfo
       * line : 128112
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::PSInfo.Font:Copyright',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 60;

}
