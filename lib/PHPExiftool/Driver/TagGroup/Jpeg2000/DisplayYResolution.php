<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Jpeg2000;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DisplayYResolution extends AbstractTagGroup
{

  protected string $id = 'Jpeg2000:DisplayYResolution';

  protected string $name = 'DisplayYResolution';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Jpeg2000::DisplayResolution
       * line : 153830
       * type : rational32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Jpeg2000::DisplayResolution.Jpeg2000:DisplayYResolution',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
