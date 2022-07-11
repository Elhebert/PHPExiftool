<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PatternCorrectionOffsets extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:PatternCorrectionOffsets';

  protected string $name = 'PatternCorrectionOffsets';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Pattern Correction Offsets',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155858
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:PatternCorrectionOffsets',
      'desc' => [
        'en' => 'Pattern Correction Offsets',
      ],
    ],
  ];

}
