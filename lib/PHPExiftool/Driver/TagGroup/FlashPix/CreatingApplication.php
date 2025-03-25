<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreatingApplication extends AbstractTagGroup
{

  protected string $id = 'FlashPix:CreatingApplication';

  protected string $name = 'CreatingApplication';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::DataObject
       * line : 124379
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::DataObject.FlashPix:CreatingApplication',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : FlashPix::Extensions
       * line : 124583
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::Extensions.FlashPix:CreatingApplication',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : FlashPix::Transform
       * line : 127355
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::Transform.FlashPix:CreatingApplication',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
