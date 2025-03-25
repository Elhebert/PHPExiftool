<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DV;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoScanType extends AbstractTagGroup
{

  protected string $id = 'DV:VideoScanType';

  protected string $name = 'VideoScanType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : DV::Main
       * line : 106053
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DV::Main.DV:VideoScanType',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
