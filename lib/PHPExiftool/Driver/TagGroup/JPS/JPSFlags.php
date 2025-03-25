<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JPSFlags extends AbstractTagGroup
{

  protected string $id = 'JPS:JPSFlags';

  protected string $name = 'JPSFlags';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::JPS
       * line : 152499
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::JPS.JPS:JPSFlags',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
