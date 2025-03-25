<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AEMaxAperture extends AbstractTagGroup
{

  protected string $id = 'Pentax:AEMaxAperture';

  protected string $name = 'AEMaxAperture';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::AEInfo
       * line : 282916
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::AEInfo.Pentax:AEMaxAperture',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::AEInfo2
       * line : 283237
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::AEInfo2.Pentax:AEMaxAperture',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::AEInfo3
       * line : 283293
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::AEInfo3.Pentax:AEMaxAperture',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
