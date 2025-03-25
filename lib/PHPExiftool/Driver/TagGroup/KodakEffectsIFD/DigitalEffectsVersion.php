<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakEffectsIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DigitalEffectsVersion extends AbstractTagGroup
{

  protected string $id = 'KodakEffectsIFD:DigitalEffectsVersion';

  protected string $name = 'DigitalEffectsVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::SpecialEffects
       * line : 158572
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Kodak::SpecialEffects.KodakEffectsIFD:DigitalEffectsVersion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
