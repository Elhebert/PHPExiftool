<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExifCameraInfo extends AbstractTagGroup
{

  protected string $id = 'IPTC:ExifCameraInfo';

  protected string $name = 'ExifCameraInfo';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150970
       * type : string
       * writable : true
       * count : 4096
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:ExifCameraInfo',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4096;

  protected int $flags = 2048;

}
