<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PSP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageWidth extends AbstractTagGroup
{

  protected string $id = 'PSP:ImageWidth';

  protected string $name = 'ImageWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PSP::Image
       * line : 273195
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PSP::Image.PSP:ImageWidth',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
