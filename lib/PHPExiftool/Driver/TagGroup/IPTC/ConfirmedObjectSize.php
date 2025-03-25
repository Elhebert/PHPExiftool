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
class ConfirmedObjectSize extends AbstractTagGroup
{

  protected string $id = 'IPTC:ConfirmedObjectSize';

  protected string $name = 'ConfirmedObjectSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::PostObjectData
       * line : 151939
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'IPTC::PostObjectData.IPTC:ConfirmedObjectSize',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
