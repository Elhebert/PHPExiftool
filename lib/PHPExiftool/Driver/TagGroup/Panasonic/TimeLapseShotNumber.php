<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimeLapseShotNumber extends AbstractTagGroup
{

  protected string $id = 'Panasonic:TimeLapseShotNumber';

  protected string $name = 'TimeLapseShotNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::TimeInfo
       * line : 279658
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::TimeInfo.Panasonic:TimeLapseShotNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
