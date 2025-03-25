<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_ics;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SubVersions extends AbstractTagGroup
{

  protected string $id = 'XMP-ics:SubVersions';

  protected string $name = 'SubVersions';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::ics
       * line : 408811
       * type : struct
       * writable : true
       * count : 
       * flags : bag,list
       */
      'id' => 'XMP::ics.XMP-ics:SubVersions',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2368;

}
