<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RIFFSize64 extends AbstractTagGroup
{

  protected string $id = 'RIFF:RIFFSize64';

  protected string $name = 'RIFFSize64';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::DS64
       * line : 327839
       * type : int64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::DS64.RIFF:RIFFSize64',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
