<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CoarseMapImageType extends AbstractTagGroup
{

  protected string $id = 'FLIR:CoarseMapImageType';

  protected string $name = 'CoarseMapImageType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::CoarseData
       * line : 122395
       * type : undef
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::CoarseData.FLIR:CoarseMapImageType',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
