<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FaceDetection extends AbstractTagGroup
{

  protected string $id = 'Sony:FaceDetection';

  protected string $name = 'FaceDetection';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350871
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:FaceDetection',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 360748
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::MoreSettings.Sony:FaceDetection',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag900b
       * line : 379052
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag900b.Sony:FaceDetection',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
