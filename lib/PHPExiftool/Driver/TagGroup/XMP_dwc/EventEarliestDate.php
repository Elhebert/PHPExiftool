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
class EventEarliestDate extends AbstractTagGroup
{

  protected string $id = 'XMP-dwc:EventEarliestDate';

  protected string $name = 'EventEarliestDate';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : DarwinCore::Main
       * line : 106069
       * type : date
       * writable : true
       * count : 
       * flags : flattened
       */
      'id' => 'DarwinCore::Main.XMP-dwc:EventEarliestDate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
