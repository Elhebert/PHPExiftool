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
class ToningEffectPortrait extends AbstractTagGroup
{

  protected string $id = 'Canon:ToningEffectPortrait';

  protected string $name = 'ToningEffectPortrait';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::PSInfo
       * line : 67195
       * type : int32s
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Canon::PSInfo.Canon:ToningEffectPortrait',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::PSInfo2
       * line : 68293
       * type : int32s
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Canon::PSInfo2.Canon:ToningEffectPortrait',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2084;

}
