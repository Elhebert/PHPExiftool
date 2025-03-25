<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GIFVersion extends AbstractTagGroup
{

  protected string $id = 'GIF:GIFVersion';

  protected string $name = 'GIFVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : GIF::Main
       * line : 131340
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GIF::Main.GIF:GIFVersion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
