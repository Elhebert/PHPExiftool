<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PixelsPerMeterX extends AbstractTagGroup
{

  protected string $id = 'File:PixelsPerMeterX';

  protected string $name = 'PixelsPerMeterX';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : BMP::Main
       * line : 3320
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BMP::Main.File:PixelsPerMeterX',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
