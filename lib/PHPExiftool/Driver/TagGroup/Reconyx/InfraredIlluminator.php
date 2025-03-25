<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InfraredIlluminator extends AbstractTagGroup
{

  protected string $id = 'Reconyx:InfraredIlluminator';

  protected string $name = 'InfraredIlluminator';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Reconyx::Main
       * line : 330786
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Reconyx::Main.Reconyx:InfraredIlluminator',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
