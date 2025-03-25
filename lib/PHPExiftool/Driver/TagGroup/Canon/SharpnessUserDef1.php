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
class SharpnessUserDef1 extends AbstractTagGroup
{

  protected string $id = 'Canon:SharpnessUserDef1';

  protected string $name = 'SharpnessUserDef1';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 34516
       * type : int8s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:SharpnessUserDef1',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::PSInfo
       * line : 67602
       * type : int32s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::PSInfo.Canon:SharpnessUserDef1',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Canon::PSInfo2
       * line : 68780
       * type : int32s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::PSInfo2.Canon:SharpnessUserDef1',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
