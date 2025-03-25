<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FaceDetected extends AbstractTagGroup
{

  protected string $id = 'GoPro:FaceDetected';

  protected string $name = 'FaceDetected';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : GoPro::GPMF
       * line : 139482
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GoPro::GPMF.GoPro:FaceDetected',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
