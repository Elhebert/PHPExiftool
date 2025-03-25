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
class EnvelopeRecordVersion extends AbstractTagGroup
{

  protected string $id = 'IPTC:EnvelopeRecordVersion';

  protected string $name = 'EnvelopeRecordVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::EnvelopeRecord
       * line : 150990
       * type : int16u
       * writable : true
       * count : 
       * flags : mandatory
       */
      'id' => 'IPTC::EnvelopeRecord.IPTC:EnvelopeRecordVersion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2176;

}
