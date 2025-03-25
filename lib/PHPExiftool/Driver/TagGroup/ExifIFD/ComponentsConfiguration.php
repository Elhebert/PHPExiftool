<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ComponentsConfiguration extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:ComponentsConfiguration';

  protected string $name = 'ComponentsConfiguration';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 114070
       * type : undef
       * writable : true
       * count : 4
       * flags : mandatory,unsafe
       */
      'id' => 'Exif::Main.ExifIFD:ComponentsConfiguration',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2192;

}
