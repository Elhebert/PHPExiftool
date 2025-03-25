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
class ImageHeight extends AbstractTagGroup
{

  protected string $id = 'Jpeg2000:ImageHeight';

  protected string $name = 'ImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Jpeg2000::ImageHeader
       * line : 153981
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Jpeg2000::ImageHeader.Jpeg2000:ImageHeight',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
