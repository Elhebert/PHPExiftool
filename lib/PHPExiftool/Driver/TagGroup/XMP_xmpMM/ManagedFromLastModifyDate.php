<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpMM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ManagedFromLastModifyDate extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpMM:ManagedFromLastModifyDate';

  protected string $name = 'ManagedFromLastModifyDate';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpMM
       * line : 414008
       * type : date
       * writable : true
       * count : 
       * flags : flattened
       */
      'id' => 'XMP::xmpMM.XMP-xmpMM:ManagedFromLastModifyDate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
