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
class ManagedFromRenditionParams extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpMM:ManagedFromRenditionParams';

  protected string $name = 'ManagedFromRenditionParams';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Managed From Rendition Params',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpMM
       * line : 414406
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::xmpMM.XMP-xmpMM:ManagedFromRenditionParams',
      'desc' => [
        'en' => 'Managed From Rendition Params',
      ],
    ],
  ];

}
