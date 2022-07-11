<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_pur;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreditLine extends AbstractTagGroup
{

  protected string $id = 'XMP-pur:CreditLine';

  protected string $name = 'CreditLine';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Credit Line',
  ];

  protected int $count = 0;

  protected int $flags = 321;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::pur
       * line : 411640
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Bag,List
       */
      'id' => 'XMP::pur.XMP-pur:CreditLine',
      'desc' => [
        'en' => 'Credit Line',
      ],
    ],
  ];

}
