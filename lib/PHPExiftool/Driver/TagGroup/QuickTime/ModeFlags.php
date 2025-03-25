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
class ModeFlags extends AbstractTagGroup
{

  protected string $id = 'QuickTime:ModeFlags';

  protected string $name = 'ModeFlags';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Rights
       * line : 324369
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Rights.QuickTime:ModeFlags',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
