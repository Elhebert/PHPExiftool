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
class ChromaticityColorant extends AbstractTagGroup
{

  protected string $id = 'ICC-chrm:ChromaticityColorant';

  protected string $name = 'ChromaticityColorant';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Chromaticity
       * line : 143090
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ICC_Profile::Chromaticity.ICC-chrm:ChromaticityColorant',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
