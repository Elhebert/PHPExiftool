<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RecognizedFaceFlags extends AbstractTagGroup
{

  protected string $id = 'Panasonic:RecognizedFaceFlags';

  protected string $name = 'RecognizedFaceFlags';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Main
       * line : 277338
       * type : undef
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Panasonic::Main.Panasonic:RecognizedFaceFlags',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2084;

}
