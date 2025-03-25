<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_photomech;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimeCreated extends AbstractTagGroup
{

  protected string $id = 'XMP-photomech:TimeCreated';

  protected string $name = 'TimeCreated';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoMechanic::XMP
       * line : 304973
       * type : string
       * writable : true
       * count : 
       * flags : avoid
       */
      'id' => 'PhotoMechanic::XMP.XMP-photomech:TimeCreated',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2049;

}
