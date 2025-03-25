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
class SerialNumberFormat extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:SerialNumberFormat';

  protected string $name = 'SerialNumberFormat';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::Main
       * line : 79949
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'CanonRaw::Main.CanonRaw:SerialNumberFormat',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
