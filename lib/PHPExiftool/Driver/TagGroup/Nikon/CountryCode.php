<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CountryCode extends AbstractTagGroup
{

  protected string $id = 'Nikon:CountryCode';

  protected string $name = 'CountryCode';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::LocationInfo
       * line : 196282
       * type : undef
       * writable : true
       * count : 3
       * flags : permanent
       */
      'id' => 'Nikon::LocationInfo.Nikon:CountryCode',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 3;

  protected int $flags = 2052;

}
