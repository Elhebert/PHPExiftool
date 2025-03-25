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
class CanonFileDescription extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:CanonFileDescription';

  protected string $name = 'CanonFileDescription';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::Main
       * line : 78654
       * type : string
       * writable : true
       * count : 32
       * flags : permanent
       */
      'id' => 'CanonRaw::Main.CanonRaw:CanonFileDescription',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 32;

  protected int $flags = 2052;

}
