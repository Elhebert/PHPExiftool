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
class ImageStabilizationSetting extends AbstractTagGroup
{

  protected string $id = 'Sony:ImageStabilizationSetting';

  protected string $name = 'ImageStabilizationSetting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Stabilization Setting',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 348245
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:ImageStabilizationSetting',
      'desc' => [
        'en' => 'Image Stabilization Setting',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349637
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:ImageStabilizationSetting',
      'desc' => [
        'en' => 'Image Stabilization Setting',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::FocusInfo
       * line : 353347
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::FocusInfo.Sony:ImageStabilizationSetting',
      'desc' => [
        'en' => 'Image Stabilization Setting',
      ],
    ],
  ];

}
