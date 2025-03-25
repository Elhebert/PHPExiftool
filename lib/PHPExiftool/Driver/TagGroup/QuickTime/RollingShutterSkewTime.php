<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RollingShutterSkewTime extends AbstractTagGroup
{

  protected string $id = 'QuickTime:RollingShutterSkewTime';

  protected string $name = 'RollingShutterSkewTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::camm1
       * line : 326322
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::camm1.QuickTime:RollingShutterSkewTime',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
