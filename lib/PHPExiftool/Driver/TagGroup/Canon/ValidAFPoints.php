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
class ValidAFPoints extends AbstractTagGroup
{

  protected string $id = 'Canon:ValidAFPoints';

  protected string $name = 'ValidAFPoints';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::AFInfo
       * line : 4034
       * type : int16u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::AFInfo.Canon:ValidAFPoints',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::AFInfo2
       * line : 4196
       * type : int16u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::AFInfo2.Canon:ValidAFPoints',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
