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
class ImageHeight extends AbstractTagGroup
{

  protected string $id = 'GIMP:ImageHeight';

  protected string $name = 'ImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : GIMP::Header
       * line : 131484
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GIMP::Header.GIMP:ImageHeight',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
