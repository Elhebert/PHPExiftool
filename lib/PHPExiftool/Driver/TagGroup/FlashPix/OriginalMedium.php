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
class OriginalMedium extends AbstractTagGroup
{

  protected string $id = 'FlashPix:OriginalMedium';

  protected string $name = 'OriginalMedium';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::ImageInfo
       * line : 126516
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::ImageInfo.FlashPix:OriginalMedium',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
