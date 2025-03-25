<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_plus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageFileFormatAsDelivered extends AbstractTagGroup
{

  protected string $id = 'XMP-plus:ImageFileFormatAsDelivered';

  protected string $name = 'ImageFileFormatAsDelivered';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PLUS::XMP
       * line : 265477
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PLUS::XMP.XMP-plus:ImageFileFormatAsDelivered',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
