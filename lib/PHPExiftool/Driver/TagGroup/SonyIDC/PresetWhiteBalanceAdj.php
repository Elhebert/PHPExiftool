<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SonyIDC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PresetWhiteBalanceAdj extends AbstractTagGroup
{

  protected string $id = 'SonyIDC:PresetWhiteBalanceAdj';

  protected string $name = 'PresetWhiteBalanceAdj';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preset White Balance Adj',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : SonyIDC::Main
       * line : 394508
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'SonyIDC::Main.SonyIDC:PresetWhiteBalanceAdj',
      'desc' => [
        'en' => 'Preset White Balance Adj',
      ],
    ],
  ];

}
