<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JPEG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImage extends AbstractTagGroup
{

  protected string $id = 'JPEG:PreviewImage';

  protected string $name = 'PreviewImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::Main
       * line : 152565
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::Main.JPEG:PreviewImage',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : JPEG::Main
       * line : 152581
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::Main.JPEG:PreviewImage',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : JPEG::Main
       * line : 152594
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::Main.JPEG:PreviewImage',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : JPEG::Main
       * line : 152610
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::Main.JPEG:PreviewImage',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : JPEG::Main
       * line : 152680
       * type : undef
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'JPEG::Main.JPEG:PreviewImage',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
