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
class SizeMode extends AbstractTagGroup
{

  protected string $id = 'IPTC:SizeMode';

  protected string $name = 'SizeMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::PreObjectData
       * line : 151948
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'IPTC::PreObjectData.IPTC:SizeMode',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
