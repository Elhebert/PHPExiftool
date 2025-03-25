<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DepthMapHeight extends AbstractTagGroup
{

  protected string $id = 'Samsung:DepthMapHeight';

  protected string $name = 'DepthMapHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::DualShotExtra
       * line : 333869
       * type : int32u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Samsung::DualShotExtra.Samsung:DepthMapHeight',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
