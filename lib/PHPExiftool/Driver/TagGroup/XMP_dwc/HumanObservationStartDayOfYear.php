<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dwc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HumanObservationStartDayOfYear extends AbstractTagGroup
{

  protected string $id = 'XMP-dwc:HumanObservationStartDayOfYear';

  protected string $name = 'HumanObservationStartDayOfYear';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : DarwinCore::Main
       * line : 106301
       * type : integer
       * writable : true
       * count : 
       * flags : flattened
       */
      'id' => 'DarwinCore::Main.XMP-dwc:HumanObservationStartDayOfYear',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
