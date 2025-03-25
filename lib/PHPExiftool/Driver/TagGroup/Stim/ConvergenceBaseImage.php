<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Stim;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ConvergenceBaseImage extends AbstractTagGroup
{

  protected string $id = 'Stim:ConvergenceBaseImage';

  protected string $name = 'ConvergenceBaseImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Stim::Main
       * line : 394649
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Stim::Main.Stim:ConvergenceBaseImage',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
