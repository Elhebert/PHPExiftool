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
class ProjectionBoundsBottom extends AbstractTagGroup
{

  protected string $id = 'QuickTime:ProjectionBoundsBottom';

  protected string $name = 'ProjectionBoundsBottom';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::equi
       * line : 326583
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::equi.QuickTime:ProjectionBoundsBottom',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
