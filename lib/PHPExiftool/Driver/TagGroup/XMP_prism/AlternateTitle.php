<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prism;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AlternateTitle extends AbstractTagGroup
{

  protected string $id = 'XMP-prism:AlternateTitle';

  protected string $name = 'AlternateTitle';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::prism
       * line : 410739
       * type : struct
       * writable : true
       * count : 
       * flags : avoid,bag,list
       */
      'id' => 'XMP::prism.XMP-prism:AlternateTitle',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2369;

}
