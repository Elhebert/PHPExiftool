<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LastUpdate extends AbstractTagGroup
{

  protected string $id = 'XML:LastUpdate';

  protected string $name = 'LastUpdate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::XML
       * line : 397581
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'XMP::XML.XML:LastUpdate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
