<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ISOExpansion extends AbstractTagGroup
{

  protected string $id = 'Nikon:ISOExpansion';

  protected string $name = 'ISOExpansion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ISOInfo
       * line : 195387
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ISOInfo.Nikon:ISOExpansion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
