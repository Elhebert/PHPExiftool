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
class PreviewImageHeight extends AbstractTagGroup
{

  protected string $id = 'FlashPix:PreviewImageHeight';

  protected string $name = 'PreviewImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::PreviewInfo
       * line : 126604
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::PreviewInfo.FlashPix:PreviewImageHeight',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
