<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalance extends AbstractTagGroup
{

  protected string $id = 'Ricoh:WhiteBalance';

  protected string $name = 'WhiteBalance';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'White Balance',
    'fr' => 'Balance des blancs',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::ImageInfo
       * line : 332441
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Ricoh::ImageInfo.Ricoh:WhiteBalance',
      'desc' => [
        'en' => 'White Balance',
        'fr' => 'Balance des blancs',
      ],
    ],
    1 => [
      /**
       * table_name : Ricoh::Main
       * line : 332979
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Ricoh::Main.Ricoh:WhiteBalance',
      'desc' => [
        'en' => 'White Balance',
        'fr' => 'Balance des blancs',
      ],
    ],
  ];

}
