<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Reading2Device extends AbstractTagGroup
{

  protected string $id = 'FLIR:Reading2Device';

  protected string $name = 'Reading2Device';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Reading 2 Device',
  ];

  protected int $count = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::MeterLink
       * line : 123700
       * type : string
       * writable : false
       * count : 16
       * flags : 
       */
      'id' => 'FLIR::MeterLink.FLIR:Reading2Device',
      'desc' => [
        'en' => 'Reading 2 Device',
      ],
    ],
  ];

}
