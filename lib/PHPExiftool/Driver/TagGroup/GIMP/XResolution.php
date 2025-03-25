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
class XResolution extends AbstractTagGroup
{

  protected string $id = 'GIMP:XResolution';

  protected string $name = 'XResolution';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : GIMP::Resolution
       * line : 131651
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GIMP::Resolution.GIMP:XResolution',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
