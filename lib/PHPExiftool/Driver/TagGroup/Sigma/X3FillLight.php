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
class X3FillLight extends AbstractTagGroup
{

  protected string $id = 'Sigma:X3FillLight';

  protected string $name = 'X3FillLight';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sigma::Main
       * line : 337359
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sigma::Main.Sigma:X3FillLight',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sigma::Main
       * line : 337365
       * type : rational64s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sigma::Main.Sigma:X3FillLight',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
