<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SerialNumber extends AbstractTagGroup
{

  protected string $id = 'Canon:SerialNumber';

  protected string $name = 'SerialNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Serial Number',
    'fr' => 'Numéro de série',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::Main
       * line : 64597
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::Main.Canon:SerialNumber',
      'desc' => [
        'en' => 'Serial Number',
        'fr' => 'Numéro de série',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::Main
       * line : 64615
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::Main.Canon:SerialNumber',
      'desc' => [
        'en' => 'Serial Number',
        'fr' => 'Numéro de série',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::Main
       * line : 64633
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::Main.Canon:SerialNumber',
      'desc' => [
        'en' => 'Serial Number',
        'fr' => 'Numéro de série',
      ],
    ],
  ];

}
