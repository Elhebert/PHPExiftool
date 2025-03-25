<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VerticalActionSafePercentage extends AbstractTagGroup
{

  protected string $id = 'MXF:VerticalActionSafePercentage';

  protected string $name = 'VerticalActionSafePercentage';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170249
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:VerticalActionSafePercentage',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
