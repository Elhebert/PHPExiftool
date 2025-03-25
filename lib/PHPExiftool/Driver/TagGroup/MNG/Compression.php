<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Compression extends AbstractTagGroup
{

  protected string $id = 'MNG:Compression';

  protected string $name = 'Compression';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::BasisObject
       * line : 164600
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::BasisObject.MNG:Compression',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : MNG::JNGHeader
       * line : 164934
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::JNGHeader.MNG:Compression',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
