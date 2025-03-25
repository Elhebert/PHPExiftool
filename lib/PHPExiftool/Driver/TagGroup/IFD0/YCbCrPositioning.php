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
class YCbCrPositioning extends AbstractTagGroup
{

  protected string $id = 'IFD0:YCbCrPositioning';

  protected string $name = 'YCbCrPositioning';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 112552
       * type : int16u
       * writable : true
       * count : 
       * flags : mandatory,unsafe
       */
      'id' => 'Exif::Main.IFD0:YCbCrPositioning',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2192;

}
