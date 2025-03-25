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
class ProductID extends AbstractTagGroup
{

  protected string $id = 'IPTC:ProductID';

  protected string $name = 'ProductID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::EnvelopeRecord
       * line : 151175
       * type : string
       * writable : true
       * count : 32
       * flags : list
       */
      'id' => 'IPTC::EnvelopeRecord.IPTC:ProductID',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 32;

  protected int $flags = 2112;

}
