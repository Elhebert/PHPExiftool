<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageWidth extends AbstractTagGroup
{

  protected string $id = 'PNG:ImageWidth';

  protected string $name = 'ImageWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::ImageHeader
       * line : 272392
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PNG::ImageHeader.PNG:ImageWidth',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
