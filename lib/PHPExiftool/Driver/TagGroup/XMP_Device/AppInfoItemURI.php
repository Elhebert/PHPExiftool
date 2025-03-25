<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_Device;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AppInfoItemURI extends AbstractTagGroup
{

  protected string $id = 'XMP-Device:AppInfoItemURI';

  protected string $name = 'AppInfoItemURI';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::Device
       * line : 396498
       * type : string
       * writable : true
       * count : 
       * flags : flattened
       */
      'id' => 'XMP::Device.XMP-Device:AppInfoItemURI',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
