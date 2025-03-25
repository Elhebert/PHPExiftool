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
class BitDepth extends AbstractTagGroup
{

  protected string $id = 'MNG:BitDepth';

  protected string $name = 'BitDepth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::BasisObject
       * line : 164562
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::BasisObject.MNG:BitDepth',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : MNG::JNGHeader
       * line : 164927
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::JNGHeader.MNG:BitDepth',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
