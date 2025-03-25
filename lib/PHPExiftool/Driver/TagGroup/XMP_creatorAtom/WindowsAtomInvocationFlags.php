<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_creatorAtom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WindowsAtomInvocationFlags extends AbstractTagGroup
{

  protected string $id = 'XMP-creatorAtom:WindowsAtomInvocationFlags';

  protected string $name = 'WindowsAtomInvocationFlags';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::creatorAtom
       * line : 401489
       * type : string
       * writable : true
       * count : 
       * flags : flattened
       */
      'id' => 'XMP::creatorAtom.XMP-creatorAtom:WindowsAtomInvocationFlags',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
