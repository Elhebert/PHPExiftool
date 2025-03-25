<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailOffset extends AbstractTagGroup
{

  protected string $id = 'IFD0:ThumbnailOffset';

  protected string $name = 'ThumbnailOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 112296
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent,protected
       */
      'id' => 'Exif::Main.IFD0:ThumbnailOffset',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2060;

}
