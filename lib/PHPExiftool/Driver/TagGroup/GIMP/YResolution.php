<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIMP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class YResolution extends AbstractTagGroup
{

  protected string $id = 'GIMP:YResolution';

  protected string $name = 'YResolution';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : GIMP::Resolution
       * line : 131667
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GIMP::Resolution.GIMP:YResolution',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
