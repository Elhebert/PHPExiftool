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
class Copyright extends AbstractTagGroup
{

  protected string $id = 'QuickTime:Copyright';

  protected string $name = 'Copyright';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Copyright',
    'fr' => 'Propriétaire du copyright',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Pittasoft
       * line : 324521
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Pittasoft.QuickTime:Copyright',
      'desc' => [
        'en' => 'Copyright',
        'fr' => 'Propriétaire du copyright',
      ],
    ],
  ];

}
