<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SigmaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Rotation extends AbstractTagGroup
{

  protected string $id = 'SigmaRaw:Rotation';

  protected string $name = 'Rotation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : SigmaRaw::Header
       * line : 339373
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'SigmaRaw::Header.SigmaRaw:Rotation',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : SigmaRaw::Header4
       * line : 339470
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'SigmaRaw::Header4.SigmaRaw:Rotation',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
