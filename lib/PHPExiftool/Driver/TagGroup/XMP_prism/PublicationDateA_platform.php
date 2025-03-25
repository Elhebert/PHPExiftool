<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prism;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PublicationDateA_platform extends AbstractTagGroup
{

  protected string $id = 'XMP-prism:PublicationDateA-platform';

  protected string $name = 'PublicationDateA-platform';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::prism
       * line : 411065
       * type : string
       * writable : true
       * count : 
       * flags : avoid,flattened,list
       */
      'id' => 'XMP::prism.XMP-prism:PublicationDateA-platform',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2113;

}
