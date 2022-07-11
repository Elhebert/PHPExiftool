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
class MDItemPageHeight extends AbstractTagGroup
{

  protected string $id = 'MacOS:MDItemPageHeight';

  protected string $name = 'MDItemPageHeight';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'MD Item Page Height',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MacOS::MDItem
       * line : 173275
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MacOS::MDItem.MacOS:MDItemPageHeight',
      'desc' => [
        'en' => 'MD Item Page Height',
      ],
    ],
  ];

}
