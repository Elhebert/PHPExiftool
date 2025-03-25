<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensSerialNumber extends AbstractTagGroup
{

  protected string $id = 'Ricoh:LensSerialNumber';

  protected string $name = 'LensSerialNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::SerialInfo
       * line : 333719
       * type : string
       * writable : true
       * count : 16
       * flags : permanent
       */
      'id' => 'Ricoh::SerialInfo.Ricoh:LensSerialNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 16;

  protected int $flags = 2052;

}
