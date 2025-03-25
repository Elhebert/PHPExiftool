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
class MediaData extends AbstractTagGroup
{

  protected string $id = 'QuickTime:MediaData';

  protected string $name = 'MediaData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Main
       * line : 323791
       * type : ?
       * writable : false
       * count : 
       * flags : binary,unknown
       */
      'id' => 'QuickTime::Main.QuickTime:MediaData',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 34;

}
