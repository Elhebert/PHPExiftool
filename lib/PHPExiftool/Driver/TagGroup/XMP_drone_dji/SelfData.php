<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_drone_dji;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SelfData extends AbstractTagGroup
{

  protected string $id = 'XMP-drone-dji:SelfData';

  protected string $name = 'SelfData';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : DJI::XMP
       * line : 104737
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'DJI::XMP.XMP-drone-dji:SelfData',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
