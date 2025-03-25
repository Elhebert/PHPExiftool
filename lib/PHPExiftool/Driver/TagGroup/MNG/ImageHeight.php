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
class ImageHeight extends AbstractTagGroup
{

  protected string $id = 'MNG:ImageHeight';

  protected string $name = 'ImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::BasisObject
       * line : 164544
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::BasisObject.MNG:ImageHeight',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : MNG::JNGHeader
       * line : 164884
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::JNGHeader.MNG:ImageHeight',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : MNG::MNGHeader
       * line : 165074
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::MNGHeader.MNG:ImageHeight',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
