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
class LensSpec extends AbstractTagGroup
{

  protected string $id = 'Sony:LensSpec';

  protected string $name = 'LensSpec';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraInfo
       * line : 344977
       * type : undef
       * writable : true
       * count : 8
       * flags : permanent
       */
      'id' => 'Sony::CameraInfo.Sony:LensSpec',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraInfo2
       * line : 345570
       * type : undef
       * writable : true
       * count : 8
       * flags : permanent
       */
      'id' => 'Sony::CameraInfo2.Sony:LensSpec',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 345940
       * type : undef
       * writable : true
       * count : 8
       * flags : permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:LensSpec',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Main
       * line : 358669
       * type : int8u
       * writable : true
       * count : 8
       * flags : permanent
       */
      'id' => 'Sony::Main.Sony:LensSpec',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 8;

  protected int $flags = 2052;

}
