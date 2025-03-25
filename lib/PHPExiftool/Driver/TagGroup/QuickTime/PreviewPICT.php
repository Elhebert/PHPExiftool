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
class PreviewPICT extends AbstractTagGroup
{

  protected string $id = 'QuickTime:PreviewPICT';

  protected string $name = 'PreviewPICT';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Main
       * line : 323760
       * type : ?
       * writable : false
       * count : 
       * flags : binary
       */
      'id' => 'QuickTime::Main.QuickTime:PreviewPICT',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::Main
       * line : 323801
       * type : ?
       * writable : false
       * count : 
       * flags : binary
       */
      'id' => 'QuickTime::Main.QuickTime:PreviewPICT',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2;

}
