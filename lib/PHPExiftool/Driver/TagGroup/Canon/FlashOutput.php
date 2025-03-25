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
class FlashOutput extends AbstractTagGroup
{

  protected string $id = 'Canon:FlashOutput';

  protected string $name = 'FlashOutput';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61261
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData3.Canon:FlashOutput',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ShotInfo
       * line : 70936
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ShotInfo.Canon:FlashOutput',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
