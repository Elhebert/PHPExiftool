<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MacOS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MDItemPixelWidth extends AbstractTagGroup
{

  protected string $id = 'MacOS:MDItemPixelWidth';

  protected string $name = 'MDItemPixelWidth';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MacOS::MDItem
       * line : 172952
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MacOS::MDItem.MacOS:MDItemPixelWidth',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
