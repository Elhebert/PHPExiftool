<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OpColor extends AbstractTagGroup
{

  protected string $id = 'QuickTime:OpColor';

  protected string $name = 'OpColor';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::VideoHeader
       * line : 326228
       * type : int16u
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'QuickTime::VideoHeader.QuickTime:OpColor',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 3;

}
