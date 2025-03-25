<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TracksMarkersCuePointParams extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpDM:TracksMarkersCuePointParams';

  protected string $name = 'TracksMarkersCuePointParams';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpDM
       * line : 413550
       * type : struct
       * writable : true
       * count : 
       * flags : flattened,list,seq
       */
      'id' => 'XMP::xmpDM.XMP-xmpDM:TracksMarkersCuePointParams',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2624;

}
