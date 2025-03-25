<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSSpeed extends AbstractTagGroup
{

  protected string $id = 'RIFF:GPSSpeed';

  protected string $name = 'GPSSpeed';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::UserText
       * line : 328872
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::UserText.RIFF:GPSSpeed',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
