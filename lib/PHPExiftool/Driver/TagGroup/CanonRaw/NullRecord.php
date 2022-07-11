<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NullRecord extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:NullRecord';

  protected string $name = 'NullRecord';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Null Record',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::Main
       * line : 78643
       * type : undef
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonRaw::Main.CanonRaw:NullRecord',
      'desc' => [
        'en' => 'Null Record',
      ],
    ],
  ];

}
