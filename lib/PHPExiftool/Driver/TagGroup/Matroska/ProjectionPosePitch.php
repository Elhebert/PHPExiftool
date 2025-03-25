<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProjectionPosePitch extends AbstractTagGroup
{

  protected string $id = 'Matroska:ProjectionPosePitch';

  protected string $name = 'ProjectionPosePitch';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Matroska::Projection
       * line : 174053
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Matroska::Projection.Matroska:ProjectionPosePitch',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
