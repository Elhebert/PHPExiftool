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
class DerivedFromLastModifyDate extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpMM:DerivedFromLastModifyDate';

  protected string $name = 'DerivedFromLastModifyDate';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpMM
       * line : 413812
       * type : date
       * writable : true
       * count : 
       * flags : flattened
       */
      'id' => 'XMP::xmpMM.XMP-xmpMM:DerivedFromLastModifyDate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
