<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PanoramicStitchCameraMotion extends AbstractTagGroup
{

  protected string $id = 'Microsoft:PanoramicStitchCameraMotion';

  protected string $name = 'PanoramicStitchCameraMotion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::Stitch
       * line : 174254
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Microsoft::Stitch.Microsoft:PanoramicStitchCameraMotion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
