<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ApplicationRecordVersion extends AbstractTagGroup
{

  protected string $id = 'IPTC:ApplicationRecordVersion';

  protected string $name = 'ApplicationRecordVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 149696
       * type : int16u
       * writable : true
       * count : 
       * flags : mandatory
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:ApplicationRecordVersion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2176;

}
