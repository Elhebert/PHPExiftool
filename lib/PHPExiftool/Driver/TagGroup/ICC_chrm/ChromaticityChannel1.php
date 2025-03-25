<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_chrm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChromaticityChannel1 extends AbstractTagGroup
{

  protected string $id = 'ICC-chrm:ChromaticityChannel1';

  protected string $name = 'ChromaticityChannel1';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Chromaticity
       * line : 143109
       * type : fixed32u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'ICC_Profile::Chromaticity.ICC-chrm:ChromaticityChannel1',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

}
