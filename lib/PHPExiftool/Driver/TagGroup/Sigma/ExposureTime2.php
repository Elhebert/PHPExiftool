<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureTime2 extends AbstractTagGroup
{

  protected string $id = 'Sigma:ExposureTime2';

  protected string $name = 'ExposureTime2';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sigma::Main
       * line : 338926
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sigma::Main.Sigma:ExposureTime2',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sigma::Main
       * line : 339061
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sigma::Main.Sigma:ExposureTime2',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sigma::Main
       * line : 339073
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sigma::Main.Sigma:ExposureTime2',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
