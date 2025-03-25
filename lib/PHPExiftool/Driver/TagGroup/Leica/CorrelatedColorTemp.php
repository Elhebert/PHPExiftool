<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CorrelatedColorTemp extends AbstractTagGroup
{

  protected string $id = 'Leica:CorrelatedColorTemp';

  protected string $name = 'CorrelatedColorTemp';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica9
       * line : 275030
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::Leica9.Leica:CorrelatedColorTemp',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
