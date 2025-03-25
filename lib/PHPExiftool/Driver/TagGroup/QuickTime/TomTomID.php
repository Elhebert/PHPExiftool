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
class TomTomID extends AbstractTagGroup
{

  protected string $id = 'QuickTime:TomTomID';

  protected string $name = 'TomTomID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::TomTom
       * line : 325019
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::TomTom.QuickTime:TomTomID',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
