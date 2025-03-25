<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_plus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LicensorTransactionID extends AbstractTagGroup
{

  protected string $id = 'XMP-plus:LicensorTransactionID';

  protected string $name = 'LicensorTransactionID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PLUS::XMP
       * line : 265755
       * type : string
       * writable : true
       * count : 
       * flags : bag,list
       */
      'id' => 'PLUS::XMP.XMP-plus:LicensorTransactionID',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2368;

}
