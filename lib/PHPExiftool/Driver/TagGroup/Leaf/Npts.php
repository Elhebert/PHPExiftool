<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leaf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Npts extends AbstractTagGroup
{

  protected string $id = 'Leaf:Npts';

  protected string $name = 'Npts';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::ToneCurve
       * line : 162127
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::ToneCurve.Leaf:Npts',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
