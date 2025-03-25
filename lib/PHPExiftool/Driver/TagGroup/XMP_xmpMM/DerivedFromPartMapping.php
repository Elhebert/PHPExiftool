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
class DerivedFromPartMapping extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpMM:DerivedFromPartMapping';

  protected string $name = 'DerivedFromPartMapping';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpMM
       * line : 413852
       * type : string
       * writable : true
       * count : 
       * flags : flattened
       */
      'id' => 'XMP::xmpMM.XMP-xmpMM:DerivedFromPartMapping',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
