<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocalLengthTeleZoom extends AbstractTagGroup
{

  protected string $id = 'Sony:FocalLengthTeleZoom';

  protected string $name = 'FocalLengthTeleZoom';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 345965
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:FocalLengthTeleZoom',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
